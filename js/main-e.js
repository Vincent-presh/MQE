var NP;

function N_C() {
	// body...
	this.connector= new WebSocket('ws://localhost:3000');
}

function New_Pagen(){

}

NP={
	host: "http://localhost/Mark-E/",
	name: window.location,
	connect: N_C,
	getdata: function () {
		// body...
		 $.ajax({
 			  url: ""+hostname+"actions/info_get.php",
  			  method: 'GET',
   			  dataType: 'text',
 			   success: function(data) {
 				    objrt=$.parseJSON(data);
  				    if(!$("#namwer")){
     					$("#namert").html(objrt.first_name);
     					return 0;
    				 }
    			   else{
   					   $("#namwer").html(objrt.first_name);
    				 }
    			   if(objrt.picdp==null){
      				  document.getElementsByClassName("sfedfvelk")[0].src ='userimages/defaultpics.png';
      				  document.getElementById("pic-loadere").src ='userimages/defaultpics.png';
    			 	  if($(".div-pic")){
     				    document.getElementsByClassName("div-pic")[0].src = 'userimages/defaultpics.png';
     				    }
    			   }else{
     				 document.getElementsByClassName("sfedfvelk")[0].src='userimages/'+objrt.picdp;
     				 if($("#pic-loadere")){
     					 document.getElementById("pic-loadere").src='userimages/'+objrt.picdp;
    				  }
    				  if($(".div-pic")){
     				   document.getElementsByClassName("div-pic")[0].src = 'userimages/'+objrt.picdp;
   			       	   }
   			       		else{
        
       			 		  }
  				  	 } 
    
			   }
			});
		  return 0;
	},
	reactor: function (argument) {
		// body...
		this.connect();
		this.getdata();

	}
  onget: function (argument) {
    // body...
  }
}

NP.onget("get",
  function (argument) {
    // body...
    alert("me");
  });