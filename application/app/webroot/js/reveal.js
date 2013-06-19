$(document).ready(function(){

  $('.caption').on('click', function(e){
    $(e.target).addClass('open');
    $(e.target).parent().find('.image').addClass('imgOpen');
  });
  
  $('.caption').mouseleave(function(e){
	  if($(this).hasClass('open')){
		  $(this).removeClass('open');
		  $('.image').removeClass('imgOpen');
	  };  
  }); 
  
});

console.log("it works")