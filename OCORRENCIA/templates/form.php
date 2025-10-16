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
            <div class="title-text">REGISTRO DE OCORRÊNCIAS</div>
            <div class="title-text">COM EQUIPAMENTOS DE TI</div>
          </div>
          <div class="guibor-logo">
            <img src="https://i.postimg.cc/P51HytQ4/guibor.png" alt="Logo Guibor">
          </div>
        </div>
        <div class="info-table">
          <div>Código: FO.TI.008</div>
          <div>Revisão: 00</div>
          <div>Data: 10/07/2025</div>
          <div>Responsável: T.I.</div>
        </div>
      </div>
    </header>

    <label>Nº da Ocorrência:</label>
    <input type="text" name="numero_ocorrencia" style="width: 80px;" maxlength="5">

    <h2>Informações da Ocorrência</h2>
    <div style="display: flex; gap: 150px; align-items: center; margin-top: 15px;">
      <div>
        <label style="margin-top: 0;">Data da Ocorrência:</label>
        <input type="text" name="data_ocorrencia" style="width: 90px;" placeholder="">
      </div>
      <div>
        <label style="margin-top: 0;">Hora da Ocorrência:</label>
        <input type="text" name="hora_ocorrencia" style="width: 60px;" placeholder="">
      </div>
      <div>
        <label style="margin-top: 0;">Data do Registro:</label>
        <input type="text" name="data_registro" style="width: 90px;" placeholder="">
      </div>
    </div>

    <label>Registrado por:</label>
    <input type="text" name="registrado_por" style="width: 500px">

    <label>Setor/Local da Ocorrência:</label>
    <input type="text" name="setor_local" style="width: 500px">

    <label>Impacto no Usuário:</label>
    <input type="text" name="impacto_usuario" style="width: 700px">

    <h2>Dados do Equipamento Acidentado</h2>
    <div class="checkbox-group">
      <label><input type="checkbox"> Computador</label>
      <label><input type="checkbox"> Monitor</label>
      <label><input type="checkbox"> Coletor de Dados</label>
      <label><input type="checkbox"> Celular</label>
      <label><input type="checkbox"> Rádio</label>
      <label><input type="checkbox"> Impressora</label>
      <label><input type="checkbox"> Outro (especifique): <input type="text" name="outro_equipamento" style="width: 250px"></label>
    </div>

    <label>Marca:</label>
    <input type="text" name="marca" style="width: 200px">

    <label>Modelo:</label>
    <input type="text" name="modelo" style="width: 200px">

    <label>Número de Série/Patrimônio:</label>
    <input type="text" name="numero_serie" style="width: 70px">

    <label>Localização Atual do Equipamento:</label>
    <input type="text" name="localizacao_atual" style="width: 400px">

    <label>Responsável pelo Uso (se aplicável):</label>
    <input type="text" name="responsavel_uso" style="width: 400px">
    <p> </p>

    <div style="page-break-after: always;"></div>


    <!-- Página 2 -->
    <br>
    <header class="custom-header">
      <div class="header-content-wrapper">
        <div class="header-main-content">
          <div class="udlog-logo">
            <img src="https://i.postimg.cc/sgCdvkCZ/udlog.png" alt="Logo UDLOG">
          </div>
          <div class="title-container">
            <div class="title-text">REGISTRO DE OCORRÊNCIAS</div>
            <div class="title-text">COM EQUIPAMENTOS DE TI</div>
          </div>
          <div class="guibor-logo">
            <img src="https://i.postimg.cc/P51HytQ4/guibor.png" alt="Logo Guibor">
          </div>
        </div>
        <div class="info-table">
          <div>Código: FO.TI.008</div>
          <div>Revisão: 00</div>
          <div>Data: 10/07/2025</div>
          <div>Responsável: T.I.</div>
        </div>
      </div>
    </header>

    <h2>Detalhes do Acidente</h2>
    <div style="display:flex; flex-direction:column; gap:10px; margin-top:10px;">
      <div style="display:flex; align-items:center; gap:10px;">
        <span style="font-weight:bold;">Fotos Anexadas?</span>
        <label style="display:inline-flex; align-items:center; gap:4px; margin:0; font-weight:normal;">
          <input type="checkbox" style="margin:0;"> Sim
        </label>
        <label style="display:inline-flex; align-items:center; gap:4px; margin:0; font-weight:normal;">
          <input type="checkbox" style="margin:0;"> Não
        </label>
      </div>

      <div style="display:flex; align-items:center; gap:10px;">
        <span style="font-weight:bold;">Equipamento Parcialmente Funcional?</span>
        <label style="display:inline-flex; align-items:center; gap:4px; margin:0; font-weight:normal;">
          <input type="checkbox" style="margin:0;"> Sim
        </label>
        <label style="display:inline-flex; align-items:center; gap:4px; margin:0; font-weight:normal;">
          <input type="checkbox" style="margin:0;"> Não
        </label>
      </div>
    </div>



    <label>Tipo de Dano:</label>
    <div class="checkbox-group" style="display: flex; flex-wrap: wrap; gap: 7px; margin-top: 10px;">
      <label><input type="checkbox"> Queda</label>
      <label><input type="checkbox"> Impacto</label>
      <label><input type="checkbox"> Problema elétrico</label>
      <label><input type="checkbox"> Superaquecimento</label>
      <label><input type="checkbox"> Derramamento de Líquido</label>
      <label><input type="checkbox"> Dano estético (arranhões, amassados)</label>
      <label><input type="checkbox"> Dano por mau uso (especifique):
        <input type="text" name="mau_uso" style="width: 200px;">
      </label>
    </div>

    <label>Descrição Detalhada do Ocorrido:</label>
    <textarea style="height: 150px" name="descricao_ocorrido"></textarea>

    <label>Testes Realizados e Resultados:</label>
    <textarea style="height: 150px" name="testes_resultados"></textarea>

    <label>Comentários Adicionais/Observações:</label>
    <textarea style="height: 150px" name="comentarios"></textarea>

    <div style="page-break-after: always;"></div>
    <p> </p>

    <!-- Página 3 -->
    <header class="custom-header">
      <div class="header-content-wrapper">
        <div class="header-main-content">
          <div class="udlog-logo">
            <img src="https://i.postimg.cc/sgCdvkCZ/udlog.png" alt="Logo UDLOG">
          </div>
          <div class="title-container">
            <div class="title-text">REGISTRO DE OCORRÊNCIAS</div>
            <div class="title-text">COM EQUIPAMENTOS DE TI</div>
          </div>
          <div class="guibor-logo">
            <img src="https://i.postimg.cc/P51HytQ4/guibor.png" alt="Logo Guibor">
          </div>
        </div>
        <div class="info-table">
          <div>Código: FO.TI.008</div>
          <div>Revisão: 00</div>
          <div>Data: 10/07/2025</div>
          <div>Responsável: T.I.</div>
        </div>
      </div>
    </header>

    <h2>Ações Pós-Acidente (Preenchido pela TI)</h2>

    <label>Equipe de TI Responsável:</label>
    <input type="text" name="equipe_ti">

    <label>Data da Análise/Intervenção:</label>
    <input type="text" name="data_analise" style="width: 100px;" placeholder="">

    <label>Diagnóstico Inicial:</label>
    <textarea style="height: 120px" name="diagnostico_inicial"></textarea>

    <label>Diagnóstico Final:</label>
    <textarea style="height: 120px" name="diagnostico_final"></textarea>

    <label>Solução Aplicada:</label>
    <textarea style="height: 120px" name="solucao_aplicada"></textarea>

    <label>Peças Substituídas:</label>
    <textarea style="height: 120px" name="pecas_substituidas"></textarea>

    <label>Data de Finalização:</label>
    <input type="text" name="data_finalizacao" style="width: 100px;" placeholder="">

    <!-- Botão PDF -->
    <div class="footer no-print" style="margin-top: 40px; text-align: center;">
      <button class="action-button" onclick="window.print()">Baixar PDF</button>
    </div>
  </div>
</body>

</html>