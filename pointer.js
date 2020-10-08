$(function(){
  let pointer = $(".pointer");
  $("body").on("mousemove", function(event){

    let scrollX = $(window).scrollLeft();
    let scrollY = $(window).scrollTop();

    let x = event.pageY-24-scrollY;
    let y = event.pageX-24-scrollX

    pointer.css({
      top:x,
      left:y
    })
  });
});
