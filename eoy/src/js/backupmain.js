// SCROLL HEIGHT
// $(document).scrollTop();

// INIT FULLPAGE
$(document).ready(function() {
    $('#fullpage').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: false,
        anchors:['intro', 'network', 'challenges', 'buzz', 'leadership', 'diversity', 'family', 'home'],
        navigation: false,
        // navigationPosition: 'left',
        // navigationTooltips: ['slide1', 'slide2', 'slide3'],
        showActiveTooltip: false,
        slidesNavigation: false,
        slidesNavPosition: 'bottom',
        //Scrolling
        css3: true,
        scrollingSpeed: 700,
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
        normalScrollElements: '#element1, .element2',
        scrollOverflow: true,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,

        //Accessibility
        keyboardScrolling: true,
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
        responsiveWidth: 0,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){
            var leavingSection = $(this);

            // 1 Default ====== Section Break
            if(index == 1){
                $('#background').attr('class', '').addClass('position');
                $('.cloud1,.cloud3').css('animation','cloud1 100s');
                $('.cloud2').css('animation','cloud2 100s');
            }
            // 1 Down ====== Section Break
            if(index == 1 && direction =='down'){
                $('#bg1').removeClass('position').addClass('position2');
                 $('#bg2').removeClass('position2').addClass('position3');
                $('.cloud1,.cloud3').css('animation','flyleft 1s').delay(800).queue(function (next) {$(this).hide(); next(); });
                $('.cloud2').css('animation','flyright 1s').delay(800).queue(function (next) {$(this).hide(); next(); });
                
                $('.anim-container').css('position', 'fixed');
                $('.block').removeClass('default').addClass('pos1');
            }
                // scrollback
                else if(index == 2 && direction == 'up'){
                    $('#background').removeClass('position2').addClass('position');
                     $('.cloud1,.cloud3').css('animation','flyleft-return 1s').show();
                    $('.cloud2').css('animation','flyright-return 1s').show();


                    $('.anim-container').css('position', 'absolute');
                }
            // 2 Down ====== Section Break
            if(index == 2 && direction =='down'){
                $('#background').removeClass('position2').addClass('position3');
            }
                // scrollback
                else if(index == 3 && direction == 'up'){
                    $('#background').removeClass('position3').addClass('position2');
                }
            // 3 Down ====== Section Break
            if(index == 3 && direction =='down'){
                $('#background').removeClass('position3').addClass('position4');
            }
                // scrollback
                else if(index == 4 && direction == 'up'){
                    $('#background').removeClass('position4').addClass('position3');
                }
            // 4 Down ====== Section Break
            if(index == 4 && direction =='down'){
                $('#background').removeClass('position4').addClass('position5');
            }
                // scrollback
                else if(index == 5 && direction == 'up'){
                    $('#background').removeClass('position5').addClass('position4');
                }
            // 5 Down ====== Section Break
            if(index == 5 && direction =='down'){
                $('#background').removeClass('position5').addClass('position6');
            }
                // scrollback
                else if(index == 6 && direction == 'up'){
                    $('#background').removeClass('position6').addClass('position5');
                }
            // 6 Down ====== Section Break
            if(index == 6 && direction =='down'){
                $('#background').removeClass('position6').addClass('position7');
            }
                // scrollback
                else if(index == 7 && direction == 'up'){
                    $('#background').removeClass('position7').addClass('position6');
                }

        },
        afterLoad: function(anchorLink, index){},
        afterRender: function(){
            var s = skrollr.init();
        },
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });
});
