(function($){
  $(function(){

    $('.sidenav').sidenav();

  }); // end of document ready
})(jQuery); // end of jQuery name space


document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {});
});

$(document).ready(function(){
    //enable all M framework functions
    M.AutoInit();
    $('.sidenav').sidenav().on('click tap', 'li a', () => {
        $('.sidenav').sidenav('close');
});

});

$('#download-button').click(function(){
    M.toast({html: 'Got ya!', classes: 'rounded white-text green lighten-3 flow-text software-template-name'});
});