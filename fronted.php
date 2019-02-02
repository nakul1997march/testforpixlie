<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <style type="text/css">
  	  	.col-centered{
    float: none;
    margin: 0 auto;

}
 #contofavtar1{
      height: 100px;
      background: #D2F0E7;
      margin-top: 30px;
    }
    #contofavtar2{
      height: 100px;
      background: #EED2F0  ;
      margin-top: 30px
    }
    #winnerid{
      display: none;
    }
  </style>
  <?php require 'server_fronted.php';?>
  <body>
  	<div class="col-12" style="height: 600px; background: blue; ">
  		<div class="row">
  			<div class="col-centered col-10" style="height: 500px; background: #ffff;margin-top: 40px;">
         <div class="row">
          <!---start avtart cont-->
  				<div class="col-6">
            <div class=" col-centered col-8 shadow rounded" id="contofavtar1">
              <h6>First Avatar:</h6>
              <h4 style="text-align: center;"><?php 
              if(isset($_POST['NewAvtar'])){
                $returningele=status_score_create();
print_r($returningele['avtr1']); 
}?></h4>
            </div>
          </div>
          <div class="col-6">
            <div class=" col-centered col-8 shadow ronded" id="contofavtar2">
              <h6>Scond Avatar:</h6>
             <h4 style="text-align: center;"><?php 
             if(isset($_POST['NewAvtar'])){
              print_r($returningele['avtr2']);
            
              session_start();
              $_SESSION['winscorepass']=$returningele['winner_score'];
              if ($returningele['score_ofavtar1']==$returningele['winner_score']) {
    $_SESSION['winpass']=$returningele['avtr1'];
  }elseif ($returningele['score_ofavtar2']==$returningele['winner_score']) {
    $_SESSION['winpass']=$returningele['avtr2'];
   
  }

            }?></h4>
            </div>
            
          </div>
          <div class="col-12">
             <div class=" col-centered col-4 shadow rounded" style="background-color: green;color:white;padding: 5px 5px 5px 5px" >
              <h6>Winner Score:</h6>
             <h4 style="text-align: center;">
              <?php if(isset($_POST['FightToDeath'])){
                session_start();
              if(isset($_SESSION['winscorepass'])){ 

              print_r($_SESSION['winscorepass']);
              echo "</br>";
              echo"winner Name: ";print_r($_SESSION['winpass']);
              session_destroy();
              unset($_SESSION['winscorepass']);
              unset($_SESSION['winpass']);
            }else{
              echo "you dont have any avtar";
            }
             
            }?></h4>
            </div>
             <div class=" col-centered col-4 shadow rounded" style="background-color: #E60EF5;color:white" >
              <h6z>Who is Champion:</h6>
             <h4 style="text-align: center;">
              <?php if(isset($_POST['BecomeChampion'])){
                if(!empty(isavtarhas())){
                  champion();
                }
                else{
                   echo "you dont have any avtar";
                }
             
             
            }?></h4>
            </div>
            
          </div>
           <!---end avtart cont-->
           <!--start input type='submit' name=''-->
<div class="col-12" style="margin-top: 100px">
  <form method="post" action="fronted.php">
  <input type='submit' name='NewAvtar' class="btn btn-primary col-3" value="New Avtar">
  <input type='submit' name='FightToDeath' class="btn btn-danger col-3" value="Fight to Death">
  <input type='submit' name='BecomeChampion' class="btn btn-success col-4" value="Become Champion">
  </form>
</div>

<!--end input type='submit' name=''-->
  			</div>
        <p> Created by Nakul Das for Software Engineer technical test </p>
      </div>

  			
  		</div>
  		
  	</div>


  </body>
