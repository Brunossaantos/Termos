<?php
// Variáveis corretas para o código
$tipo_equipamento = '';
$chip = '';
$linha = '';
$simm_id = '';
$patrimonio = '';
$numero_serie = '';
$marca = '';
$modelo = '';
$pin = '';
$imei1 = '';
$imei2 = '';
$mac_address = '';
$observacao = '';
$nome_usuario = '';
$cargo_usuario = '';
$departamento_usuario = '';
$centro_custo_usuario = '';
$data_entrega = '';
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
          <div class="logo-container">
            <img
              src="https://i.postimg.cc/sgCdvkCZ/udlog.png"
              alt="Logo UDLOG" />
          </div>
          <div class="title-container">
            <p>TERMO DE RESPONSABILIDADE</p>
            <p>E ACEITAÇÃO EQUIPAMENTOS</p>
          </div>
          <div class="guibor-logo">
            <img
              src="https://i.postimg.cc/P51HytQ4/guibor.png"
              alt="Logo Guibor" />
          </div>
        </div>
        <div class="info-table">
          <div>Código: FO.TI.005</div>
          <div>Revisão: 03</div>
          <div>Data: 19/02/2025</div>
          <div>Responsável: T.I.</div>
        </div>
      </div>
    </header>

    <p class="intro-text">
      Pelo Presente Termo assumo inteira responsabilidade pelo aparelho abaixo
      descrito:
    </p>

    <div class="form-section">
      <fieldset>
        <legend>Tipo de equipamento:</legend>
        <div class="form-section">
          <div class="checkbox-group">
            <label><input type="checkbox" /><span>Celular</span></label>
            <label><input type="checkbox" /><span>Coletor</span></label>
            <label><input type="checkbox" /><span>Rádio</span></label>
            <label><input type="checkbox" /><span>Notebook</span></label>
            <label><input type="checkbox" /><span>Tablet</span></label>
            <label class="other-label"><input type="checkbox" /><span>Outros:</span>
              <input type="text" class="input-line" /></label>
          </div>
          <div class="line-item-container">
            <div class="chip-options-group">
              <span class="label-title">Chip:</span>
              <div class="chip-options">
                <label><input type="checkbox" /><span>Dados</span></label>
                <label><input type="checkbox" /><span>Voz</span></label>
                <label><input type="checkbox" /><span>Não Possui</span></label>
              </div>
            </div>
            <div class="line-item">
              <label for="linha">Linha:</label>
              <input type="text" id="linha" style="width: 140px" ; />
            </div>
          </div>
          <div>
            <label>SIMM ID:</label>
            <input
              type="text"
              id="simm_id"
              maxlength="20"
              class="input-format simm-only"
              style="width: 450px"
              ; />
          </div>

          <div class="form-grid grid-cols-5">
            <div>
              <label>No. Patrimônio:</label>
              <input
                type="text"
                name="patrimonio"
                id="patrimonio"
                maxlength="4"
                class="input-format numeric-only"
                style="width: 115px"
                ; />
            </div>

            <div>
              <label for="nserie">No. Série:</label><input type="text" id="nserie" />
            </div>
            <div>
              <label for="marca">Marca:</label><input type="text" id="marca" />
            </div>
            <div>
              <label for="modelo">Modelo:</label><input type="text" id="modelo" />
            </div>
            <div>
              <label for="pin">PIN:</label><input type="text" id="pin" />
            </div>
          </div>
          <div style="display: flex; gap: 20px">
            <div style="flex: 1">
              <label for="imei1">IMEI 1:</label>
              <input
                type="text"
                id="imei1"
                class="input-format"
                maxlength="15" />
            </div>

            <div style="flex: 1">
              <label for="imei2">IMEI 2:</label>
              <input
                type="text"
                id="imei2"
                class="input-format"
                maxlength="15" />
            </div>
          </div>

          <div>
            <label>MAC ADDRESS:</label>
            <input
              type="text"
              id="mac"
              maxlength="17"
              class="input-format"
              style="width: 380px"
              ; />
          </div>
        </div>
      </fieldset>
    </div>

    <fieldset>
      <div class="clauses">
        <p>
          1. Declaro ser de minha inteira responsabilidade o uso adequado do
          equipamento fornecido, comprometendo-me a mantê-lo nas mesmas
          condições de recebimento, exceto pelo desgaste natural decorrente do
          uso. Comprometo-me a devolvê-lo nas mesmas condições, nos casos de
          transferência de setor ou desligamento da empresa.
        </p>
        <p>
          2. Estou ciente de que a utilização do equipamento é de uso
          exclusivo para as atividades profissionais na UDLOG/GUIBOR, sendo
          proibido para fins pessoais.
        </p>
        <p>
          3. Em caso de danos ao equipamento, comprometo-me a notificar
          imediatamente o departamento de TI e meu superior imediato, para que
          as medidas necessárias sejam tomadas. Danos causados por mau uso
          serão avaliados pela empresa, podendo resultar em descontos de
          valores diretamente na folha de pagamento, conforme a legislação
          trabalhista (CLT, artigo 462, § 1º).
        </p>
        <p>
          Caso atue como prestador de serviços (Pessoa Jurídica - PJ),
          reconheço minha responsabilidade pela reparação de danos ou
          prejuízos causados ao equipamento, desde que devidamente comprovados
          pela empresa e decorrentes de minha responsabilidade conforme
          estipulado em contrato ou acordo específico firmado entre as partes.
        </p>
        <p>
          4. É obrigatório o uso da capa de proteção fornecida junto ao
          equipamento, considerada parte integrante do kit de segurança e
          conservação.
        </p>
        <p>
          5. Fica proibido ceder, emprestar, transferir ou qualquer outra ação
          que envolva o equipamento ou kit a terceiros, sem autorização prévia
          do superior imediato e do departamento de TI.
        </p>
        <p>
          6. O equipamento é de uso exclusivo do colaborador que assinou este
          termo, sendo de sua inteira responsabilidade qualquer dano ou perda
          decorrente de uso inadequado ou negligência.
        </p>

        <div style="page-break-after: always"></div>
      </div>
    </fieldset>
    <!-- Segunda Página -->
    <br />
    <header class="custom-header">
      <div class="header-content-wrapper">
        <div class="header-main-content">
          <div class="logo-container">
            <img
              src="https://i.postimg.cc/sgCdvkCZ/udlog.png"
              alt="Logo UDLOG" />
          </div>
          <div class="title-container">
            <p>TERMO DE RESPONSABILIDADE</p>
            <p>E ACEITAÇÃO EQUIPAMENTOS</p>
          </div>
          <div class="guibor-logo">
            <img
              src="https://i.postimg.cc/P51HytQ4/guibor.png"
              alt="Logo Guibor" />
          </div>
        </div>
        <div class="info-table">
          <div>Código: FO.TI.005</div>
          <div>Revisão: 03</div>
          <div>Data: 19/02/2025</div>
          <div>Responsável: T.I.</div>
        </div>
      </div>
    </header>

    <fieldset>
      <legend>Itens Disponibilizados</legend>
      <div class="itens-group">
        <label style="font-size: 1rem">
          <input type="checkbox" /><span>Fonte de energia para notebook</span></label>
        <label style="font-size: 1rem"><input type="checkbox" /><span>Mouse e Teclado sem fio para Notebook</span></label>
        <label style="font-size: 1rem"><input type="checkbox" /><span>Carregador</span></label>
        <label style="font-size: 1rem"><input type="checkbox" /><span>Alça de suporte</span></label>
        <label style="font-size: 1rem"><input type="checkbox" /><span>Capa para proteção</span></label>
        <label style="font-size: 1rem"><input type="checkbox" /><span>Película de proteção</span></label>
      </div>
    </fieldset>

    <!-- Observação -->
    <section class="form-section">
      <label style="font-size: 1rem" for="observacao">Observação:</label>
      <div
        id="observacao"
        contenteditable="true"
        style="
            width: 96%;
            min-width: 300px;
            min-height: 70px;
            border: 1px solid #ccc;
            padding: 8px;
            white-space: pre-wrap;
          "></div>
    </section>
    <br />
    <fieldset>
      <legend>Dados do Usuário:</legend>
      <table class="user-data-table" style="border: 1px solid #ccc;">
        <tbody>
          <tr>
            <td style="border: 1px solid #ccc;">Nome completo:</td>
            <td style="border: 1px solid #ccc;"><input
                type="text"
                name="nomeFuncionario"
                id="nomeFuncionario"
                style="border: none; width: 100%;" /></td>
          </tr>
          <tr>
            <td style="border: 1px solid #ccc;">Cargo:</td>
            <td style="border: 1px solid #ccc;"><input type="text" style="border: none; width: 100%;" /></td>
          </tr>
          <tr>
            <td style="border: 1px solid #ccc;">Departamento:</td>
            <td style="border: 1px solid #ccc;"><input type="text" style="border: none; width: 100%;" /></td>
          </tr>
          <tr>
            <td style="border: 1px solid #ccc;">Centro de Custo:</td>
            <td style="border: 1px solid #ccc;"><input type="text" style="border: none; width: 100%;" /></td>
          </tr>
        </tbody>
      </table>
    </fieldset>

    <div style="margin-top: 1rem" class="line-item">
      <label style="font-size: 1rem" for="data_entrega">Data Entrega:</label>
      <input
        type="text"
        id="data_entrega"
        style="
            width: 90px;
            height: 35px;
            padding: 0.2rem;
            border: 1px solid #ccc;
            border-radius: 4px;
          " />
    </div>

    <div class="signature-section">
      <!-- Assinatura do Usuário -->
      <div class="assinatura-container">
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

      <!-- Assinatura do Recebedor -->
      <div class="assinatura-container">
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