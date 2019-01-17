
$(window).scroll(function(e) {
    var scrollTop = $(this).scrollTop();
    if (scrollTop > 1) {
        $('#navbar').css('padding', '0', '12px')
    } else {
        $('#navbar').css('padding', '25px')
    }
    console.log($(this).scrollTop());
});



// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat:13.5957881, lng:100.3657806};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}



$('.jarallax').jarallax();





$('.to-top').click(function(){
    $('html,body').animate({scrollTop:'0px'},800);
})

function oncart() {
    window.location.assign("cart.php");
}



