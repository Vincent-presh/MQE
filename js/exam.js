var count=0;
var inter= {};
var ansers={};
var t ;
var connection;
var groupe;
var num_quest=0;
var hostname="http://localhost/Mark-E/";
// my name sent to the server
var myName = false;
var myEmail = false;
var mydp=false;
function getfitna() {
	// body...
		  $.ajax({
    url: ""+hostname+"actions/info_get.php",
    method: 'GET',
    dataType: 'text',
    success: function(data) {
      objrt=$.parseJSON(data);
    
        myName= objrt.first_name;
         myEmail= objrt.email;
     
    }
  });
}
getfitna();


function getpreewrt(namer){
     
    $.ajax({
         xhr: function () {
       var xhr = new window.XMLHttpRequest();
        xhr.upload.addEventListener("progress", function (evt) {
            if (evt.lengthComputable) {
                var percentComplete = evt.loaded / evt.total;
                console.log(percentComplete);
                $('.progress').css({
                    width: percentComplete * 100 + '%'
                });
                if (percentComplete === 1) {
                     setTimeout(function(){ $('.progress').addClass('hide')}, 250);
                       
                }
            }
          }, false);
       xhr.addEventListener("progress", function (evt) {
            if (evt.lengthComputable) {
                var percentComplete = evt.loaded / evt.total;
                console.log(percentComplete);
                $('.progress').css({
                    width: percentComplete * 100 + '%'
                });
                if (percentComplete === 1) {
                  setTimeout(function(){  $('.progress').addClass('hide')}, 250);
                    }
                }
        }, false);
        return xhr;
           },
  url: ""+hostname+"actions/profilert.php?namer="+namer+"",
    method: 'GET',
    success: function(data) {
//YOU ARE SUPPOSED TO CHECK IF THE PERSON RESISTERED TWICE SO YOU DONT GET THE QUESTIONS
 
   $(".Exam.holder").addClass("anime");
   groupe=namer;
   getpexam(namer);
   
    },
     error : function(json) 
                {
             $(".reawt").html("Unable to connect!!!");
                }
  });
}

  function doload(switch_o){
   if(switch_o=="on"){
   $(".item-load").fadeIn('fast');
      }
   else{
      $(".item-load").fadeOut('fast');
   }
   return;
   }

