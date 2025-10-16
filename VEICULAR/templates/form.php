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
          <div class="udlog-logo">
            <img src="https://tinyurl.com/27xe7cvv" alt="Logo UDLOG">
          </div>
          <div class="title-container">
            <p>TERMO DE RESPONSABILIDADE</p>
            <p>NO USO DE VEICULOS</p>
          </div>
          </div>
        <div class="info-table">
          <div>Código: FO.TI.006</div>
          <div>Revisão: 00</div>
          <div>Data: 10/04/2025</div>
          <div>Responsável: T.I.</div>
        </div>
      </div>
    </header>


    <h1>TERMO DE RESPONSABILIDADE NO USO DE VEÍCULOS</h1>
    <p>
      Pelo presente termo, declaro ciente, referente à utilização de veículos pertinentes à empresa UDLOG Armazéns Gerais Transporte e Logística, comprometendo-me a cumprir integralmente as condições estabelecidas para o uso, preservação e devolução dos mesmos.
    </p>

    <h3>Cláusulas do Termo:</h3>
    <ol>
      <li><strong>Uso do Veículo:</strong> 
        <ul>
        <li> O veículo será utilizado exclusivamente para atividades profissionais, sendo vedado o uso para fins pessoais, salvo autorização prévia e expressa da empresa.</li>
        </ul>
    </li>

      <li><strong>Responsabilidade por Danos e Avarias:</strong>
        <ul>
          <li>Declaro estar ciente de que qualquer dano, avaria ou acidente ocorrido no veículo, decorrente de negligência, imprudência ou uso indevido, será de minha responsabilidade.</li>
          <li>Danos alheios à minha conduta ou força maior serão analisados pela empresa.</li>
        </ul>
      </li>

      <li><strong>Cuidados com o Veículo:</strong>
        <ul>
          <li>Realizar o Checklist ao utilizar o veículo;</li>
          <li>Informar imediatamente à empresa quaisquer problemas ou avarias;</li>
          <li>Cumprir as leis de trânsito vigentes.</li>
        </ul>
      </li>

      <li><strong>Descontos por Danos:</strong> Autorizo descontos em minha remuneração (CLT), conforme art. 462 da CLT, por danos devidamente comprovados. Caso seja PJ, assumo a responsabilidade conforme contrato.</li>

      <li><strong>Devolução do Veículo:</strong> O veículo deverá ser devolvido em perfeitas condições, salvo desgaste natural.</li>

      <li><strong>Penalidades:</strong> O descumprimento das condições poderá acarretar sanções disciplinares ou rescisão contratual por justa causa.</li>
    </ol>

    <p>Declaro estar ciente e de acordo com as condições estabelecidas neste termo, bem como com as disposições legais aplicáveis.</p>

    <div class="field-group">
      <label for="nome">Nome completo:</label> 
      <input style="width: 300px" type="text" id="nomeFuncionario" />

      <label for="cargo">Cargo:</label>
      <input style="width: 300px" type="text" id="cargo" />

      <label for="departamento">Departamento:</label>
      <input style="width: 300px" type="text" id="departamento" />

      <label for="centro">Centro de Custo:</label>
      <input style="width: 150px" type="text" id="centro" />

      <label for="data">Data:</label>
      <input style="width: 85px"type="text" id="data" />
    </div>

<!-- Assinatura do Recebedor -->
  <div style="text-align: center;">
    <p><strong> Assinatura do usuario </strong></p>
    <div
    style="
        border: 1px solid #000;
        width: 555px;
        height: 146px;
        background-color: #fff;
        box-sizing: border-box;
        margin: 0 auto;
      "
    >
      <canvas
        id="AssinaturaUsuario"
        width="540px"
        height="130px"
        style="display: block; touch-action: none; user-select: none; border: none;"
        
      ></canvas>
          </div>
          
          <button
            type="button"
            onclick="limparCanvas('AssinaturaUsuario')"
            class="action-button no-print"
            style="margin-top: 10px;"
          >
            Limpar
          </button>
        </div>
    <!-- Botão PDF -->
    <div class="footer no-print" style="text-align: center; margin-top: 60px;">
      <button class="action-button" onclick="window.print()">Baixar PDF</button>
    </div>
  </div>

</body>

</html>