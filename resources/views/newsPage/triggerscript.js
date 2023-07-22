$(document).ready(function () {
      //owl-carousel
    $('.st').owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,
        nav: false,
        items: 1,
        autoplaySpeed: 1000,
        smartSpeed: 1500,
        autoplayHoverPause: false
    });

       //response carousel
       $('.response .owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,
        nav: false,
        items: 1
    });


    //t carousel
    $(document).ready(function () {
        $('.team .owl-carousel').owlCarousel({
            loop: true,
            margin: 1.5,
            autoplay: true,
            dots: true,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
    //Questions
    $('.qstn-head').each(function () {
        $(this).click(function () {
            $(this).next().toggleClass('show-qstn-content');
            let icon = $(this).children('span').children("i").attr('class');
            if (icon == "fas fa-plus") {
                $(this).children('span').html('<i class = "fas fa-minus"></i>');
            } else {
                $(this).children('span').html('<i class = "fas fa-plus"></i>');
            }
        });
    });
  //video
   let lVideo = document.querySelectorAll('.v-list .vid-track');
   let mVideo = document.querySelector('.main-video video');
   let tName = document.querySelector('.main-video .vid-name');
   lVideo.forEach(video =>{
         video.onclick = () =>{
            lVideo.forEach(vid => vid.classList.remove('fyeah'));
            video.classList.add('fyeah');
            if(video.classList.contains('fyeah')){
               let src = video.children[0].getAttribute('src');
               mVideo.src = src;
               let text = video.children[1].innerHTML;
               tName.innerHTML = text;
            };
         };
        });
 
});
//Loader
var loader;
function loadNow(opacity){
if (opacity <= 0){
    displayContent();
}
else{
    loader.style.opacity = opacity;
    window.setTimeout(function(){
        loadNow(opacity - 0.05)
    },100);
}
}
function displayContent(){
    loader.style.display = 'none';
}
document.addEventListener("DOMContentLoaded",function(){
    loader = document.getElementById('loader_all');
    loadNow(1);
});


