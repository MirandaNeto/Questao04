<?php
$clientes = array (
	"José" =>   array ( "Idade" => 25 , "CPF" => "087883456-18" , "RG" => "2006089107117" ),
	"Maria" => array ( "Idade" => 18 , "CPF" => "057825456-15" , "RG" => "2001089097112" ),
	"Ana" => array ( "Idade" => 24 , "CPF" => "037825445-30" , "RG" => "2019089097118" ),
);
eco "RG da Maria:" . $clientes [ "Maria" ] [ "RG" ]. "<br>" ;
echo "idade de Ana:" . $clientes [ "Ana" ] [ "Idade" ]. "<br>" ;

echo "<br>" ;

foreach ( $clientes  as  $clients => $dados ) {
	echo  $ clients . "<br>" ;
	  foreach ( $dados  as  $ key => $value ) {
		  echo  $key . "-" . $valor . "<br>" ;

		 }
	 }