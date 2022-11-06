function sortAvaliacao() {
  var i, troca, b, checkTroca;
  cursos = document.getElementsByClassName("div_curso");
  console.log(cursos);
  troca = true;
  // loop da troca
  while (troca) {
    troca = false;
    b = document.getElementsByClassName('curso_avaliacao');
    b = Array.from(b);
    //console.log(b)
    // loop por todos os elementos:
    for (i = 0; i < (b.length ); i++) {
      console.log(b);
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
      cursos[i].parentNode.insertBefore(cursos[i + 1], cursos[i]);
      troca = true;
    }
  }
}



  
function sortCarga() {
  var i, troca, b, checkTroca;
  cursos = document.getElementsByClassName("curso");
  console.log(b);
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

