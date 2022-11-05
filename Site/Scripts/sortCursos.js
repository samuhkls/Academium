function sortAvaliacao() {
  var i, troca, b, checkTroca;
  cursos = document.getElementById("avaliacao container");
  troca = true;
  // loop da troca
  while (troca) {
    troca = false;
    b = document.getElementsByClassName('avaliacao');
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
  var i, troca, b, checkTroca, toggle;
  cursos = document.getElementById("carga container");
  toggle = false;
  troca = true;
  // loop da troca
  while (troca) {
    troca = false;
    b = document.getElementsByClassName('carga');
    // loop por todos os elementos:
    for (i = 0; i < (b.length - 1); i++) {

      checkTroca = false;
      // check para ver se o proximo item sera trocado
      if (toggle == false){
          if (Number(b[i].innerHTML) < Number(b[i + 1].innerHTML)) {
            // se o numero for maior/menor executa a troca
            checkTroca = true;
            //break;
          }
      }
        else{
          if (Number(b[i].innerHTML) > Number(b[i + 1].innerHTML)) {
            // se o numero for maior/menor executa a troca
            checkTroca = true;
            //break;
          }
        }
      }
    }
    if (checkTroca) {
      // se a troca foi feita, marca troca como true para refazer o loop
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      troca = true;
    }
  }
  toggle = true;


const pesquisa = document.querySelector('.searchbox');
const x = document.querySelectorAll('.card p:nth-child(2)');

function search(e){
  x.forEach((item,index) => {
    if(!item.innerHTML.toLowerCase().includes(e.target.value)){
      item.parentElement.style.display = 'none';
    }else {
      item.parentElement.style.display = 'block';
    }
  })
}

pesquisa.addEventListener("keyup", search);   