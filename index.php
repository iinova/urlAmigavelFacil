<?php 
  include("config.php");
  
  //Recebe valores da pagina chamada
  if (@$_GET['url'] == ''){
    $url = 'inicio'; 
  }else{
    $url = $_GET['url'];
  }
  
 $url = explode('/',$url);
 

  //Verifica existencia da pagina no url
  if(file_exists('app/'.$url[0].'.php')){
    include('app/'.$url[0].'.php');
  }
  else{
    include('app/404.php');
  }
  
  //abre footer do site
  include('app/_app/footer.php');
 
?>


