<?php 
  
  //retorna nome da pagina atual
  function pagAtual($url){
  	$url = $url;
  	
  	if ($url[0] == 'inicio'):
			echo "Home";

		elseif ($url[0] == 'portfolio'):
			echo "Portfólio";
		elseif ($url[0] == 'sobreNos'):
			echo "Sobre Nós";
		elseif ($url[0] == 'contato'):
			echo "Contato";
		elseif ($url[0] == 'blog'):
			echo "Blog";
		elseif ($url[0] == ''):
			echo "Home";
		else:
			echo "404 - Página não encontrada! ";
		endif;
  }
?>