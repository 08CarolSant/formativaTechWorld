if (localStorage.getItem("visitas")) {
    // Se existir, obtenha o valor atual e incremente
    let visitas = parseInt(localStorage.getItem("visitas"));
    visitas++;
    localStorage.setItem("visitas", visitas);
} else {
    // Se não existir, inicie o contador em 1
    localStorage.setItem("visitas", 1);
}

// Atualize o valor exibido na página
document.getElementById("visitas").textContent = localStorage.getItem("visitas");