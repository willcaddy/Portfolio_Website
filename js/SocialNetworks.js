// JavaScript Document

$(function(){
  var social='';
  $('.social').click(function(){
    
    if(social)$('.logo').removeClass(social);
    
    social = $(this).data('info');
    $('.logo').addClass($(this).data('info'));
    $('.link').text($(this).data('link')).attr('href',$(this).data('link'));
    $('.container').css('transform','rotateY(-180deg)');
    
    
  }); 
  
  $('.close').click(function(){
    
    $('.container').css('transform','rotateY(-360deg)');
    
  }); 

})
