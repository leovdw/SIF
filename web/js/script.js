/**
 * Created by leo on 23/06/2017.
 */
/* ----------------------------- TIME RESET --------------------------------*/

var button = document.querySelector('.is1');
var isnot = document.querySelector('.isnot');
var AllButtons = document.querySelectorAll('.is-small');

var temps = 1;

var myVar = setInterval(myTimer, 850);

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
var checkIntro = 0;
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

function noIntro() {
    scrollContainer.style.display = "none";
}

for (var i = 0 ; i<AllButtons.length ; i++){
    AllButtons[i].addEventListener('click', function(){
        scrollContainer.style = 'opacity: 0;' +
            'transform: translateY(-100%);';
        home.style = 'opacity: 1;';
        setTimeout(noIntro, 500);
        checkIntro++;
    })
}

// Section after intro
var scrollHome = document.querySelector(".scroll-home");

var navHome = document.querySelector(".nav-home");
var navProject = document.querySelector(".nav-project");
// Section of navigation in home
var navigation = document.querySelectorAll(".navigation");
var nav_active = document.querySelector('.scroll-home .navigation_isactive');
var countHome = 0;




scrollHome.addEventListener('mousewheel', function (event) {
    if (checkIntro > 0) {
        if (temps >= 1) {
            var scroll = Math.round(event.deltaY);
            console.log(scroll);

            if (scroll > 1) {
                scrollToHome(countHome + 1);
                scroll=0;
            }
            if (scroll < -1) {
                scrollToHome(countHome - 1);
                scroll=0;
            }
            scroll=0;
            temps = 0;
        }
    }
});

function scrollToHome(to) {
    countHome = to;
    if (countHome === navigation.length){countHome = navigation.length -1}
    if (countHome === -1){countHome = 0}
    var nav_active = document.querySelector('.navigation_isactive');

    for (var i = 0; i < navigation.length; i++) {
        if (countHome === i){

            for (let j = 0; j < navigation.length; j++) {
                navigation[j].style =  ' --translate0 : 0%;  --translate1 : 100%;  --translate2 : 200%;  --translate3 : 300%;'+
                    '--result :calc(var(--translate'+j+') - '+i * 100+'%); ' +
                    'transform: translateY(var(--result));';
            }

            nav_active.classList.remove("navigation_isactive");
            navigation[i].classList.add("navigation_isactive");
        }
    }
}

// ========= JS Calendrier ======= //

var calendar = document.querySelector('.calendar');
var calendrier = document.querySelector('.calendrier');
var close= document.querySelector('.delete');

close.addEventListener('click', function () {
    calendrier.classList.remove('open');
});

calendar.addEventListener('click', function () {
    calendrier.classList.add('open');
});

// ========= Modal Home ======= //

// var ModalLunch = document.querySelector('.modaluncher');
// var ModalClose = document.querySelector('.modal-close');
// var modal = document.querySelector('.modal');
//
// ModalLunch.addEventListener('click', function () {
//    modal.classList.add('is-active');
// });
// ModalClose.addEventListener('click', function () {
//    modal.classList.remove('is-active');
// });


function detectswipe(el,func) {
    swipe_det = new Object();
    swipe_det.sX = 0;
    swipe_det.sY = 0;
    swipe_det.eX = 0;
    swipe_det.eY = 0;
    var min_x = 20;  //min x swipe for horizontal swipe
    var max_x = 40;  //max x difference for vertical swipe
    var min_y = 40;  //min y swipe for vertical swipe
    var max_y = 50;  //max y difference for horizontal swipe
    var direc = "";
    ele = document.querySelector(el);
    ele.addEventListener('touchstart',function(e){
        var t = e.touches[0];
        swipe_det.sX = t.screenX;
        swipe_det.sY = t.screenY;
    },false);
    ele.addEventListener('touchmove',function(e){
        e.preventDefault();
        var t = e.touches[0];
        swipe_det.eX = t.screenX;
        swipe_det.eY = t.screenY;
    },false);
    ele.addEventListener('touchend',function(e){
        //horizontal detection
        if ((((swipe_det.eX - min_x > swipe_det.sX) || (swipe_det.eX + min_x < swipe_det.sX)) && ((swipe_det.eY < swipe_det.sY + max_y) && (swipe_det.sY > swipe_det.eY - max_y)))) {
            if(swipe_det.eX > swipe_det.sX) direc = "r";
            else direc = "l";
        }
        //vertical detection
        if ((((swipe_det.eY - min_y > swipe_det.sY) || (swipe_det.eY + min_y < swipe_det.sY)) && ((swipe_det.eX < swipe_det.sX + max_x) && (swipe_det.sX > swipe_det.eX - max_x)))) {
            if(swipe_det.eY > swipe_det.sY) direc = "d";
            else direc = "u";
        }

        if (direc != "") {
            if(typeof func == 'function') func(el,direc);
        }
        direc = "";
    },false);
}

function myfunction(el,d) {
    if (d === "u"){
        navHome.style = "opacity:0;" + "transform:translateY(-100vh);" + "transition:0.8s ease;";
        navProject.style = "opacity:1;" + "transform:translateY(0%);" + "transition:0.8s ease;";
        console.log("down");
    } else if (d === "d") {
        navHome.style = "opacity:1;" + "transform:translateY(0%);" + "transition:0.8s ease;";
        navProject.style = "opacity:0;" + "transform:translateY(100vh);" + "transition:0.8s ease;";
        console.log("not down");
    } else {
        return 0;
    }
}



detectswipe('.nav-home',myfunction);
detectswipe('.nav-project',myfunction);




var lis = document.querySelectorAll('.tab.hero-foot ul li');
var lisSeen = document.querySelector('.is-beeing-seen');
var allsections = document.querySelectorAll('.about_sections')
var section_seen = document.querySelector('.is_current')

for (let k=0 ; k<lis.length ; k++){
    lis[k].addEventListener('click', function () {
        var lisSeen = document.querySelector('.is-beeing-seen');
        var section_seen = document.querySelector('.is_current')

        lis[k].classList.add('is-beeing-seen')
        lisSeen.classList.remove('is-beeing-seen')

        allsections[k].classList.add('is_current')
        section_seen.classList.remove('is_current')
    })
}

