while (true) {
    let nota = parseFloat(prompt("Digite uma nota entre 0 e 10: "));
    if (nota >= 0 && nota <= 10) {
        console.log(`Você digitou a nota ${nota}.`);
        break;
    } else {
        console.log("Nota inválida! Digite novamente.");
    }
}
