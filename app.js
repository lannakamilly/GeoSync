// Modo Escuro
const darkModeBtn = document.getElementById("darkModeBtn");

darkModeBtn.addEventListener("click", () => {
  document.body.classList.toggle("dark");

  if (document.body.classList.contains("dark")) {
    darkModeBtn.innerHTML = '<i class="fa-solid fa-sun"></i> Modo Claro';
  } else {
    darkModeBtn.innerHTML = '<i class="fa-solid fa-moon"></i> Modo Escuro';
  }
});

// Estilo do dark mode
const style = document.createElement("style");
style.innerHTML = `
  body.dark {
    background: #1e1e2f;
    color: #eee;
  }
  body.dark .sidebar {
    background: #2a2a3b;
    border-color: #444;
  }
  body.dark .menu a {
    color: #eee;
  }
  body.dark .menu a.active {
    background: #d62828;
    color: #fff;
  }
  body.dark .dark-mode button {
    background: #3a3a4a;
    color: #eee;
    border-color: #555;
  }
  body.dark .user i {
    color: #ffb703;
  }
`;
document.head.appendChild(style);
