if (localStorage.getItem("visitas")) {
    // Se existir, obtenha o valor atual e incremente
    let visitas = parseInt(localStorage.getItem("visitas"));
    visitas++;
    localStorage.setItem("visitas", visitas);
} else {

    localStorage.setItem("visitas", 1);
}
