$('.team-carousel').owlCarousel({
    loop:true,
    margin:30,
    autoplay:true,
    autoplayTimeout:4000,
    responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:4
      }
    
    }
})


if ($('.testimonial-carousel').length) {
    $('.testimonial-carousel').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        smartSpeed: 700,
        autoplay: true,
        navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1024:{
                items:2
            },
        }
    });    		
}


if($('.count-box').length){
    $('.count-box').appear(function(){

        var $t = $(this),
            n = $t.find(".count-text").attr("data-stop"),
            r = parseInt($t.find(".count-text").attr("data-speed"), 10);
            
        if (!$t.hasClass("counted")) {
            $t.addClass("counted");
            $({
                countNum: $t.find(".count-text").text()
            }).animate({
                countNum: n
            }, {
                duration: r,
                easing: "linear",
                step: function() {
                    $t.find(".count-text").text(Math.floor(this.countNum));
                },
                complete: function() {
                    $t.find(".count-text").text(this.countNum);
                }
            });
        }
        
    },{accY: 0});
}

function handlePreloader() {
    if($('.preloader').length){
        $('.preloader').delay(200).fadeOut(500);
    }
}
$(window).on('load', function() {
    handlePreloader();
});



if($('.progress-line').length){
    $('.progress-line').appear(function(){
        var el = $(this);
        var percent = el.data('width');
        $(el).css('width',percent+'%');
    },{accY: 0});
}




var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
