<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function enviarTermoPorEmail($caminhoCompleto, $destinatario, $nome = ''){
  $mail = new PHPMailer(true);

  try {
    // Configurações SMTP
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host       = 'smtplw.com.br';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'udlog'; // usuário SMTP
    $mail->Password   = 'Ti2020@#'; // senha SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Remetente e destinatário
    $mail->setFrom('suporte.ti@envios.udlog.com.br', 'Termos UDLOG');
    $mail->addAddress($destinatario, $nome);

    // Limpar nome e patrimônio para o nome do arquivo
    $nomeLimpo = preg_replace('/[^a-zA-Z0-9]/', '_', $nome);
   $nomeArquivo = 'Termo_' . $nomeLimpo . '.pdf';

    // Anexo
    $mail->addAttachment($caminhoCompleto, 'Termo_Veicular_' . $nome . '.pdf');

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Termo Veicular';
    $mail->Body = "
  <div style='font-family: Arial, sans-serif; font-size: 15px;'>
    <p>Olá $nome,</p>

    <p>Segue anexo o <strong>Termo Veicular</strong> referente ao seguinte colaborador:</p>

    <table cellpadding='8' cellspacing='0' style='border: 1px solid #ccc; border-collapse: collapse;'>
      <tr style='background-color: #f2f2f2;'>
        <td><strong>Colaborador</strong></td>
        <td>$nome</td>
      </tr>
    </table>

    <p>Por favor, guarde este documento para controle interno.</p>

    <p style='margin-top: 30px;'>Atenciosamente,<br><strong>TI - UDLOG</strong></p>
  </div>
";

    $mail->send();
    return "✅ E-mail enviado com sucesso!";
  } catch (Exception $e) {
    return "❌ Erro ao enviar o e-mail: " . $mail->ErrorInfo;
  }
}