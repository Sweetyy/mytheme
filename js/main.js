//MAIN SCRIPTS

$(document).ready(function() {
    $(".navmenu ul li a[href^='#']").on('click', function(e) {
        e.preventDefault();    
        $('html, body').animate({
           scrollTop: $(this.hash).offset().top
         }, 600);
    });

    $(".navmenu-resp ul li a[href^='#']").on('click', function(e) {
        e.preventDefault();    
        $('html, body').animate({
           scrollTop: $(this.hash).offset().top
         }, 600);
    });

    // Show or hide the sticky footer button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.navmenu').addClass('scrollafter');
        } else {
            $('.navmenu').removeClass('scrollafter');
        }
    });
    
    (function() {
  
    var togglemenu = document.querySelectorAll(".navmenu-resp>ul>li>a");
    var toggles = document.querySelectorAll(".icon-animation");

    for (var i = toggles.length - 1; i >= 0; i--) {
      var toggle = toggles[i];
      toggleHandler(toggle);
    };

    function toggleHandler(toggle) {
      toggle.addEventListener( "click", function(e) {
        e.preventDefault();
        (this.classList.contains("activate") === true) ? this.classList.remove("activate") : this.classList.add("activate");
      });
    }

    $( ".navmenu-resp>div>ul>li>a" ).click(function() {
       if ( $("#start").hasClass("activate")) {
            $("#start").removeClass( "activate" );
        }
        
        else {
            $("#start").addClass( "activate" );
        }
    });

    })();
    
    //MenuFade
    
    $('#start').click(function() {
        
        $('.navmenu-resp').fadeToggle(500);
        
        /*if(document.getElementById('nav').checked)
        {
            $('#nav').prop('checked', false);
        }
        
        else
        {
            $('#nav').prop('checked', true);
        }*/
        
    });

    $('.navmenu-resp ul li a').click(function fademenu() {
        
        $('.navmenu-resp').fadeToggle(700);
        /*$('#nav').prop('checked', false);*/
        
    });
    
    //Sentences fading

    var sentences = [
    "« Une photographie, c'est un fragment de temps qui ne reviendra pas. » (Martine Franck)",
    "« Tu ne prends pas une photographie, tu la crées. » (Ansel Adams)",
    "« La photographie est une brève complicité entre la prévoyance et le hasard. » (John Stuart Mill)",
    "« Une image vaut mieux que mille mots. » (Confucius)",
    "« La photographie est le seul langage qui peut être compris dans le monde entier. » (Bruno Barbey)",
    "« La photo est intemporelle, momentanée, jetable et éternelle. » (Sébastien Micke)",
    "« Réflechir, voir, patienter, attendre, comprendre. » (David Alan Harvey)",
    "« Mon travail concerne surtout la mémoire. » (Nan Goldin)"];
    var showsentences = function() {
    var newsentence = sentences[Math.floor((Math.random() * sentences.length))]
        $("#sentences").fadeOut( 2000, function() {
             $("#sentences").text(newsentence).fadeIn(2000);
        });
    }
    setInterval(showsentences, 8000)

});