function getpexam(namer){
  doload("on");         
  var details;
  connection = new WebSocket('ws://localhost:3000');
  function dostuff(){
      mydp =  document.getElementsByClassName("pic-loader")[0].src;
      details = JSON.stringify({ type:'message', optiones:'details', name: myEmail, first_name: myName, dp:mydp, group:groupe});
      connection.send(details);
  }
  connection.onopen = function () {
     // connection is opened and ready to use
     console.log('Web is ready');
    dostuff();
  };
     connection.onmessage = function (message) {
       var json;
       var myObje="";
      try {
         json = JSON.parse(message.data);
      } catch (e) {
        console.log('Invalid JSON: ', message.data);
        return;
      }

      if (json.type == 'details') {
        document.getElementsByClassName("lad")[0].innerHTML=document.getElementsByClassName("lad")[0].innerHTML+ '<div class="observ ladd '+json.firstname+'" id="prof-pic" style="margin-top: 2px; "><div class="scorty sco'+json.firstname+'">'+json.scort+'</div><img class="pic-loader" src="'+json.img+'" height="100%" width="100%"/></div>'; 
     }
      else if (json.type=='discon') {
        $("."+json.data+"").remove();
      } 
      else if (json.type=='history') {
        for (var i=0; i < json.data.length; i++) {
            document.getElementsByClassName("lad")[0].innerHTML=document.getElementsByClassName("lad")[0].innerHTML+ '<div class="observ ladd '+json.data[i].firstname+'" id="prof-pic" style="margin-top: 2px; "><div class="scorty sco'+json.data[i].firstname+'">'+json.data[i].scort+'</div><img class="pic-loader" src="'+json.data[i].img+'" height="100%" width="100%"/></div>';
          }
      }
      else if (json.type=='wetwuqiquet') {
             var optionws = {};
             var valueq={};
             var question={};
             $(".wert").remove();
             if(json.ended=="yes"){
               var total_score = (json.index + 1) * 10;
                check_ans(json.scort, total_score);
                $(".giott-yu").html(json.scort);
                return;
             }else{
                 $(".giott-yu").html(json.scort);
                 myObje=json.data;
                for (var i = 0; i < myObje.length; i++) {
                   var ider=myObje[i].ques_no;
                   if (!optionws[ider]&&!valueq[ider]&&!question[ider]) {
                     optionws[ider]=[];
                     valueq[ider]=[];
                     question[ider]=[];
                    
                   }
   
                    optionws[ider].push(myObje[i].optiony);
                    valueq[ider].push(myObje[i].value);
                    question[ider].push(myObje[i].quwer);
              
                 }
   
               myObje = [];
               for (var idere in optionws) {
                  myObje.push({id: idere, questin: question[idere], options:optionws[idere], value: valueq[idere]});
                }
                 console.log(" Started from question---> "+ json.index);
                 count= json.index;
                 t = new App_Exam(myObje);
                 t.start(); 
              }
            }

      else if (json.type=='restyi') {
        
         check_ans(json.data, num_quest);
      }
      else if (json.type=='per_question') {
          $(".giott-yu").html(json.data);
           $(".scorty.sco"+myName+"").html(json.data);
      }
      else if (json.type=='per_individual') {
          $(".scorty.sco"+json.firstname+"").html(json.scort);
      }
      else {
        
      }
 
     };
   
    connection.onerror = function (error) { 
    document.getElementById("errort").innerHTML='<p> Sorry, but there\'s some problem with your '+ 'connection or the server is down.'
   };
   connection.CLOSED= function(){

   }
           
   }



   function App_Exam(myObje) {
    // body...
    this.myObje=myObje;
  
    this.start=function () {
      // body...
      var but;
    if(this.myObje[count]==undefined){
       clearInterval(inter[count]);
       connection.send(JSON.stringify({type: "ender"}));
      return;
    }
    else if (this.myObje[count+1]==undefined) {
      but ="submit";
  
    }
    else{
      but="next";
    }
       
    var optobj="";
  for (var i = 0; i < this.myObje[count].options.length; i++) {
    optobj+='<b>'+this.myObje[count].value[i]+'</b> <input type="radio" name="a'+count+'" value="'+this.myObje[count].value[i]+'"> <span>  '+this.myObje[count].options[i]+'</span><br>';
  }
  var obj='<li style="list-style: none;"><b>'+this.myObje[count].id+'.</b>   '+this.myObje[count].questin[0]+'<br> <br>'+optobj+'<br><input id="Play'+count+'" type="button" value="'+but+'"></button></li>';
    doload("off");
    $(".reawt").html("<ul>"+obj+"</ul>");
      $("input[name=a"+count+"]").click(function(event) {
  ansers[count]= $(this).val();
  connection.send(JSON.stringify({type: "chosen", valw: $(this).val(), position: count}));
  });
    num_quest=  num_quest +10;
    continque(this.myObje);
    return;
    } 
    
  }

    function continque(myObje) {
      // body...
         var flag = false;
        
         var PlayButton = document.getElementById("Play"+count+"");
        PlayButton.addEventListener("click", function () {
           if($("#Play"+count+"").val()=="submit"){
          // check_ans(myObje);
           doload("on");
          connection.send(JSON.stringify({type: "ender"}));
          return;
         }
              flag = true;       
           clearInterval([inter[count]]);
               doload("on");
            addans(myObje, count);
          connection.send(JSON.stringify({type: "per_quest", num: count}));
         count++;
         t.start();
             return;
         })
         
         
       
  
            inter[count]= setTimeout(function(){
              doload("on");
          addans(myObje, count);
          connection.send(JSON.stringify({type: "per_quest", num: count}));
         count++;
         t.start();
          }, 15050);
            
        return;
    }
  function addans(myObje, counter){
    /*
    if(myObje[counter].anwser[0]==ansers[counter]){
      resulter= resulter + 10;
      $(".giott-yu").html(resulter);
      }
        else{
       
        }
    */
  }
  
  function check_ans(data, num) {
     doload("off");
    var objq="<h2>Exam just ended</h2>";
    connection.close();
    $(".giott-yu").html(data);
    $(".scorty.sco"+myName+"").html(data);
    $(".reawt").html(objq+"You got "+data+"points out of "+ num+" points");
  
  }
  