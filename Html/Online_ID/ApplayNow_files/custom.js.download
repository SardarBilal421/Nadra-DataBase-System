

$(document).ready(function() {
	
	$("data-scroll-smooth").click(function(e) {
		e.preventDefault();
		
		var position = $($(this).attr("href")).offset().top;
		
		position -= 200;
		if(position < 0) {
			position = 0;
		}

		$("body, html").animate({
			scrollTop: position
		}, 1000);
	});
});	


 var animationEnd = (function(el) {
  var animations = {
    animation: 'animationend',
    OAnimation: 'oAnimationEnd',
    MozAnimation: 'mozAnimationEnd',
    WebkitAnimation: 'webkitAnimationEnd',
  };

  for (var t in animations) {
    if (el.style[t] !== undefined) {
      return animations[t];
    }
  }
})(document.createElement('div'));

function scroll()
{
	$('html, body').animate({scrollTop: '+=340px'}, 800);
}


function scrollForm(data, step){
	if (data.status === 'success') {
		/*var step = $("#currentStep").val();*/
		console.log(step);
		if(step === "deceased"){
			$('#collapseOneDeceased').slideToggle('slow'); 
			$('#collapseOneDeceasedAgnle').toggleClass('fa-angle-down fa-angle-up');
			$('html, body').animate({scrollTop: '+=540px'}, 2000);
		}
	}
}

  function login()
  {
  $("#register-block").hide();
  $("#login-block").show();
  
  
$('#login-block').one(animationEnd, scroll);
  }
   function createacc()
  {
  
  $("#login-block").hide();
  
  $("#register-block").show();
  
$('#register-block').one(animationEnd, scroll);
  }
  
