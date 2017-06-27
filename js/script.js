/**
 * Created by leo on 23/06/2017.
 */
/* ----------------------------- TIME RESET --------------------------------*/

var button = document.querySelector('.is1');
var isnot = document.querySelector('.isnot');
var AllButtons = document.querySelectorAll('.is-small');

var temps = 1;

var myVar = setInterval(myTimer, 650);

function myTimer() {
    temps = temps + 1;
}

var SectionNb = document.querySelectorAll('.is-scrolable');
var scrollContainer = document.querySelector('.scroll_container');
var home = document.querySelector('.home');



/* ----------------------------- ADD is-scrolable --------------------------------*/
/*

var add= document.querySelector('.add');



var scroll_container= document.querySelector('.scroll_container');

add.addEventListener('click', function () {
    createsection();
});

function createsection() {
    var newsection= document.createElement("is-scrolable");
    var SectionNb = document.querySelectorAll('.is-scrolable');
    newsection.innerHTML= SectionNb.length + 1;
    newsection.cldotssList.add('newsection');
    newsection.cldotssList.add('is-scrolable');
    scroll_container.appendChild(newsection);
}

*/
/* -------------------------------------------------------------*/
/* ----------------------------Nav Barre Scroll---------------------------------*/

var dots = document.querySelectorAll('.dot');
var isactive = document.querySelector('.dot.is-visible');
for(let i = 0 ; i < dots.length; i++ ){
    dots[i].addEventListener('click', function  () {
        var isactive = document.querySelector('.dot.is-visible');
        isactive.classList.remove('is-visible');
        dots[i].classList.add('is-visible');
        scrollTO(i);
        temps = 0;
    })
}

var count = 0;

document.addEventListener('mousewheel', function (event) {
    if (temps >= 1){

        var scroll = Math.round(event.deltaY);
        var isactive = document.querySelector('.dot.is-visible');
        if (scroll > 1){
            scrollTO(count + 1);
            isactive.classList.remove('is-visible');
            dots[count].classList.add('is-visible');
        }
        if(scroll < -1) {
            scrollTO(count - 1);
            isactive.classList.remove('is-visible');
            dots[count].classList.add('is-visible');
        }
        temps = -0.5;
    }});

var scrollTO = function (to) {
    count = to;
    var SectionNb = document.querySelectorAll('.is-scrolable');
    if (count === SectionNb.length){count = SectionNb.length -1}
    if (count === -1){count = 0}

    for (var i = 0; i<SectionNb.length ; i++){
        if (count === i){
            for (var j = 0; j<SectionNb.length ;j++) {
                SectionNb[j].style = 'transform: translateX(-' + i * 100 + '%);';
            }
        }
    }

    if (count === 5){
        console.log('ok');
        button.classList.remove('is1');
        button.classList.add('isnot');
        isnot.classList.add('is1');
        isnot.classList.remove('isnot')
    }else{
        button.classList.remove('isnot');
        button.classList.add('is1');
        isnot.classList.add('isnot');
        isnot.classList.remove('is1')
    }
};

function noneIntro() {
    scrollContainer.style.display = "none";
}

for (var i = 0 ; i<AllButtons.length ; i++){
    AllButtons[i].addEventListener('click', function(){
        scrollContainer.style = 'opacity: 0;' +
                                'transform: translateY(-100%);';
        home.style = 'opacity: 1;';

    })
}
