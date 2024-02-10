<?php 

$Languange = $_POST["Bahasa"];
echo "WELCOME!!" . "<br>";
echo "namamu : " . $_POST ["firstName"] . $_POST["lastName"] . "<br>";
echo "kelaminmu : ". $_POST ["Gender"] . "<br>" ;
echo "Negaramu : ". $_POST ["Negara"] . "<br>";
echo "Bahasamu : ". (is_array($Languange) ? implode(",", $Languange) : $Languange) . "<br>";
echo "Apa kata-katamu? : ". $_POST ["Bio"] . "<br>";

?>