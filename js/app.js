var main = function() {
  $('.dropdown-toggle').click(function() {
    $('.dropdown-menu').toggle();
  });
}

var hover = function() {
    
    $('.neighborhood-guides .thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
};

var tooltip = function() {
	$("[rel='tooltip']").tooltip(); 
};



var push = function() {
  /* Push the body and the nav over by 285px over */
  $('.icon-menu').click(function() {
    $('.howitworks').animate({
      left: "0px"
    }, 300);

    $('body').animate({
	  left: "100%"
	  }, 300);
	/*$('.howitworks').css("position", "relative");*/
	$('body').css("overflow", "hidden");
});

/* Then push them back */
  $('.icon-close').click(function() {
    $('.howitworks').animate({
      left: "-100%"
    }, 300);
    $('body').animate({
      left: "0px"
    }, 300);
	$("body").css("overflow", "auto");
  });
};


var equal = function() {
    var maxHeight = 0;			
    $(".equalize").each(function(){
      if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
    });			
    $(".equalize").height(maxHeight);
  };


$(document).ready(main);
$(document).ready(push);
$(document).ready(hover);
$(document).ready(tooltip);
$(document).ready(equal);

/*
$(document).ready(
  function () {
    $('.nav li').hover(
      function () { //appearing on hover
        $('ul', this).fadeIn();
      },
      function () { //disappearing on hover
        $('ul', this).fadeOut();
      }
    );
  }
);*/
