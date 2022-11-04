function sortAvaliacao() {
  var i, troca, b, checkTroca;
  cursos = document.getElementById("avaliacao");
  troca = true;
  // loop da troca
  while (troca) {
    troca = false;
    b = document.getElementsByTagName('p');
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
  
function sortCarga() {
  var i, troca, b, checkTroca;
  cursos = document.getElementById("carga");
  troca = true;
  // loop da troca
  while (troca) {
    troca = false;
    b = document.getElementsByTagName('p');
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

var $rows = $('#cursos tr');
$('#InputAreaCourses').keyup(function() {
    
    var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
        reg = RegExp(val, 'i'),
        text;
    
    $rows.show().filter(function() {
        text = $(this).text().replace(/\s+/g, ' ');
        return !reg.test(text);
    }).hide();
});