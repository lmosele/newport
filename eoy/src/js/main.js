// SCROLL HEIGHT
// $(document).scrollTop();

// INIT FULLPAGE
$(document).ready(function() {
    $('#fullpage').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: true,
        anchors:['1', '2', '3', '4', '5', '6', '7', '8', '9','10', '11', '12', '13'],
        navigation: false,
        // navigationPosition: 'left',
        // navigationTooltips: ['slide1', 'slide2', 'slide3'],
        showActiveTooltip: false,
        slidesNavigation: false,
        slidesNavPosition: 'bottom',
        //Scrolling
        css3: true,
        scrollingSpeed: 600,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: true,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        normalScrollElements: '#skrollr-body',
        scrollOverflow: false,
        touchSensitivity: 10,
        normalScrollElementTouchThreshold: 3,

        //Accessibility
        keyboardScrolling: false,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        resize : false,
        // sectionsColor : ['#ccc', '#fff'],
        paddingTop: '3em',
        paddingBottom: '10px',
        fixedElements: '#header, .footer',
        responsiveWidth: 640,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){
            var leavingSection = $(this);


           
            var main = '.main'; //set as variable in case we need more things with "main-position" class
            var background = '#background1, #background2'; // bg building ID's
            var cloudsLeft = '.cloud1,.cloud3'; //clouds that move left
            var cloudsRight = '.cloud2,.cloud4'; //clouds that move right

          

        // INTRO DEFAULT
            if(index == 1){
                // bg
                $(background).attr('class', '').addClass('bg-position');

                // clouds
                $(cloudsLeft).css('animation','cloud1 100s');
                $(cloudsRight).css('animation','cloud2 100s');
            }

        // CHAPTER 1

            // INDEX 2 STATE
            if(index == 1 && direction == 'down'){
                // Navigation Bar
                $('.header').addClass('scroll');
                if ($('#nav-toggle').hasClass("active")) {
                    $( ".mobile-nav-menu" ).toggleClass( "slide-open" );
                    $( "#nav-toggle" ).toggleClass( "active" );
                    $( ".header" ).toggleClass( "slide-open" );
                }

                // Moves background
                $(background).removeClass('bg-position').addClass('bg-position2');

                // Moves main buildings track
                $(main).removeClass('main-position').addClass('main-position2');

                // Shows main road
                $('.vehicles').removeClass('road-position-start');

                // Cloud animations
                $(cloudsLeft).css('animation','flyleft 1s').delay(800).queue(function (next) {$(this).hide(); next(); });
                $(cloudsRight).css('animation','flyright 1s').delay(800).queue(function (next) {$(this).hide(); next(); });
                
            }
            else if(index == 2 && direction == 'up'){ // scrollback
                // Navigation Bar
                $('.header').removeClass('scroll');
                // Moves background
                $(background).removeClass('bg-position2').addClass('bg-position');
                // Moves main buildings track backwards
                $(main).removeClass('main-position2').addClass('main-position');
                // hides main road
                $('.vehicles').addClass('road-position-start');
                // Flys clouds back in
                $(cloudsLeft).css('animation','flyleft-return 1s').show();
                $(cloudsRight).css('animation','flyright-return 1s').show();
            }
            // INDEX 3 STATE
            if(index == 2 && direction =='down'){
                // Car Drives Past
                $('.car1').addClass('drive2x');
                
                
            }
            else if(index == 3 && direction == 'up'){ // scrollback
               
            }
            // INDEX 4 STATE
            if(index == 3 && direction =='down'){
               // Truck Drives Past 
               // Car Drives Past faster
               $('.truck1').addClass('drive');
                
            } 
            else if(index == 4 && direction == 'up'){ // scrollback
              
            }

        // CHAPTER 2

            // INDEX 5 STATE
            if(index == 4 && direction =='down'){
                $(background).removeClass('bg-position2').addClass('bg-position3');
                
                // Move Buildings
                $(main).removeClass('main-position2').addClass('main-position3');
            } 
            else if(index == 5 && direction == 'up'){ // scrollback
               $(background).removeClass('bg-position3').addClass('bg-position2');
                // Move buildings
                $(main).removeClass('main-position3').addClass('main-position2');
            }

            // INDEX 6 STATE
            if(index == 5 && direction =='down'){
               // Car Drives Past faster
               $('.car2').addClass('drive');
                
            } 
            else if(index == 6 && direction == 'up'){ // scrollback
              
            }

        // CHAPTER 3

            // INDEX 7 STATE
            if(index == 6 && direction =='down'){
                $(background).removeClass('bg-position3').addClass('bg-position4');

                // Move Buildings
                $(main).removeClass('main-position3').addClass('main-position4');
            }   
            else if(index == 7 && direction == 'up'){ // scrollback
                $(background).removeClass('bg-position4').addClass('bg-position3');
                // Move buildings
                $(main).removeClass('main-position4').addClass('main-position3');
                

            }
            // INDEX 8 STATE
            if(index == 7 && direction =='down'){
                $('.truck2').addClass('driveSlow');
                $('.st84').css('opacity','1'); //turn on streetlights
            }    
            else if(index == 8 && direction == 'up'){ // scrollback
                $('.st84').css('opacity','.5'); //turn off streetlights
            }

        // CHAPTER 4
            // INDEX 9 STATE
            if(index == 8 && direction =='down'){
                $(background).removeClass('bg-position4').addClass('bg-position5');
                $(main).removeClass('main-position4').addClass('main-position5');
            }  
            else if(index == 9 && direction == 'up'){ // scrollback
                $(background).removeClass('bg-position5').addClass('bg-position4');
                $(main).removeClass('main-position5').addClass('main-position4');
            }
            // INDEX 10 STATE
            if(index == 9 && direction =='down'){
               // fullnight
            }    
            else if(index == 10 && direction == 'up'){ // scrollback

            }
            // INDEX 11 STATE
            if(index == 10 && direction =='down'){
               // duckboat
               $('.duckboat').addClass('drive');
            }    
            else if(index == 11 && direction == 'up'){ // scrollback

            }
            // INDEX 12 STATE
            if(index == 11 && direction =='down'){
            }    
            else if(index == 12 && direction == 'up'){ // scrollback

            }

        // OUTRO

            // INDEX 13 STATE
            if(index == 12 && direction =='down'){
                // Navigation Bar
                $('.header').removeClass('scroll');

                $(background).removeClass('bg-position5').addClass('bg-position6');
                $(main).removeClass('main-position5').addClass('main-position6');
                // hides main road
                $('.vehicles').addClass('road-position-end');

                $('.star').css('display','block'); //show North Star
            }    
            else if(index == 13 && direction == 'up'){ // scrollback
                // Navigation Bar
                $('.header').addClass('scroll');

                $(background).removeClass('bg-position6').addClass('bg-position5');
                $(main).removeClass('main-position6').addClass('main-position5');
                $('.star').css('display','none'); //hide North Star
            }
            // SCROLLHELPER - Counts current scroll position
            // if(direction =='down'){
            //     var position = $(document).scrollTop();

            //     console.log(position);
            // }  

            
        },
        afterLoad: function(anchorLink, index){
            // This code allows the animations to run properly if the page is loaded during a halfway scroll

            var main = '.main'; //set as variable in case we need more things with "main-position" class
            var background = '#background1, #background2'; // bg building ID's
            var cloudsLeft = '.cloud1,.cloud3'; //clouds that move left
            var cloudsRight = '.cloud2,.cloud4'; //clouds that move right

        // CHAPTER 1
            // INDEX 2 STATE
            if(index == 2){
                // Navigation Bar
                $('.header').addClass('scroll');
                if ($('#nav-toggle').hasClass("active")) {
                    $( ".mobile-nav-menu" ).toggleClass( "slide-open" );
                    $( "#nav-toggle" ).toggleClass( "active" );
                    $( ".header" ).toggleClass( "slide-open" );
                }
                // Moves background
                $(background).removeClass('bg-position').addClass('bg-position2');

                // Moves main buildings track
                $(main).removeClass('main-position').addClass('main-position2');

                // Shows main road
                $('.vehicles').removeClass('road-position-start');

            }
        
            // INDEX 3 STATE
            if(index == 3){
                // Car Drives Past
                $('.car1').addClass('drive'); 
            }  
            // INDEX 4 STATE
            if(index == 4){
               $('.truck1').addClass('driveslow'); 
            } 
        // CHAPTER 2
            // INDEX 5 STATE
            if(index == 5){
                $(background).removeClass('bg-position2').addClass('bg-position3');
                $(main).removeClass('main-position2').addClass('main-position3');
            } 
            // INDEX 6 STATE
            if(index == 6){
               $('.car2').addClass('drive');
            } 
        // CHAPTER 3
            // INDEX 7 STATE
            if(index == 7){
                $(background).removeClass('bg-position3').addClass('bg-position4');

                // Move Buildings
                $(main).removeClass('main-position3').addClass('main-position4');
            }   
            // INDEX 8 STATE
            if(index == 8){
                $('.truck2').addClass('driveSlow');
                $('.st84').css('opacity','1'); //turn on streetlights
            }    
        // CHAPTER 4
            // INDEX 9 STATE
            if(index == 9){
                $(background).removeClass('bg-position4').addClass('bg-position5');
                $(main).removeClass('main-position4').addClass('main-position5');
            }  
        
            // INDEX 10 STATE
            if(index == 10){
               // fullnight
            }    
            // INDEX 11 STATE
            if(index == 11){
               // duckboat
               $('.duckboat').addClass('drive');
            }    
            // INDEX 12 STATE
            if(index == 12){
            }    
        

        // OUTRO
            // INDEX 13 STATE
            if(index == 13){
                // Navigation Bar
                $('.header').removeClass('scroll');

                $(background).removeClass('bg-position5').addClass('bg-position6');
                $(main).removeClass('main-position5').addClass('main-position6');
                // hides main road
                $('.vehicles').addClass('road-position-end');

                $('.star').css('display','block'); //show North Star
            }    
        },
        afterRender: function(){
            // SKROLLR INIT
            var s = skrollr.init();
            var alts = '.st18,#sky,#bg1,#bg2,.star'; 
            if ($(window).width() > 640) {
                skrollr.init();
              } else {
                skrollr.init().destroy();
                $(alts).addClass('noSkrollr');
              }
                // FB INIT
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
                // TWITTER INIT
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
        },
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){ 
                    // Adjust Scroll Intensity
            var idx = Math.abs(index - nextIndex)*2.5; 
            $.fn.fullpage.setScrollingSpeed(idx*500);
        }
    });
});
// Upgrade browser message
var $buoop = {
    vs:{i:10,f:25,o:20,s:7,c:2},
    text: "This webpage is best viewed on a modern browser, please upgrade here for a better experience and security on the web:"
    }; 
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}

  // Google analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38053081-1', 'auto');
  ga('send', 'pageview');


// Open Mobile menu
$( "a#nav-toggle" ).click(function() {
  $( ".mobile-nav-menu" ).toggleClass( "slide-open" );
  $( "#nav-toggle" ).toggleClass( "active" );
  $( ".header" ).toggleClass( "slide-open" );
});
