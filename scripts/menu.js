$(document).ready(function(){

  $('.menu-toggle').click(function(){
    var className = this.getAttribute('data-toggle');
    var selector  = this.getAttribute('data-target');

    $(selector).toggleClass(className);
  });

  $('.has-dropdown').find('span:first').click(function(e){
    e.preventDefault();

    $(this).parent().toggleClass('dropdown-open');
  });
});