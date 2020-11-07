<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		require_once 'host.php';
	?>
		<link rel="icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo $hostname;?>css/main.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo $hostname;?>css/layout.css" type="text/css" media="all">
	<script src="<?php echo $hostname;?>js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll-master/jquery.nicescroll.js"></script>
</head>
<body class="bg-white">

	<?php
	require_once 'host.php';
	if(!isset($_COOKIE['Mid'])){
		echo "<script> window.location= '$hostname';</script>";
	}
	?>
<style type="text/css">

</style>
	<div id="inrtuy" class="bg-white">
			<?php
			require_once './foot.php';
			require_once './header.php';
		?>
<div class="wrapper">
  <div class="wave"></div>
</div>
	
				<div id="caster" >
					<div class="cat-i">
						<div class="clip">
							<div>
								<img class="dipic" src="img/bagh4.png" height="96%" width="99%"/>
							</div>
						</div>
						<form class="mainformpy">
						<input type="file" name="picpos" id="chh"  style=" display: none;" accept="image/*"  placeholder="Select Picture"></input>
							<a id="actor" class="fake select" href="Select new" style="margin-left: 32.5%; font-size: 9px;"><button class="center-d bg-white">Select New</button></a>
							<a id="actor" class="fake" href="Upload" style="margin-left: 32.5%; font-size: 9px;"><button class="center-d bg-white" onclick="updetpig();">Upload</button></a>
						</form>
					</div>
					<div class="cat-j"></div>
				</div>
		
	</div>
<script src="<?php echo $hostname;?>js/main.js"></script>

<script type="text/javascript">
 $('.fa-menu').click(function(){  
    getmenu();
	 });

	 var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                   if (input.files[0].name.match(/.(jpg|jpeg|png|gif)$/i)){
						document.getElementsByClassName("dipic")[0].src = event.target.result;
                   }
                   else{

                          }
       						}

                reader.readAsDataURL(input.files[i]);
           	 }
             
					}
    };
		$(document).ready(function(){
$('#chh').on('change', function() {
				imagesPreview(this, '.div-pic');
		});

	
		$("#actor.fake").each( function(){
        $(this).click(function(event) {
 event.preventDefault();
});
  });

	$("#actor.fake.select").click(function(event) {
 		$("#chh").click();
	});

});
	 
	 
var nighter=getCookiechat("nighty");
if (nighter=="yes") {
	    $(".bg-white").addClass("bg-night");
    $(".bg-night").removeClass("bg-white");
    $("input[name=nightery]").val('yes');
}
else if (nighter=="no") {
	$(".bg-night").addClass("bg-white");
      $(".bg-white").removeClass("bg-night");
      $("input[name=nightery]").val('no');
}
else{
	
}
		
		 $.ajax({
    url: ""+hostname+"actions/info_get.php",
    method: 'GET',
    dataType: 'text',
    success: function(data) {
     objrt=$.parseJSON(data);
     
     if(objrt.picdp==null){
      document.getElementsByClassName("sfedfvelk")[0].src ='userimages/defaultpics.png';
         document.getElementsByClassName("dipic")[0].src = 'userimages/defaultpics.png';
       
     }else{
     	    document.getElementsByClassName("sfedfvelk")[0].src='userimages/'+objrt.picdp;
        document.getElementsByClassName("dipic")[0].src = 'userimages/'+objrt.picdp;
     }
    
   }
});
</script>
</body>
</html>