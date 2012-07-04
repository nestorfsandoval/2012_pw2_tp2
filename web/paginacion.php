<style type="text/css">
/*CSS-paginarRegistros*/
#pagination-digg{ width: 30%; margin:auto; }
#pagination-digg li          { border:0; margin:0; padding:0; font-size:11px; list-style:none; /* savers */ float:left;  }
#pagination-digg a           { border:solid 1px black; margin-right:2px; background-color: white; border-radius: 5px;}
#pagination-digg .previous-off,
#pagination-digg .next-off   { border:solid 1px #DEDEDE; color:#888888; display:block; float:left; font-weight:bold; margin-right:2px; padding:3px 4px; }
#pagination-digg .next a,
#pagination-digg .previous a { font-weight:bold; }
#pagination-digg .active     { background:black; color:#FFFFFF; font-weight:bold; display:block; float:left; padding:4px 6px; /* savers */ margin-right:2px; cursor:pointer;border-radius: 5px; }
#pagination-digg a:link,
#pagination-digg a:visited   { color:black; display:block; float:left; padding:3px 6px; text-decoration:none; }
#pagination-digg a:hover     { border:solid 1px black; }


#pagination-flickr li{border:0; margin:0; padding:0;font-size:11px;list-style:none;}
#pagination-flickr a{border:solid 1px #DDDDDD;margin-right:2px;}
#pagination-flickr .previous-off,
#pagination-flickr .next-off {color:#666666;display:block;float:left;font-weight:bold;padding:3px 4px;}
#pagination-flickr .next a,
#pagination-flickr .previous a {font-weight:bold;border:solid 1px #FFFFFF;} 
#pagination-flickr .active{color:#ff0084;font-weight:bold;display:block;float:left;padding:4px 6px;}
#pagination-flickr a:link,
#pagination-flickr a:visited {color:#0063e3;display:block;float:left;padding:3px 6px;text-decoration:none;}
#pagination-flickr a:hover{border:solid 1px #666666;}

#pagination-clean li{border:0; margin:0; padding:0; font-size:11px; list-style:none;}
#pagination-clean li, #pagination-clean a{border:solid 1px #DEDEDE; margin-right:2px;}
#pagination-clean .previous-off,
#pagination-clean .next-off {color:#888888; display:block; float:left; font-weight:bold; padding:3px 4px;}
#pagination-clean .next a,
#pagination-clean .previous a {font-weight:bold; border:solid 1px #FFFFFF;} 
#pagination-clean .active{color:#00000; font-weight:bold; display:block; float:left; padding:4px 6px;}
#pagination-clean a:link,
#pagination-clean a:visited {color:#0033CC; display:block; float:left; padding:3px 6px; text-decoration:none;}
#pagination-clean a:hover{text-decoration:none;}

</style>

<?php
//echo 'funcion';
function paginarRegistros($totalRegistros,$limiteRegistros,$pagina){
/*
 * paginarRegistros: 	
 * 			Crea una Paginación de Registros.
 * 
 * Recibe: 				
 * 			Total de registros a listar, 
 * 			Limite de los registros que desea mostrar por página,y
 * 			Página en la que se encuentra.
 * 			Los parámetros deben ser numéricos
 * 
 * Ejemplo de uso: 
 * 				LLAMADA										RESULTADO
 *		paginarRegistros(100,10,2);		==>		Primera|Actual(2)|3|4|5|6|7|8|9|Ultima|
 * 			
 */
	$total_paginas=ceil($totalRegistros/$limiteRegistros);
		
	if($pagina <= $total_paginas){	
		echo '<div align="center">
				<ul id="pagination-digg">';
		if ($total_paginas > 10){
			if($pagina > 5){
				echo '<li class="previous"><a href="?pag='.($pagina-1).'">Anterior</a></li>';
				for($i=($pagina-5);($i<$pagina+5)&&($i <= $total_paginas);$i++){
					if($pagina==$i){
						echo '<li class="active">'.$i.'</li>';
					}else{
						if ($i!=1){
							echo "<li><a href='?pag=$i'>$i</a></li>";
						}
					}
				}
			}else{
				for( $i=1 ; ($i<$pagina+5)&&($i <= $total_paginas) ; $i++){
					if($pagina==$i){
						echo '<li class="active">'.$i.'</li>';
					}else{
						if ($i==1){
							echo '<li class="previous"><a href="?pag='.($pagina-1).'">Anterior</a></li>';
						}else{
							echo "<li><a href='?pag=$i'>$i</a></li>";
						}
					}
				}
			}
		}else{
			if($pagina > 5){
				echo '<li class="previous"><a href="?pag='.($pagina-1).'">Anterior</a></li>';
				for($i=($pagina-5);$i <= $total_paginas;$i++){
					if($pagina==$i){
						echo '<li class="active">'.$i.'</li>';
					}else{
						if ($i!=1){
							echo "<li><a href='?pag=$i'>$i</a></li>";
						}
					}
				}
			}else{
				for($i=1;$i <= $total_paginas;$i++){
					if($pagina==$i){
						echo '<li class="active">'.$i.'</li>';
					}else{
						if ($i==1){
							echo '<li class="previous"><a href="?pag='.($pagina-1).'">Anterior</a></li>';
						}else{
							echo "<li><a href='?pag=$i'>$i</a></li>";
						}
					}
				}
			}
		}

		if (($pagina!=$total_paginas)&&($total_paginas>0)){
			$siguiente=$pagina+1;
			echo "<li class='next'><a href='?pag=$siguiente'>Siguiente</a></li>";
		}
		
	echo '</ul>
		</div>';
	}else{
		echo 'Este nro. de pagina no Existe';
		}
}
