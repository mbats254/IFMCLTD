$(document).ready(function () {
    //menu-toggle
    $('.menu-bars').click(function () {
        $('.menu').addClass('savage21')
    });
    $('#x,.home,.about,.service,.international,.news,.tax,.contact').click(function () {
        $('.menu').removeClass('savage21')
    });
     //active-menu
     let abtn = document.querySelectorAll('.menu .mimi');
     abtn.forEach(button => {
         button.onclick = () => {
             abtn.forEach(btn => btn.classList.remove('ct'));
             button.classList.add('ct');
         };
     });
      
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
 
     
     //active-news
     let wknd = document.querySelectorAll('.weeknd .pantha');
     wknd.forEach(button => {
         button.onclick = () => {
             wknd.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd1 = document.querySelectorAll('.weeknd1 .pantha');
     wknd1.forEach(button => {
         button.onclick = () => {
             wknd1.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd2 = document.querySelectorAll('.weeknd2 .pantha');
     wknd2.forEach(button => {
         button.onclick = () => {
             wknd2.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd3 = document.querySelectorAll('.weeknd3 .pantha');
     wknd3.forEach(button => {
         button.onclick = () => {
             wknd3.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd4 = document.querySelectorAll('.weeknd4 .pantha');
     wknd4.forEach(button => {
         button.onclick = () => {
             wknd4.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd5 = document.querySelectorAll('.weeknd5 .pantha');
     wknd5.forEach(button => {
         button.onclick = () => {
             wknd5.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd6 = document.querySelectorAll('.weeknd6 .pantha');
     wknd6.forEach(button => {
         button.onclick = () => {
             wknd6.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd7= document.querySelectorAll('.weeknd7 .pantha');
     wknd7.forEach(button => {
         button.onclick = () => {
             wknd7.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd8 = document.querySelectorAll('.weeknd8 .pantha');
     wknd8.forEach(button => {
         button.onclick = () => {
             wknd8.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd9 = document.querySelectorAll('.weeknd9 .pantha');
     wknd9.forEach(button => {
         button.onclick = () => {
             wknd9.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd10 = document.querySelectorAll('.weeknd10 .pantha');
     wknd10.forEach(button => {
         button.onclick = () => {
             wknd10.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd11 = document.querySelectorAll('.weeknd11 .pantha');
     wknd11.forEach(button => {
         button.onclick = () => {
             wknd11.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd12 = document.querySelectorAll('.weeknd12 .pantha');
     wknd12.forEach(button => {
         button.onclick = () => {
             wknd12.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd13 = document.querySelectorAll('.weeknd13 .pantha');
     wknd13.forEach(button => {
         button.onclick = () => {
             wknd13.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd14 = document.querySelectorAll('.weeknd14 .pantha');
     wknd14.forEach(button => {
         button.onclick = () => {
             wknd14.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });
     let wknd15 = document.querySelectorAll('.weeknd15 .pantha');
     wknd15.forEach(button => {
         button.onclick = () => {
             wknd15.forEach(btn => btn.classList.remove('paranoid'));
             button.classList.add('paranoid');
         };
     });


      //active-news
      let yrChange = document.querySelectorAll('.yr-pg1 .god6');
      yrChange.forEach(button => {
          button.onclick = () => {
            yrChange.forEach(btn => btn.classList.remove('paranoid'));
              button.classList.add('paranoid');
          };
      });
      let yr2Change = document.querySelectorAll('.yr-pg2 .god6');
      yr2Change.forEach(button => {
          button.onclick = () => {
            yr2Change.forEach(btn => btn.classList.remove('paranoid'));
              button.classList.add('paranoid');
          };
      });
      let yr3Change = document.querySelectorAll('.yr-pg3 .god6');
      yr3Change.forEach(button => {
          button.onclick = () => {
            yr3Change.forEach(btn => btn.classList.remove('paranoid'));
              button.classList.add('paranoid');
          };
      });   
});
//Tax calculation
function solve(){
   var cost = document.getElementById('keny').value;
   var amntMRT = document.getElementById('mmny').value;
   var amntPen = document.getElementById('pmny').value; 
   var Imoney = document.getElementById('imny').value;
  if(amntMRT > 0){
      amntMRT=amntMRT;
  }
  else{
      amntMRT=0;
  }
  if(amntPen > 0){
    amntPen=amntPen;
  }
  else{
    amntPen=0;
  }
  if(Imoney > 0){
    Imoney=Imoney;
  }
  else{
    Imoney=0;
  }
   var dedy = Number.parseFloat(amntMRT) + Number.parseFloat(amntPen);
   document.getElementById('deduction').value = dedy;
   var Treleif = 2400;
   if(cost < 5999){
       var NHIF = 150;
   }
   else if(cost < 7999){
    var NHIF = 300;
   }
   else if(cost < 11999){
    var NHIF = 400;
   }
   else if(cost < 14999){
    var NHIF = 500;
   }
   else if(cost < 19999){
    var NHIF = 600;
   }
   else if(cost < 24999){
    var NHIF = 750;
   }
   else if(cost < 29999){
    var NHIF = 850;
   }
   else if(cost < 34999){
    var NHIF = 900;
   }
   else if(cost < 39999){
    var NHIF = 950;
   }
   else if(cost < 44999){
    var NHIF = 1000;
   }
   else if(cost < 49999){
    var NHIF = 1100;
   }
   else if(cost < 59999){
    var NHIF = 1200;
   }
   else if(cost < 69999){
    var NHIF = 1300;
   }
   else if(cost < 79999){
    var NHIF = 1400;
   }
   else if(cost < 89999){
    var NHIF = 1500;
   }
   else if(cost < 99999){
    var NHIF = 1600;
   }
   else if(cost >= 100000){
    var NHIF = 1700;
   }
   document.getElementById('NHIF').value = NHIF;
   var inreleif = Number.parseFloat(Imoney) * 30 /100;
   if(inreleif > 5000){
       inreleif = 5000;
   }
   else if(inreleif <= 5000){
       inreleif = inreleif;
   }
   document.getElementById('I-relief').value = inreleif;
   var NSSF = 200;
   document.getElementById('NSSF').value = NSSF;
  var leSs = NHIF +  Number.parseFloat(NSSF);
  var aDd = Treleif + Number.parseFloat(inreleif);
   var txamount = Number.parseFloat(cost) - Number.parseFloat(dedy);
    if(txamount <= 24000){
       var txTotal = Number.parseFloat(txamount) * 10 / 100;
       var ntSalary = Number.parseFloat(txamount) + aDd - Number.parseFloat(txTotal) - leSs - Imoney;
       document.getElementById('tax').value = txTotal;
       document.getElementById('Net-Salary').value = ntSalary;
   }
   else if(txamount <= 32333){
    var txTotal = 24000 * 10 / 100;
    var remain1 = txamount - 24000;
    var txTotal1 = remain1 * 25 / 100;
    var allTotal1 = Number.parseFloat(txTotal1) + Number.parseFloat(txTotal);
    var ntSalary = Number.parseFloat(txamount) + aDd - Number.parseFloat(allTotal1) - leSs - Imoney;
    document.getElementById('tax').value = allTotal1;
    document.getElementById('Net-Salary').value = ntSalary;
}
   else if(txamount > 32333){
    var txTotal = 24000 * 10 / 100;
    var txTotal1 = 8333 * 25 / 100;
    var remain1 = txamount - 32333;
    var txTotal2 = remain1 * 30 / 100;
    var allTotal1 = Number.parseFloat(txTotal1) + Number.parseFloat(txTotal) + Number.parseFloat(txTotal2);
    var ntSalary = Number.parseFloat(txamount) + aDd - Number.parseFloat(allTotal1) - leSs - Imoney;
    document.getElementById('tax').value = allTotal1;
    document.getElementById('Net-Salary').value = ntSalary;
}
  
} 
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


