<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
require 'enviar_email.php';

use Spatie\Browsershot\Browsershot;

// Garante que o corpo da resposta será JSON
header('Content-Type: application/json');

// Obtém o HTML enviado via POST
$html = $_POST['html'] ?? '';
if (empty($html)) {
    http_response_code(400); // Bad Request
    echo json_encode(['status' => 'erro', 'mensagem' => 'Nenhum HTML foi enviado.']);
    exit;
}

// Define nome do funcionário se vier no POST (opcional)
$nomeFuncionario = $_POST['nome_funcionario'] ?? 'funcionario';
$data = date('Ymd_His');

$nome = $_POST['nome_funcionario'] ?? 'Funcionario';
$patrimonio = $_POST['patrimonio'] ?? '0000';
$emailColaborador = $_POST['email_colaborador'] ?? ''; 


// Define nome do arquivo e caminhos
$nomePDF = "Termo_{$nome}_{$patrimonio}.pdf";
$caminhoPasta = __DIR__ . '/pdfs/';
$caminhoCompleto = $caminhoPasta . $nomePDF;

// Cria pasta se não existir
if (!file_exists($caminhoPasta)) {
    mkdir($caminhoPasta, 0777, true);
}

try {
    // Gera o PDF a partir do HTML (em vez da URL)
    Browsershot::html($html)
        ->setNodeBinary('C:\Program Files\nodejs\node.exe')   // Ajuste conforme seu sistema
        ->setNpmBinary('C:\Program Files\nodejs\npm.cmd')     // Ajuste conforme seu sistema
        ->setChromePath('C:\Users\bruno.carvalho\.cache\puppeteer\chrome\win64-138.0.7204.168\chrome-win64\chrome.exe')
        ->noSandbox()
        ->showBackground()                                    // Mostra cores de fundo e sombras
        ->format('A4')
        ->margins(5, 5, 5, 5)
        ->savePdf($caminhoCompleto);

    // Envia o PDF por e-mail
   $resultadoEmailFixo = enviarTermoPorEmail($caminhoCompleto, 'suporte.ti@udlog.com.br', $nome, $patrimonio );

// Envia o PDF para o colaborador, se o e-mail foi preenchido
$resultadoEmailColaborador = '';
if (!empty($emailColaborador)) {
    $resultadoEmailColaborador = enviarTermoPorEmail($caminhoCompleto, $emailColaborador, $nome, $patrimonio );
}

    echo json_encode([
        'status' => 'ok',
        'mensagem' => 'PDF gerado e enviado com sucesso.',
        'arquivo' => $nomePDF,
        'email_fixo' => $resultadoEmailFixo,
        'email_colaborador' => $resultadoEmailColaborador
    ]);
} catch (Exception $e) {
    http_response_code(500); // erro interno
    file_put_contents('log_email.txt', json_encode($e->getMessage()));

    echo json_encode([
        'status' => 'erro',
        'mensagem' => 'Falha ao gerar ou enviar PDF.',
        'erro' => $e->getMessage()
    ]);
  file_put_contents('log_email.txt', $e->getMessage());
}