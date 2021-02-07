<?php
require 'konek.php';
session_start();

if ( isset($_SESSION['id']) || isset($_SESSION['nama']) || isset($_SESSION['status']) ) {
	$nama = $_SESSION['nama']; 
	$status = $_SESSION['status'];
	

}
else {
    // Makes it easier to read
    $_SESSION['message'] = "Kamu harus login untuk melihat halaman ini!";
    header("location: index.php");  
}
?>


	
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to secure home</title>
	<link href="material.min.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
	<link href="bootstrap.css" rel="stylesheet">
	<link href="bootstrap-switch.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
	
<style>
table{background:#fff!important;max-width:600px;width:100%;}
td label {margin-left:10px;}
</style>
</head>

<body>


<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-drawer">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Kontrol Lampu</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
    </div>
  </header>

  <div class="mdl-layout__drawer">
    	
	
	<a href="profile.php" class="mdl-navigation__link beranda">
    <span class="mdl-layout-title"><br/><br/>Home </span>
    </a>
	
	
	<a href="profilku.php" class="mdl-navigation__link beranda">
    <span class="mdl-layout-title">Profilku </span>
    </a>
	
	
	<?php if ($status=='admin'){
    echo '<a href="user.php" class="mdl-navigation__link beranda"><span class="mdl-layout-title">Pengguna </span></a>'; }
	?>
	
	<?php if ($status=='admin'){
    echo '<a href="log.php" class="mdl-navigation__link beranda"><span class="mdl-layout-title">Log Pengguna </span></a>'; }
	?>
		
	<a href="bantuan.php" class="mdl-navigation__link beranda">
    <span class="mdl-layout-title">Bantuan</span>
    </a>
	
	
	<center>
	<form action="logout.php">
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="login" type="submit">Keluar</button>
		</form>
	</center>
	
	
    <nav class="mdl-navigation">
      
      <div class="menu-kiri-bagian-bawah">
        <div class="menu-kiri-list-bawah menu-kiri-link-bawah">&copy; 2018 Smart Home
		
		</div>
      </div>
    </nav>
  </div>
  
  
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--6-col">
		
		<div class="modal-dialog">
        
                        
        <div class="modal-content col-md-10">
          <table >
  <tr>
    <td align="center"><img id="picture1" src="img/lampu_off.png" alt="result.png" /><br/><label for="relay1">Lampu 1 &nbsp </label><span id="feedback1"></span><br/><input type="checkbox" name="relay1" id="relay1"checked></td>
    <!-- creating button for the relay -->
	
	<td align="center"><img id="picture2" src="img/lampu_off.png" alt="result.png" /><br/><label for="relay2">Lampu 2 &nbsp </label><span id="feedback2"></span><br/><input type="checkbox" name="relay2" id="relay2"checked></td>
	

	</tr>
    <tr>
    <td align="center"><img id="picture3" src="img/lampu_off.png" alt="result.png" /><br/><label for="relay3">Lampu 3 &nbsp </label><span id="feedback3"></span><br/><input type="checkbox" name="relay3" id="relay3"checked></td>
	
	<td align="center"><img id="picture4" src="img/lampu_off.png" alt="result.png" /><br/><label for="relay4">Lampu 4 &nbsp </label><span id="feedback4"></span><br/><input type="checkbox" name="relay4" id="relay4"checked></td>
	
	

</table>

<!-- feedback paragraphs -->

</div>
        </div>
      </div>
    </div>
  </main>
</div>
</div>
</div>


<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<script type="text/javascript" src="jquery.js"></script>
<script defer src="material.min.js"></script>
<script src="bootstrap-switch.js"></script>
<script type="text/javascript">


//setting all buttons off state to be red color
$.fn.bootstrapSwitch.defaults.offColor="danger";



//inicalizing the switch buttons 
$("[name='relay1']").bootstrapSwitch();
$("[name='relay2']").bootstrapSwitch();
$("[name='relay3']").bootstrapSwitch();
$("[name='relay4']").bootstrapSwitch();



//this will be execute when the html is ready
$(document).ready(function(){

  //ajax request with post method (better to be GET)
  $.ajax({
    method: "POST",
    url: "firstCheck.php",
    data: {}
  })
  .done(function( msg ) {
    // we need to parse the responce 2 times 
    msg = JSON.parse(msg);
    msg = JSON.parse(msg);

    //for loop that is implemented for the feedback divs and buttons state
    for(var i = 0 ; i < 4; i++){

      // setting the feedback divs
      if(msg[i] == true){
        $("#feedback"+(i+1)).html("On");
		$('#picture'+(i+1)).attr('src', 'img/lampu_on.png');
      }else{
        $("#feedback"+(i+1)).html("Off");
		$('#picture'+(i+1)).attr('src', 'img/lampu_off.png');
      } 
      //setting the current button state
      $("[name='relay"+(i+1)+"']").bootstrapSwitch('state',msg[i]);
    } 
});



});





$("#relay1").click(function () {
    if ($(this).is(":checked")) {
        $(".result_text").text("Inserts the contents of the file into your document and creates a shortcut to the source file.Changes to the source file will be reflected in your document.");
        $('#picture').attr('src', 'img/lampu_on.png');
    } else {
        $(".result_text").text("Original text you want to add");
        $('#picture').attr('src', 'img/lampu_off.png');
    }
});






// making onclick event listener for the buttons 
$('input[name="relay1"],'+
  'input[name="relay2"],'+
  'input[name="relay3"],'+
  'input[name="relay4"]').on('switchChange.bootstrapSwitch', function(event, state) {

  
  
  console.log(event);
  
  //console.log(state);
  
  $mystate = state==true ? 1:0;
  console.log($mystate);
  
  
  
// checking whitch button is clicked
var relayID = event.target.id.substring(event.target.id.length - 1);




//ajax POST request
$.ajax({
  method: "POST",
  url: "changeState.php",
  data: { clicked :state , relayId:relayID}
})
  .done(function( msg ) {
  // changing the feedback paragraphs
  if(msg == "true"){
    $("#feedback"+(relayID)).html("On");
	$('#picture'+(relayID)).attr('src', 'img/lampu_on.png');
  }else{
    $("#feedback"+(relayID)).html("Off");
	$('#picture'+(relayID)).attr('src', 'img/lampu_off.png');
  } 

  });


});
</script>
</body>
</html>

