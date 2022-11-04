function sortAvaliacao() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("cursos");
    switching = true;
    /*O loop*/
    while (switching) {
      switching = false;
      rows = table.rows;
      /*Loop por todas as linhas pulando a primeira*/
      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        /*Pega os dois elementos que vao ser comparados:*/
        x = rows[i].getElementsByTagName("TD")[4];
        y = rows[i + 1].getElementsByTagName("TD")[4];
        //troca as duas de lugar
        if (Number(x.innerHTML) < Number(y.innerHTML)) {
          //saindo do loop
          shouldSwitch = true;
          break;
        }
      }
      if (shouldSwitch) {
        /*Se trocar, faz e troca e muda a variável switch*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }
  
  function sortCarga() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("cursos");
    switching = true;
    /*O loop*/
    while (switching) {
      switching = false;
      rows = table.rows;
      /*Loop por todas as linhas pulando a primeira*/
      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        /*Pega os dois elementos que vao ser comparados:*/
        x = rows[i].getElementsByTagName("TD")[1];
        y = rows[i + 1].getElementsByTagName("TD")[1];
        //troca as duas de lugar
        if (Number(x.innerHTML) < Number(y.innerHTML)) {
          //saindo do loop
          shouldSwitch = true;
          break;
        }
      }
      if (shouldSwitch) {
        /*Se trocar, faz e troca e muda a variável switch*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }