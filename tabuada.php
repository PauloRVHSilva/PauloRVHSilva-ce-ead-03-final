<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>
      Tabuada gerada!
    </title>
    <link rel='stylesheet'
          type='text/css'
          href='estiloSaida.css'>
    <?php    
      //Obtendo valores do formulário dinamicamente
      foreach ($_POST as $chave => $valor)
        $$chave = $valor;    
    ?>
		
		<style type='text/css'>
					
			<?php
					$tamanho = 6;
				$caracteres = "0123456789abcdef";
				$string = "";

					for($p = 0; $p < $tamanho; $p++) {
					$string.= $caracteres[mt_rand(0, strlen($caracteres))];
					}
				?>
				
			th {	
				
				color            : #FFFFEE;
				background-color : <?php echo "#".$string  ?>;  
				width            : 70px;  
			}

		</style>
  </head>
  <body>
    <?php      
      //Montando a(s) tabela(s)
			
		
      for ($i = $tabuadaInicio; $i <= $tabuadaFim; $i++) {
        
        echo "<div class='tabuada'>" .
             "<table border='1'>".
             "  <caption>Tabuada do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Fórmula</th>" .
             "    <th>Multiplicação</th>" .
						 "    <th>Divisão</th>" .
						 "    <th>Soma</th>" .
						 "    <th>Subtração</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $numeroInicio; $j <= $numeroFim; $j++) {
          
          echo "<tr>" . 
               "  <td>" . $i . " e " . $j . "</td>" .
               "  <td>" . ($i * $j) . "</td>";
							 if($j == 0){
								 echo "  <td> N/A </td>";
							 } else {
								  echo "  <td>" . number_format(($i / $j),2,",",".") . "</td>";
							 }
							 echo "  <td>" . ($i + $j) . "</td>" .
							 "  <td>" . ($i - $j) . "</td>" .
               "</tr>";          
        } 

        echo "  </tbody>" .
             " </table>" .
             " </div>";
      }
		
		

        echo "  </tbody>" .
             " </table>" .
             " </div>";
      
    ?>
  </body>
</html>