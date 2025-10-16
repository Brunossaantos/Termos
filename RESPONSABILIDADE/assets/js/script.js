document.addEventListener("DOMContentLoaded", function () {
  // Faz com que o foco avance automaticamente entre os campos de dígitos
  var inputs = document.querySelectorAll(".auto-jump");
  inputs.forEach(function (input, index) {
    input.addEventListener("input", function (e) {
      if (
        e.target.value.length >= e.target.maxLength &&
        index < inputs.length - 1
      ) {
        inputs[index + 1].focus();
      }
    });
    input.addEventListener("keydown", function (e) {
      if (e.key === "Backspace" && e.target.value.length === 0 && index > 0) {
        inputs[index - 1].focus();
      }
    });
  });

  //mac
  const macInput = document.getElementById("mac");
  macInput.addEventListener("input", function (e) {
    let value = e.target.value.toUpperCase().replace(/[^A-F0-9]/g, "");
    let formatted = "";
    for (let i = 0; i < value.length && i < 12; i += 2) {
      if (i > 0) formatted += ":";
      formatted += value.substring(i, i + 2);
    }
    e.target.value = formatted;
  });

  // Garante que apenas números sejam digitados em campos específicos
  const numericInputs = document.querySelectorAll(".numeric-only");
  numericInputs.forEach(function (input) {
    input.addEventListener("input", function (e) {
      e.target.value = e.target.value.replace(/\D/g, "");
    });
  });

  // Máscara para o campo de linha (telefone)
  const linhaInput = document.getElementById("linha");
  linhaInput.addEventListener("input", function (e) {
    let value = e.target.value.replace(/\D/g, "");
    if (value.length > 11) {
      value = value.slice(0, 11);
    }
    if (value.length > 7) {
      value = `(${value.slice(0, 2)}) ${value.slice(2, 7)}-${value.slice(7)}`;
    } else if (value.length > 2) {
      value = `(${value.slice(0, 2)}) ${value.slice(2)}`;
    } else if (value.length > 0) {
      value = `(${value}`;
    }
    e.target.value = value;
  });
});

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

  canvas.addEventListener("mousedown", (e) => {
    desenhando = true;
    const pos = getPos(e);
    ctx.beginPath();
    ctx.moveTo(pos.x, pos.y);
  });
  canvas.addEventListener("mousemove", (e) => {
    if (!desenhando) return;
    const pos = getPos(e);
    ctx.lineTo(pos.x, pos.y);
    ctx.stroke();
  });
  canvas.addEventListener("mouseup", () => (desenhando = false));
  canvas.addEventListener("mouseleave", () => (desenhando = false));
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
