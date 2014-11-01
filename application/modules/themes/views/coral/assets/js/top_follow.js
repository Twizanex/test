
$(function() 
{
$(".follow").click(function(){
var element = $(this);
var I = element.attr("id");
var info = 'id=' + I;
$("#loading").html('<img src="loader.gif" >');

$.ajax({
type: "POST",
url: "/condivisi/test/index.php/en/ajax/follow",
data: info,
success: function(){
	
$("#loading").ajaxComplete(function(){}).slideUp();
$('#follow'+I).fadeOut(200).hide();
$('#remove'+I).fadeIn(200).show();
}

});
return false;
});
});





$(function() 
{
$(".remove").click(function(){
var element = $(this);
var I = element.attr("id");
var info = 'id=' + I;
$("#loading").html('<img src="loader.gif" >');

$.ajax({
type: "POST",
url: "/condivisi/test/index.php/en/ajax/un_follow",
data: info,
success: function(){
	
$("#loading").ajaxComplete(function(){}).slideUp();
$('#remove'+I).fadeOut(200).hide();
$('#follow'+I).fadeIn(200).show();
}
});
return false;
});
});


