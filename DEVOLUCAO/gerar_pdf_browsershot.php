<?php
// Evita quebrar JSON com warnings/notices
ini_set('display_errors', 0);
error_reporting(E_ALL);

require 'vendor/autoload.php';
require 'enviar_email.php';

use Spatie\Browsershot\Browsershot;

// Sempre retorna JSON
header('Content-Type: application/json; charset=utf-8');

// Obtém o HTML enviado via POST
$html = $_POST['html'] ?? '';
if (empty($html)) {
    http_response_code(400); // Bad Request
    echo json_encode([
        'status'   => 'erro',
        'mensagem' => 'Nenhum HTML foi enviado.'
    ]);
    exit;
}

// Dados recebidos
$nome         = $_POST['nome_funcionario'] ?? 'Funcionario';
$patrimonio   = $_POST['patrimonio'] ?? '0000';
$emailColab   = $_POST['email_colaborador'] ?? '';
$data         = date('Ymd_His');

// Caminhos
$nomePDF        = "Termo_{$nome}_{$patrimonio}.pdf";
$caminhoPasta   = __DIR__ . '/pdfs/';
$caminhoCompleto = $caminhoPasta . $nomePDF;

// Cria pasta se não existir
if (!file_exists($caminhoPasta)) {
    mkdir($caminhoPasta, 0777, true);
}

try {
    // Gera o PDF com Browsershot
    Browsershot::html($html)
        ->setNodeBinary('C:\Program Files\nodejs\node.exe')
        ->setNpmBinary('C:\Program Files\nodejs\npm.cmd')
        ->setChromePath('C:\Program Files\Google\Chrome\Application\chrome.exe')
        ->noSandbox()
        ->showBackground()
        ->format('A4')
        ->margins(5, 5, 5, 5)
        ->savePdf($caminhoCompleto);

    // Envia e-mails
    $resultadoEmailFixo = enviarTermoPorEmail(
        $caminhoCompleto,
        'suporte.ti@udlog.com.br',
        $nome,
        $patrimonio
    );

    $resultadoEmailColab = '';
    if (!empty($emailColab)) {
        $resultadoEmailColab = enviarTermoPorEmail(
            $caminhoCompleto,
            $emailColab,
            $nome,
            $patrimonio
        );
    }

    // Resposta OK
    echo json_encode([
        'status'             => 'ok',
        'mensagem'           => 'PDF gerado e enviado com sucesso.',
        'arquivo'            => $nomePDF,
        'email_fixo'         => $resultadoEmailFixo,
        'email_colaborador'  => $resultadoEmailColab
    ], JSON_UNESCAPED_UNICODE);
} catch (Exception $e) {
    http_response_code(500); // erro interno

    // Log detalhado
    file_put_contents(
        __DIR__ . '/log_email.txt',
        date('Y-m-d H:i:s') . " - " . $e->getMessage() . "\n" . $e->getTraceAsString() . "\n\n",
        FILE_APPEND
    );

    // Resposta limpa
    echo json_encode([
        'status'   => 'erro',
        'mensagem' => 'Falha ao gerar ou enviar PDF.',
        'erro'     => $e->getMessage()
    ], JSON_UNESCAPED_UNICODE);
    exit;
}
