var hostname = "http://localhost/Mark-E/";

var modal = $(".modqwe");
var child_m = $(".child-m");

var chosen_plat = "";
var connection;
var details;

window.onload = function() {
    connection = new WebSocket('ws://localhost:3000');
    connection.onopen = function() {
        // connection is opened and ready to use
        console.log('Web is ready');
        details = JSON.stringify({ type: 'admin_message', optiones: 'details', name: "Admin_one", first_name: "Vincent", group: "data" });
        connection.send(details);
    };

    connection.onmessage = function(message) {
        var json;
        try {
            json = JSON.parse(message.data);
        } catch (e) {
            console.log('Invalid JSON: ', message.data);
            return;
        }
        if (json.type == 'details') {

        }
    };

};

class Chosen {
    constructor(what, selected, task) {
        this.what = what;
        this.selected = selected;
    }
    display_item() {
        // body...
        var what;
        var selected;
        modal.fadeIn("fast");
        child_m.fadeOut("fast");
        $(".New").fadeIn("fast");
        what = this.what;
        selected = this.what;
        $("form .form-foot input").click(function(argument) {
            // body...
            var form_data = $('.main_ad_form').serializeArray();
            details = JSON.stringify({ type: 'request', optiones: what, data: form_data });
            connection.send(details);
        });
    }
    content() {

    }
}

class Action {
    constructor(what, selected, task) {
        this.what = what;
        this.selected = selected;
    }
    display_item() {
        var what = this.what;
        child_m.fadeOut("fast");
        $(".Existing").fadeIn("fast");
        $(".ex-name").html(chosen_plat);
        $(".child-m." + what + "").fadeIn("fast");
        modal.fadeIn("fast");
        $("form .form-foot input").click(function(argument) {
            // body...
        });
    }
    content() {

    }
}

$("button.intent").each(function() {
    $(this).click(function(event) {
        const idea = new Chosen($(this).val(), chosen_plat, "intent");
        idea.display_item();
    });
});

$("button.actions").each(function() {
    $(this).click(function(event) {
        if (chosen_plat == "") {
            return;
        } else {
            const ideae = new Action($(this).val(), chosen_plat, "action");
            ideae.display_item();
        }
    });
});


$(".close").click(function() {
    modal.fadeOut("fast");
    child_m.fadeOut("fast");
});

function getdet() {
    // body...
    $.ajax({
        url: "" + hostname + "actions/info_get.php",
        method: 'GET',
        dataType: 'text',
        success: function(data) {
            objrt = $.parseJSON(data);
            if (!$("#namwer")) {
                $("#namert").html(objrt.first_name);
                return 0;
            } else {
                $("#namwer").html(objrt.first_name);
            }
            if (objrt.picdp == null) {
                document.getElementsByClassName("sfedfvelk")[0].src = 'userimages/defaultpics.png';
                document.getElementById("pic-loadere").src = 'userimages/defaultpics.png';
                if ($(".div-pic")) {
                    document.getElementsByClassName("div-pic")[0].src = 'userimages/defaultpics.png';
                }
            } else {
                document.getElementsByClassName("sfedfvelk")[0].src = 'userimages/' + objrt.picdp;
                if ($("#pic-loadere")) {
                    document.getElementById("pic-loadere").src = 'userimages/' + objrt.picdp;
                }
                if ($(".div-pic")) {
                    document.getElementsByClassName("div-pic")[0].src = 'userimages/' + objrt.picdp;

                } else {

                }
            }

        }
    });
    return 0;
}


function getlink() {
    var vars = {};
    var parts = window.location.href.replace(
        /[?&]+([^=&]+)=([^&]*)/gi,
        function(m, key, value) {
            vars[key] = value
        });
    return vars;
}

////
////////
////////
/////
////YOU GOT TO DISABLE RIGHT CLICKING, PEOPLE DON'T FUCKING CARE
////////
/////
/////
////


$('.item.menu .qui3w').click(function() {
    $('.item.menu .qui3w').addClass("unact");
    $('.item.menu .qui3w').removeClass("act");
    $(this).removeClass("unact");
    $(this).addClass("act");

});

$('#clpeaer').click(function() {
    $('.footer').toggleClass("hider");
    $("#foot-upw").niceScroll({ autohidemode: true });
});

function menupop() {
    // body...
    $("#popup-position").toggleClass("blocke");
}


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


function getCookiechat(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


/////Functions
//START first question
// What happens on click next
// if next isnt clicked after 15secs move to next question

$("input[name=nightery]").click(function(event) {

    if ($("input[name=nightery]").val() == "yes") {
        $(".bg-night").addClass("bg-white");
        $(".bg-white").removeClass("bg-night");
        $("input[name=nightery]").val('no');
        setCookie("nighty", $("input[name=nightery]").val(), 1);
        return;
    } else {
        $(".bg-white").addClass("bg-night");
        $(".bg-night").removeClass("bg-white");
        $("input[name=nightery]").val('yes');
        setCookie("nighty", $("input[name=nightery]").val(), 1);
    }
});


function updetpig() {
    $.ajax({
        url: "" + hostname + "changet.php",
        method: 'POST',
        data: new FormData($('.mainformpy')[0]),
        processData: false,
        contentType: false,
        success: function(data) {
            if (data == "Successful") {
                document.getElementsByClassName("pic-loader")[0].src = document.getElementsByClassName("dipic")[0].src;
            } else {
                alert(data);
            }

        }
    });
}


var people = document.getElementsByClassName("people")[0];
var update = document.getElementsByClassName("update")[0];

people.addEventListener("click", function() {
    $("#popup-position").remove();
    var obty = '<div id="popup-position" class="blocke boxere bg-white peoplebox"></div>';
    var Putton = document.getElementById("idwer-main");
    Putton.innerHTML = Putton.innerHTML + obty;
    return;
});
update.addEventListener("click", function() {
    $("#popup-position").remove();
    var obty = '<div id="popup-position" class="blocke boxere bg-white updatebox"></div>';

    var Putton = document.getElementById("idwer-main");
    Putton.innerHTML = Putton.innerHTML + obty;
    return;
});



function getmenu() {
    // body...
    $("#main-left").toggleClass("hider");
    //	$("#mentr").slideToggle();
}


function get_sche(argument) {
    // body...
    var obj = "";
    var myObj = "";
    $.ajax({
        url: "" + hostname + "actions/get-sche.php",
        method: 'GET',
        dataType: 'text',
        success: function(data) {
            myObj = $.parseJSON(data);
            for (var ie = 0; ie < myObj.length; ie++) {
                obj += '<div class="under"> <div class="imager "><img src="' + hostname + 'img/jeshoots-com-219388-unsplash.jpg" height="100%" width="100%"></div><div class="righyww"><h4 class="text-uppercase"><a class="' + ie + 'list" href="' + hostname + 'interLoad?exm=' + ie + '&id=5i4J8eryvYr86jo9r8hDsew83iy3kQZJHDNgMrwPouAnfyfro&name=' + myObj[ie].name + '" title="Begin Exam" style=" ">' + myObj[ie].name + '</a></h4><h1 class="small ">' + myObj[ie].upper_time + '</h1><div class="floow" style="right: 0; margin-top: 0px;"></div></div><input class="app-choser chooser chooser' + ie + '" name="chosen" type="radio" value="' + myObj[ie].name + '"/></div>';
            }
            $(".mid .subject").html(obj);
            $(".app-choser.chooser").click(function(event) {
                chosen_plat = $(this).val();
            });

        }
    });
}