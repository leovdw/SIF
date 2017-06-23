/**
 * Created by leopo on 23/06/2017.
 */
/* ----------------------------- TIME RESET --------------------------------*/

var temps = 1;

var myVar = setInterval(myTimer, 800);

function myTimer() {
    temps = temps + 1;
}

/* TO CHANGE  (Selectionner toute les sections) */

var SectionNb = document.querySelectorAll('.section');




/* ----------------------------- ADD SECTION --------------------------------*/
/* TO CHANGE (button pour add une page) */

var add= document.querySelector('.add');

/* TO CHANGE (section conteneur)*/

var section_wraper= document.querySelector('.section_wraper');

add.addEventListener('click', function () {
    createsection();

});

function createsection() {
    var newsection= document.createElement("section");
    var SectionNb = document.querySelectorAll('.section');
    newsection.innerHTML= SectionNb.length + 1;
    newsection.classList.add('newsection');
    newsection.classList.add('section');
    section_wraper.appendChild(newsection);
}


/* -------------------------------------------------------------*/
var count = 0;

document.addEventListener('mousewheel', function (event) {
    if (temps >= 1){

        var scroll = Math.round(event.deltaY);

        if (scroll > 1){
            scrollTO(count + 1)
        }
        if(scroll < -1) {
            scrollTO(count - 1)
        }
        temps = 0;
    }});

var scrollTO = function (to) {
    count = to;
    var SectionNb = document.querySelectorAll('.section');
    if (count === SectionNb.length){count = SectionNb.length -1}
    if (count === -1){count = 0}

    for (var i = 0; i<SectionNb.length ; i++){
        if (count === i){
            for (var j = 0; j<SectionNb.length ;j++) {
                SectionNb[j].style = 'transform: translateY(-' + i * 100 + '%);';
            }
        }
    }
};
/* ----------------------------Nav Barre Scroll---------------------------------*/
/* TO CHANGE (side nav)*/
var as = document.querySelectorAll('.sidenav a');

for(let i = 0 ; i < as.length; i++ ){
    as[i].addEventListener('click', function  () {
        var isactive = document.querySelector('.active');
        isactive.classList.remove('active');
        as[i].classList.add('active');
        scrollTO(i);
        temps = 0;
    })
}
