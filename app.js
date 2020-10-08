$(function(){

  // output list of bands
  the_band_list();

  $('form').on("submit", function(event){

    event.preventDefault();
 
    // TODO use AJAX post request to submit data.
    var postData = $(this).serialize();
    $.post("api.php", postData)
    .done();
    $(this)[0].reset();
   
    the_band_list();
    
  });

  // Note that we're delegating the event from the chooser to the band - we do this because the band menu items are added after the DOM is initially constructed. This event handler is actually on the band menu items
  $('.chooser').on("click", '.band', function(event){
    event.preventDefault();

    // TODO use AJAX get request to get data for band and place it inside band-info div
    $.get("api.php?id", function(data, status){
      var obj = JSON.parse(data);
      console.log(obj);
      $('.band-info h2').text(obj['name']);
      $('.band-info p').text(obj['description']);
      $('.player-container').append(obj['player']);
    
    })
  });
}); // end ready

function the_band_list(){

  // // clear old bands
  $(".chooser").empty();

  // TODO get list of bands and place inside chooser div. Each band anchor tag should have the class band
 
  $.get("api.php?bands", function(data, status){
    $('.chooser').append(data);
  })
  
}
