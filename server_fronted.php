<?php
require "databaseconn.php";
             

function nakulrandomavtr()
{
	$letters='abcdefghijklmnopqrstuvwxyz';  
$string='';  
for($x=0; $x<3; ++$x){  
    $string.=$letters[rand(0,25)]; 
   
}
return $string;
}


function status_score_create(){
	global $db;
	$randst= array("live"=>0,"death"=>1);
$purse_st_avtar1=array_rand($randst,1);

$purse_score_avtr1=rand(10, 1000);

if ($purse_st_avtar1=='live') {
	$purse_st_avtar2="death";
	$purse_score_avtr2=$purse_score_avtr1-rand(1,30);
}elseif ($purse_st_avtar1=='death') {
	$purse_st_avtar2="live";
	$purse_score_avtr2=$purse_score_avtr1+rand(10,30);
}
$arr_stus= array("stavtr1" => $purse_st_avtar1,"scoreavtr1" =>$purse_score_avtr1,"stavtr2" => $purse_st_avtar2,"scoreavtr2" =>$purse_score_avtr2,);

$avtrinfo=[
	"avtr1" =>nakulrandomavtr(),
	"score_ofavtar1" =>$arr_stus['scoreavtr1'],
	"st_avtar1" =>$arr_stus['stavtr1'],
	"avtr2" =>nakulrandomavtr(),
	"score_ofavtar2" =>$arr_stus['scoreavtr2'],
	"st_avtar2" =>$arr_stus['stavtr2'], 
	"winner_score" =>max(array_values($arr_stus))

];
if (is_array($avtrinfo)) {

$stmt = $db->prepare('INSERT INTO `avtar` (avtr1,score_ofavtar1,st_avtar1,avtr2,score_ofavtar2,st_avtar2,winner_score) VALUES (?,?,?,?,?,?,?)');
$stmt->bind_param(
	"sssssss",
$avtrinfo['avtr1'],
$avtrinfo['score_ofavtar1'],
$avtrinfo['st_avtar1'],
$avtrinfo['avtr2'],
$avtrinfo['score_ofavtar2'],
$avtrinfo['st_avtar2'],
$avtrinfo['winner_score']

 );
        $stmt->execute();
        $stmt->close();
     
    }
return $avtrinfo; 

}///FUCTION END

function isavtarhas(){
	global $db;
	$sql="SELECT winner_score FROM avtar ORDER BY winner_score DESC ";
	$seachwinner=mysqli_query($db,$sql);
	$seachwinnerfetch=mysqli_fetch_assoc($seachwinner);
	return $seachwinnerfetch;
}
function champion(){
	global $db;
	$sql="SELECT winner_score FROM avtar ORDER BY winner_score DESC ";
	$seachwinner=mysqli_query($db,$sql);
	$seachwinnerfetch=mysqli_fetch_assoc($seachwinner);
	$champion_score=implode(",", $seachwinnerfetch);
	$whoischamp_sql="SELECT * FROM avtar WHERE winner_score=$champion_score ";
	$whoischamp_qr=mysqli_query($db,$whoischamp_sql);
	$whoischamp_fetch=mysqli_fetch_assoc($whoischamp_qr);
	
	if ($whoischamp_fetch['score_ofavtar1']==$champion_score) {
		echo "Champion is avtar1: ".$whoischamp_fetch['avtr1']. "  Score:" .$whoischamp_fetch['score_ofavtar1'];
	}elseif ($whoischamp_fetch['score_ofavtar2']==$champion_score) {
		echo "Champion is avtar2: ".$whoischamp_fetch['avtr2']. "  Score:" .$whoischamp_fetch['score_ofavtar1'];
	}
$delteother_sql="DELETE FROM avtar WHERE winner_score <> $champion_score";
$run_delete=mysqli_query($db,$delteother_sql);

}






?>