<?php
//variáveis
$coletor = '';
$radio = '';
$desktop = '';
$celular = '';
$outros = '';
$patrimonio = '';
$observacao = '';
$usuario = '';
$cargo = '';
$departamento = '';
$localidade = '';
$centro_custo = '';
$ti_nome = '';
$ti_cargo = '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=21cm, initial-scale=1">
  <title>Termo de Devolução de Equipamentos</title>
  <link rel="stylesheet" href="/DEVOLUCAO/assets/css/style.css">
</head>
<body style="margin:0; padding:0; background:#f0f2f5;">
<div class="a4-sheet">
  <header class="custom-header">
    <div class="header-content-wrapper">
      <div class="header-main-content">
        <div class="udlog-logo">
          <img src="https://i.postimg.cc/sgCdvkCZ/udlog.png" alt="Logo UDLOG">
        </div>
        <div class="title-container">
          <div class="title-text">TERMO DE DEVOLUÇÃO DE</div>
          <div class="title-text">EQUIPAMENTOS</div>
          <div class="title-text">DE TI E COMUNICAÇÃO</div>
        </div>
        <div class="guibor-logo">
          <img src="https://i.postimg.cc/P51HytQ4/guibor.png" alt="Logo Guibor">
        </div>
      </div>
      <div class="info-table">
        <div>Código: FO.TI.007</div>
        <div>Revisão: 03 </div>
        <div>Data: 12/08/2025 </div>
        <div>Responsável: T.I.</div>
      </div>
    </div>
  </header>


  <!-- Declaração -->
  <section class="form-section declaration-section">
    <div class="declaration-line-1">
      <span>Eu,</span><input style="width: 300px" type="text" name="usuario" value="<?php echo $usuario; ?>">
      <span>, por motivo de</span><input style="width: 280px" type="text" name="motivo">
    </div>
    <p class="declaration-line-2">estou devolvendo à Empresa os itens mencionados abaixo:</p>
  </section>

  <!-- Itens -->
  <section class="form-section">
    <ul class="items-list">
      <li><label><input type="checkbox" name="coletor" <?php if($coletor) echo 'checked'; ?>> Coletor </label></li>
      <li><label><input type="checkbox" name="radio" <?php if($radio) echo 'checked'; ?>> Rádio </label></li>
      <li><label><input type="checkbox" name="desktop" <?php if($desktop) echo 'checked'; ?>> Desktop/Notebook </label></li>
      <li><label><input type="checkbox" name="celular" <?php if($celular) echo 'checked'; ?>> Celular/Tablet </label></li>
    </ul>
    <label class="other-label">
      <input type="checkbox" name="outros_check" <?php if($outros) echo 'checked'; ?>><span>Outros</span>
      <input style="width: 300px" type="text" name="outros" value="<?php echo $outros; ?>">
    </label>
    <span> Patrimônio </span>
    <input type="text" style="width: 70px" name="patrimonio" value="<?php echo $patrimonio; ?>">
  </section>

  <!-- Observação -->
  <section class="form-section">
    <label for="observacao">Observação:</label>
    <div id="observacao" contenteditable="true"
      style="width: 96%; min-height: 70px; border: 1px solid #ccc; padding: 8px; white-space: pre-wrap;"><?php echo htmlspecialchars($observacao); ?></div>
  </section>

  <!-- Data -->
  <section class="form-section date-section">
    <div class="input-wrapper"><input style="width: 110px" type="text" name="cidade"></div>
    <span>,</span>
    <div class="input-wrapper"><input style="width: 80px" type="text" name="dia"></div>
    <span>de</span>
    <div class="input-wrapper"><input style="width: 120px" type="text" name="mes"></div>
    <span>de</span>
    <div class="input-wrapper"><input style="width: 100px" type="text" name="ano"></div>
  </section>

  <!-- Dados do colaborador -->
  <section class="form-section">
    <table class="user-data-table">
      <tr><td>Usuário:</td><td><input style="width: 500px" type="text" name="usuario" value="<?php echo $usuario; ?>"></td></tr>
      <tr><td>Cargo:</td><td><input style="width: 500px" type="text" name="cargo" value="<?php echo $cargo; ?>"></td></tr>
      <tr><td>Departamento:</td><td><input style="width: 500px" type="text" name="departamento" value="<?php echo $departamento; ?>"></td></tr>
      <tr><td>Localidade:</td><td><input style="width: 500px" type="text" name="localidade" value="<?php echo $localidade; ?>"></td></tr>
      <tr><td>Centro de custo:</td><td><input style="width: 500px" type="text" name="centro_custo" value="<?php echo $centro_custo; ?>"></td></tr>
    </table>
  </section>

  <!-- Dados do recebedor -->
  <section class="form-section">
    <table class="user-data-table">
      <tr><td colspan="2" style="font-weight: bold; text-align: left; padding-left: 250px;">Recebido por (Área de TI)</td></tr>
      <tr><td>Nome:</td><td><input style="width: 475px" type="text" name="ti_nome" value="<?php echo $ti_nome; ?>"></td></tr>
      <tr><td>Cargo:</td><td><input style="width: 475px" type="text" name="ti_cargo" value="<?php echo $ti_cargo; ?>"></td></tr>
    </table>
  </section>

  <!-- Assinaturas -->
  <div class="assinaturas">
    <div>
      <p><strong>Assinatura do Usuário</strong></p>
      <canvas id="AssinaturaUsuario" width="340" height="130" class="assinatura"></canvas>
      <button
            type="button"
            onclick="limparCanvas('AssinaturaUsuario')"
            class="action-button no-print"
            style="margin-top: 10px;">
            Limpar
          </button>
    </div>
    <div>
      <p><strong>Assinatura do Recebedor</strong></p>
      <canvas id="AssinaturaRecebedor" width="340" height="130" class="assinatura"></canvas>
      <button
            type="button"
            onclick="limparCanvas('AssinaturaRecebedor')"
            class="action-button no-print"
            style="margin-top: 10px;">
            Limpar
          </button>
    </div>
  </div>

  <!-- Botão PDF -->
  <div class="footer no-print">
    <button class="action-button" onclick="window.print()">Baixar PDF</button>
  </div>
</div>
</body>
</html>