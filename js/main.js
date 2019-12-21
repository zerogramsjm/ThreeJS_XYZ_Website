$(function() {
	  $('a[href*=\\#]:not([href=\\#])').click(function() {
		  event.preventDefault();
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1500);
	        return false;
	      }
	    }
	  });
});



$('#start').waypoint(function(direction) {
   $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(1) a').css('color','#666666');
  $('#mainnav').css('visibility','visible');
  alert('into');
  }, {
   offset: 300
});

$('#start').waypoint(function(up) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(1) a').css('color','#666666');
  alert('into');
}, {
   offset: -1
});


$('#section1').waypoint(function(direction) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(2) a').css('color','#666666');
  document.getElementById('section1-hide').style.opacity = 1;
  document.getElementById('section1-title').style.opacity = 1;
  document.getElementById('section1-sub-title').style.opacity = 1;
  }, {
   offset: 300
});

$('#section1').waypoint(function(up) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(2) a').css('color','#666666');
}, {
   offset: -1
});

$('#section2').waypoint(function(direction) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(3) a').css('color','#666666');
  document.getElementById('section2-hide').style.opacity = 1;
  document.getElementById('section2-title').style.opacity = 1;
  document.getElementById('section2-sub-title').style.opacity = 1;
  }, {
   offset: 300
});

$('#section2').waypoint(function(direction) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(3) a').css('color','#000000');
}, {
   offset: -1
});

$('#section3').waypoint(function(direction) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(4) a').css('color','#000000');
  }, {
   offset: 300
});

$('#section3').waypoint(function(direction) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(4) a').css('color','#000000');
}, {
   offset: -1
});
$('#section4').waypoint(function(direction) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(6) a').css('color','#000000');
    document.getElementById('section4-hide').style.opacity = 1;
  document.getElementById('section4-title').style.opacity = 1;
  document.getElementById('section4-hide-sequel').style.opacity = 1;
  
  }, {
   offset: 300
});

$('#section4').waypoint(function(direction) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(6) a').css('color','#000000');
}, {
   offset: -1
});

$('#section5').waypoint(function(direction) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(5) a').css('color','#000000');
    document.getElementById('section5-hide').style.opacity = 1;
  document.getElementById('section5-title').style.opacity = 1;
    $('#video_background').show().trigger("play").bind('ended', function () { 
    this.currentTime = this.duration -1;
});
  
  }, {
   offset: 300
});

$('#section5').waypoint(function(direction) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(5) a').css('color','#000000');
  document.getElementById('video_background').pause();
}, {
   offset: -1
});

$('#end').waypoint(function(direction) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(6) a').css('color','#000000');
  }, {
   offset: 300
});
$('#end').waypoint(function(direction) {
  $('#mainnav ul li a').css('color','#ffffff');
  $('#mainnav ul li:nth-child(6) a').css('color','#000000');
}, {
   offset: 10
});

