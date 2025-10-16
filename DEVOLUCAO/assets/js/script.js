// Assinatura
function configurarAssinatura(idCanvas) {
  const canvas = document.getElementById(idCanvas);
  const ctx = canvas.getContext("2d");
  let desenhando = false;

  // Configurações do estilo do traço
  ctx.lineWidth = 2; // Espessura do traço
  ctx.lineCap = "round"; // Pontas arredondadas
  ctx.strokeStyle = "#000000"; // Cor do traço

  function getPos(evt) {
    const rect = canvas.getBoundingClientRect();
    return { x: evt.clientX - rect.left, y: evt.clientY - rect.top };
  }

  canvas.addEventListener("mousedown", e => {
    desenhando = true;
    const pos = getPos(e);
    ctx.beginPath();
    ctx.moveTo(pos.x, pos.y);
    // Desenha um ponto para cliques rápidos
    ctx.lineTo(pos.x, pos.y);
    ctx.stroke();
  });

  canvas.addEventListener("mousemove", e => {
    if (!desenhando) return;
    const pos = getPos(e);
    ctx.lineTo(pos.x, pos.y);
    ctx.stroke();
  });

  canvas.addEventListener("mouseup", () => desenhando = false);
  canvas.addEventListener("mouseleave", () => desenhando = false);
}

function limparCanvas(idCanvas) {
  const canvas = document.getElementById(idCanvas);
  const ctx = canvas.getContext("2d");
  ctx.clearRect(0, 0, canvas.width, canvas.height);
}

// Inicialização das assinaturas
document.addEventListener("DOMContentLoaded", () => {
  configurarAssinatura("AssinaturaUsuario");
  configurarAssinatura("AssinaturaRecebedor");
});
