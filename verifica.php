<?php
header("Content-Type: text/css; charset=UTF-8");
$mainColor = "";


if (isset($_COOKIE['corperso'])) {
    
    if ($_COOKIE['corperso'] == "verde") {
        $mainColor = "#03552C";
    } else if ($_COOKIE['corperso'] == "vermelho") {
        $mainColor = "#A60A0A";
    } else {
        $mainColor = "#2C2CB3"; //azul
    }

}else{
    $mainColor = "#2C2CB3"; //azul 
}




echo "
:root{
  --main-color: $mainColor;
}

body{
  margin: 0;
  padding: 0;
}

.area {
  padding-left: 15px;
  padding-right: 15px;
  h3{
    color: var(--main-color);
  }
}

.rodape {
padding-left: 15px;
padding-right: 15px;
background-color: var(--main-color);
}

.cor{
background-color:var(--main-color);
}

.navbar{
background-color: var(--main-color);
}
";
