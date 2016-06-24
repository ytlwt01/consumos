<?php

//==================CONECTAR======================
<<<<<<< HEAD
/*
=======

>>>>>>> 4afa332d1fee22086a5e8c740ad9c33eda5d4926
function db_conectar(){

$link=mssql_connect("GRIMMJOW-PC", "sa",  "03101203069") or die ('No hubo conexión con la base de datos:' . mssql_error());

mssql_select_db("BD_Consumos"); 

return $link;

<<<<<<< HEAD
} */

=======
} 
/*
>>>>>>> 4afa332d1fee22086a5e8c740ad9c33eda5d4926
function db_conectar(){

$link=mssql_connect("YOEL-PC", "sa",  "03101203069") or die ('No hubo conexión con la base de datos:' . mssql_error());

mssql_select_db("BD_Consumos"); 

return $link;

<<<<<<< HEAD
} /*
*/

=======
} 
*/
>>>>>>> 4afa332d1fee22086a5e8c740ad9c33eda5d4926

/*
function db_conectar(){

$link=mssql_connect("serverdaite", "utesa",  "utesa") or die ('No hubo conexión con la base de datos:' . mssql_error());

mssql_select_db("BD_Consumos"); 

return $link;

} */

/*
function db_conectar(){

$link=mssql_connect("serverdaite", "utesa",  "utesa") or die ('No hubo conexión con la base de datos:' . mssql_error());

mssql_select_db("BD_Consumos"); 

return $link;

} */


function trae_valor($sql,$link){
			$res=ejecutar($sql,$link);
			$row=traer_fila($res);
			return $row[0];
		}

function traer_fila($resultado){
			$fila=mssql_fetch_row($resultado);
			return $fila;
		}	

function ejecutar_query($sql,$link){
			$resultado = mssql_query($sql, $link);
			return $resultado;
		}


function db_fecha($fecha)
{
return (substr($fecha,8,2).substr($fecha,4,4).substr($fecha,0,4)); 
}

//==================db_dinero=================
function db_dinero($numero)
{
$res=number_format($numero,2,'.',',');
return ($res);
}


//===============combosql=======
function combosql($sql,$arr1,$arr2,$link=1){
	if($sql!=''){
		$res=db_sql($sql,$link);
		$tipos="";
		$arr1[]="";		
		while($row=db_prox_fila($res)){
			$arr1[]=$row[0];
			$arr2[]=$row[1];
		}
	}
	return $arr1;
}


function combosql_mss($sql,$order,$nombre,$link){
	if($sql!='')
	{
		$res=db_sql($sql,$link);		
		for($i=1;$row=db_prox_fila($res);$i++)
		{
			$valor=$row[0];
			$valor2=$row[1];		
			if($order==$valor)
			{
			  $sOption.="<option value='$valor'  selected>$valor2</option>";
			}
			else 
			{  
				   $sOption.="<option value='$valor' >$valor2</option>";
			}			
		}
	}
		return $sOption;
}		



function create_excel_file($link,$sql,$nombre)
{  


  $file = "$nombre.csv";
  $temp_str = "";
 
  $res=db_sql($sql,$link);
  $result_csv=db_sql($sql,$link);
  
  $fh=fopen($file,"w+") or die ("unable to open file");
  $cant_campos=mssql_num_fields($res);  
        for ($i = 1; $i < $cant_campos; $i++)
          {      
              $campos.=  '"'.mssql_field_name($res,$i).'",'; 

          }
          $campos.=chr(13) . chr(10) ;

  while($row=db_prox_fila($result_csv)):
      for($i = 1; $i < $cant_campos; $i++){
	    $fila[$i]=$row[$i];
	  }
      foreach ($fila as $val):
         $val = str_replace('"', "'", $val);
      endforeach;
      $t_temp_str =  ''.implode(',',$fila).''. chr(13) . chr(10);
      $temp_str .= $t_temp_str;
      fwrite($fh, $campos.$t_temp_str, strlen($campos.$t_temp_str));
  endwhile;

  fclose($fh);
  if ($temp_str > "")
     {
       header("Content-disposition: attachment; filename=$file");
       header("Content-Type: application/force-download");
       header("Content-Transfer-Encoding: binary");
       header("Content-Length: ".strlen($campos.$temp_str));
       header("Pragma: no-cache");
       header("Expires: 0");
       echo $campos.$temp_str;
     }
}


function calendario($pNombre,$pValor,$pDesabilitado='',  $evento='' ){
	$res = "

    <script src='lib/src/js/jscal2.js'></script>
    <script src='lib/src/js/lang/en.js'></script>
    <link rel='stylesheet' type='text/css' href='lib/src/css/jscal2.css' />
    <link rel='stylesheet' type='text/css' href='lib/src/css/border-radius.css' />
    <link rel='stylesheet' type='text/css' href='lib/src/css/gold/gold.css' />
	
               <input name='$pNombre' type='text' id='$pNombre' 
                  		value='$pValor' size='10' maxlength='10'  $evento >
                    <a href='#' onMouseOut=\"MM_swapImgRestore()\" 
					   onMouseOver=\"MM_swapImage('Image3','','lib/img/calendar2.gif',1)\">
					<img src='lib/img/calendar1.gif' name='b$pNombre' width='19' height='20' border='0' id='b$pNombre'></a>
                  
		    <script type='text/javascript'>//<![CDATA[
		      var cal = Calendar.setup({
        	  onSelect: function(cal) { cal.hide() }
		      });
		      cal.manageFields('b$pNombre', '$pNombre', '%Y/%m/%d');
		    //]]></script>
				";	
	return	$res;		  
}

?>
