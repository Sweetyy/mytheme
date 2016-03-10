<?php 
    wp_reset_query();
    get_header();

    query_posts('post_type=page'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
        if( 'Galeries' === $post->post_title) {
            echo '<section id="'.get_the_title().'" class="">';
        }
        else if( 'News' === $post->post_title) {
            echo '<section id="'.get_the_title().'" class="content-center">';
        }
        else {
            echo '<section id="'. get_the_title().'" class="content-center align-justify">';
        }
    ?>
    
    <h2><?php the_title(); ?></h2>

    <?php the_content(); ?>
    
    <?php if( 'Galeries' === $post->post_title ) {
        echo '<div class="galery panel-table">';
        echo do_shortcode("[ic_add_posts category='galeries' template='template_gallery.php']");
        echo '</div>';
    } ?>
    
    <?php if( 'News' === $post->post_title ) {
        echo '<div class="news panel-table">';
        echo do_shortcode("[ic_add_posts category='news' template='template_news.php']");
        echo '</div>';
    } ?>
    
    </section>

<?php endwhile; endif; ?> 

<section id="Contact">
    <h2> Contact</h2>
    <div class="form" id="section4">
        <form class="contact" action="mailing.php" method="post">  
            <p class="description">Nom(*)</p><input type="text" name="first_name" required >
            <p class="description">Prénom</p><input type="text" name="last_name">
            <p class="description">Email(*)</p><input type="email" name="email" required >
            <p class="description">Message(*)</p><textarea rows="8" name="message" cols="30" required ></textarea>
            <p class="description info" style="margin: 0">Les champs avec (*) sont obligatoires.</p>
            <button class="btn-style" type="submit" name="submit" value="Submit">Envoyer</button>
        </form>
    </div>
</section>

</div>
  
 </body>
    
<script src="wp-content/themes/mytheme/js/jquery.min.js"></script>
<script>/*
    $(".navmenu ul li a[href^='#']").on('click', function(e) {
    console.log('test');
    e.preventDefault();

    // animate
    $('html, body').animate({
       scrollTop: $(this.hash).offset().top
     }, 600, function(){

       window.location.hash = this.hash;
     });
    });*/
</script>

<script>
    $(document).ready(function() {
        // Show or hide the sticky footer button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.go-top').fadeIn(300);
                $('.navmenu').css('background', 'rgba(0, 0, 0, 0.8)');
                $('.navmenu a').css('font-size', '1.1em');
            } else {
                $('.go-top').fadeOut(300);
                $('.navmenu').css('background', 'transparent');
                $('.navmenu a').css('font-size', '1.4em');
            }
        });
        /*
        // Animate the scroll to top
        $('.go-top').click(function(event) {
            event.preventDefault();
            
            $('html, body').animate({scrollTop: 0}, 600);
        })*/
    });
</script>
<script>
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
    </script>
   
   <!-- ScrollToTop -->
   <script>/*
	   $(".navmenu-resp a[href^='#']").on('click', function(e) {

       e.preventDefault();

       // animate
       $('html, body').animate({
           scrollTop: $(this.hash).offset().top
         }, 600, function(){
   
           window.location.hash = this.hash;
         });
		});*/
	</script>
	
	<!-- MenuFade -->
	<script>
		$(document).ready(function() {
			
			$('#start').click(function() {
				
				$('.navmenu-resp').fadeToggle(500);
				
				if(document.getElementById('nav').checked)
				{
					$('#nav').prop('checked', false);
				}
				
				else
				{
					$('#nav').prop('checked', true);
				}
				
			});
			
			$('.navmenu-resp ul li a').click(function fademenu() {
				
				$('.navmenu-resp').fadeToggle(700);
				$('#nav').prop('checked', false);
				
			});
			
		});
	</script>

    <script>
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
    </script>
</html>