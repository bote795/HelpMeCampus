$(document).ready(function() {
  $('.filter').multifilter();
  
  $("input[placeholder='name']").hide().removeClass('hide');
  $("input[placeholder='major']").hide().removeClass('hide');
  $("input[placeholder='grad_yr']").hide().removeClass('hide');
  $("input[placeholder='room number']").hide().removeClass('hide');
  $("input[placeholder='floor']").hide().removeClass('hide');
  
  
  $('.edit_name').click(function(e){    
    e.stopPropagation();
    $("input[placeholder='name']").toggle();
  });  
  $('.edit_major').click(function(e){    
    e.stopPropagation();
    $("input[placeholder='major']").toggle();
  });
  $('.edit_grad').click(function(e){    
    e.stopPropagation();
    $("input[placeholder='grad_yr']").toggle();
  });
  $('.edit_room').click(function(e){    
    e.stopPropagation();
    $("input[placeholder='room number']").toggle();
  });
  $('.edit_floor').click(function(e){    
    e.stopPropagation();
    $("input[placeholder='floor']").toggle();
  });
});