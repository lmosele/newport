$(document).ready(function() {
            var body = $("#home");
            var canvas = $("canvas");
            var mockup = $(".allcells")
    $('#content').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: true,
        anchors:['1', '2', '3', '4', '5', '6', '7', '8', '9','10', '11', '12', '13'],
        navigation: false,
        navigationPosition: 'right',
        navigationTooltips: ['Home', 'Maxi Cosi', 'AllCells',],
        showActiveTooltip: true,
        // slidesNavigation: true,
        // slidesNavPosition: 'bottom',
        //Scrolling
        css3: true,
        scrollingSpeed: 600,
        autoScrolling: false,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: false,
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
        controlArrows: false,
        verticalCentered: true,
        resize : false,
        paddingTop: '3em',
        paddingBottom: '10px',
        fixedElements: '.popout',
        responsiveWidth: 640,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){

            // var leavingSection = $(this);
            if(index == 1 && direction == 'down'){
                canvas.remove();
                $(".grid").addClass("show");
            } else if(index == 2 && direction == 'up'){
                // $("canvas").fadeIn();
                $(".grid").removeClass("show");
            }

            if(index == 4 && direction == 'down'){
                $(".grid").removeClass("show");
            } else if(index == 5 && direction == 'up'){
                $(".grid").addClass("show");
            }
         
            // Adjust Scroll Intensity
            var idx = Math.abs(index - nextIndex)*2.5; 
            $.fn.fullpage.setScrollingSpeed(idx*100);
        },
        // afterLoad: function(anchorLink, index){},
        // afterRender: function(){},
        // afterResize: function(){},
        // afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        // onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });
});



// pop menu out on hover
$(".popout").hover(function() {
    $(".popout").toggleClass("open");
    $("#nav-icon").toggleClass("open");
});

// Change document title on tabout
var original = document.title;
$(window).blur(function() {
    document.title = '♥ Come Back Soon'; 
}).focus(function() {
    setTimeout(function(){
      document.title = original;
    }, 5000);
    document.title = 'Welcome Back!'
});


// spinning thingy
var canvas = document.getElementById("geometry"),
    ctx = canvas.getContext('2d'),
    points = [],
    r = 0;
    var a = 20; 
    var b = 10; 
    var d = 20; 
    var minDist = 200; 
    var dist; 

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

    // track mouse
    var currentMousePos = { x: 1, y: 1 };
    $(document).mousemove(function(event) {
        currentMousePos.x = event.pageX;
        currentMousePos.y = event.pageY;
    });
    
// create points
for (var i = 0; i < a; i++) {
    var scaleX = currentMousePos.x;
    var scaleZ = currentMousePos.y;
    var rand = Math.random() * canvas.height;
    points.push({
        cy: rand,
        cx: rand * 0.3 + 300,
        r: 360 / a * i,
        p: {x: null, y: null},
        d: Math.random() * (d + 5) + 50,
        s: (Math.random() - 0.5) * 0.7,
        size: Math.random() * 3 + 1,

    })
}

// render loop
function render(){

    var scaleX = currentMousePos.x/2;
    var scaleZ = currentMousePos.y/2;



    ctx.clearRect(0, 0, canvas.width, canvas.height);

    ctx.strokeStyle = 'rgba(255, 255, 255,'+ 1.0 +')';
    ctx.fillStyle = '#fff';
    ctx.lineWidth = 1;
    ctx.beginPath();
    for (var i=0, len = points.length; i < len; i++) {
        var p = points[i];
        
        for (var j = i + 1; j < points.length; j++) {
            var p2 = points[j];
            distance(p.p.x, p.p.y, p2.p.x, p2.p.y);
        }


        p.r += p.s;

        var vel = {
            x: p.d * Math.sin(p.r * Math.PI / 180 ) + (scaleX/10),
            y: p.d * Math.cos(p.r * Math.PI / 180 ) + (scaleZ/10)
        };

        
        var centx, centy;
        centx = p.p.x - p.size * 0.8;
        centy = p.p.y - p.size * 0.8;
        ctx.fillRect(centx, centy, p.size, p.size);        
        

        p.p.x = p.cx + vel.x;
        p.p.y = p.cy + vel.y;
    }
    ctx.stroke();
    ctx.closePath();

}
// draw connecting lines
function distance(p1x, p1y, p2x, p2y) {
    var dx = p1x - p2x;
    var dy = p1y - p2y;
    dist = Math.sqrt(dx*dx + dy*dy);
     
    if (dist <= minDist) {        
        ctx.moveTo(p1x, p1y);
        ctx.lineTo(p2x, p2y);        
    }  
}
// shim layer with setTimeout fallback
window.requestAnimFrame = (function(){
    return  window.requestAnimationFrame   ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame    ||
        window.oRequestAnimationFrame      ||
        window.msRequestAnimationFrame     ||
    function(callback) {
        window.setTimeout(callback, 1000 / 60);
    };
})();

(function animloop() {
    requestAnimFrame(animloop);
    render();
})();


