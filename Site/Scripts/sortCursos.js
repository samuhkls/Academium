function sortAvaliacao() {
  var i, troca, b, checkTroca;
  cursos = document.getElementsByClassName("div_curso");
  console.log(cursos);
  troca = true;
  // loop da troca

    b = document.getElementsByClassName('curso_avaliacao');
    b = Array.from(b);
    //console.log(b)
    // loop por todos os elementos:
    for (i = 0; i < (b.length ); i++) {

      checkTroca = false;
      // check para ver se o proximo item sera trocado
      if (Number(b[i].innerHTML) < Number(b[i + 1].innerHTML)) {
        // se o numero for maior executa a troca
        checkTroca = true;
        break;
      }
    }
    if (checkTroca) {
      // se a checkTroca for marcado como true, troca no html e altera o valor de troca para o loop
      cursos[i].parentNode.insertBefore(cursos[i + 1], cursos[i]);
      troca = true;
    }
  }




  
function sortCarga() {
  var i, troca, b, checkTroca;
  cursos = document.getElementsByClassName("div_curso");
  console.log(cursos);
  troca = true;
  // loop da troca

    b = document.getElementsByClassName('curso_carga');
    b = Array.from(b);
    //console.log(b)
    // loop por todos os elementos:
    for (i = 0; i < (b.length ); i++) {

      checkTroca = false;
      // check para ver se o proximo item sera trocado
      if (Number(b[i].innerHTML) < Number(b[i + 1].innerHTML)) {
        // se o numero for maior executa a troca
        checkTroca = true;
        break;
      }
    }
    if (checkTroca) {
      // se a checkTroca for marcado como true, troca no html e altera o valor de troca para o loop
      cursos[i].parentNode.insertBefore(cursos[i + 1], cursos[i]);
      troca = true;
    }
}

