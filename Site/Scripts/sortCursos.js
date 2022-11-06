function sortAvaliacao() {
  var i, troca, b, checkTroca;
  cursos = document.getElementById("div_curso");
  troca = true;
  // loop da troca
  while (troca) {
    troca = false;
    b = document.getElementById('curso_avaliacao');
    // loop por todos os elementos:
    for (i = 0; i < (b.length - 1); i++) {

      checkTroca = false;
      // check para ver se o proximo item sera trocado
      if (Number(b[i].innerHTML) < Number(b[i + 1].innerHTML)) {
        // se o numero for maior executa a troca
        checkTroca = true;
        cursos = b;
        break;
      }
    }
    if (checkTroca) {
      // se a troca foi feita, marca troca como true para refazer o loop
      cursos[i].parentNode.insertBefore(cursos[i + 1], cursos[i]);
      troca = true;
    }
  }
}
  
function sortCarga() {
  var i, troca, b, checkTroca;
  cursos = document.getElementById("carga container");
  troca = true;
  // loop da troca
  while (troca) {
    troca = false;
    b = document.getElementsByClassName('carga');
    // loop por todos os elementos:
    for (i = 0; i < (b.length - 1); i++) {

      checkTroca = false;
      // check para ver se o proximo item sera trocado
      if (Number(b[i].innerHTML) < Number(b[i + 1].innerHTML)) {
        // se o numero for maior executa a troca
        checkTroca = true;
        break;
      }
    }
    if (checkTroca) {
      // se a troca foi feita, marca troca como true para refazer o loop
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      troca = true;
    }
  }
}

