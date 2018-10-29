function show(divname) {
    if(document.getElementById(divname).style.display=='none') {
      document.getElementById(divname).style.display='block';
    }
}

function close(divname) {
        if(document.getElementById(divname).style.display=='block') {
          document.getElementById(divname).style.display='none';
        }
    }  