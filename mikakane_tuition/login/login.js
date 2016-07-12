new Vue({
  el:'#main',
  data:{
}
})
$('#logintext').textillate();

$('#memreg_button').click(function(){
  $('#memreg_main').fadeIn();
  $('#logintext').fadeOut();
})

$('#loginpage_back').click(function(){
  $('#memreg_main').fadeOut();
  $('#logintext').fadeIn();
})
