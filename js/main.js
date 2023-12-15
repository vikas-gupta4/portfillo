// let slideIndex = 0;
//         startslide();

//         function startslide() {
//             let i;
//             let silderImages = document.getElementsByClassName("slide");
//             let dots = document.getElementsByClassName("dot");
//             for (i = 0; i < silderImages.length; i++) {
//                 silderImages[i].style.display = "none";
//             }
//             slideIndex++;
//             if (slideIndex > silderImages.length) { slideIndex = 1 }
//             for (i = 0; i < dots.length; i++) {
//                 dots[i].className = dots[i].className.replace(" active","");
//             }
//             silderImages[slideIndex - 1].style.display = "block";
//             dots[slideIndex - 1].className += " active";
//             setTimeout(startslide, 8100);
//         }

        //navbar

        const nav = document.querySelector("#nav");
        const sticky = nav.offsetTop;
        window.addEventListener('scroll', () =>{
            if(window.pageYOffset > sticky)
            {
                nav.classList.add('sticky');
            }
            else{
                nav.classList.remove('sticky');
            }

        });
// alternative solution
        // window.onscroll = function () { myFunction() };

        // var nav = document.getElementById("nav");
        // var sticky = nav.offsetTop;

        // function myFunction() {
        //     if (window.pageYOffset >= sticky) {
        //         nav.classList.add("sticky")
        //     } else {
        //         nav.classList.remove("sticky");
        //     }
        // }

        //burger nav

        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginRight = "250px";
          }
          
          function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginRight= "0";
          }
//jquary
$(document).ready(function () {
    var birth_date = new Date('October,7, 2001');
    var mon_day = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    var year = new Date().getYear();
    if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) {
        mon_day[1]++;
    }
    var years, months, days, hours, minutes, seconds;
    var ageCount = document.getElementById('age');
    setInterval(function () {
        var current_date = new Date();
        var month = current_date.getMonth();
        var day = mon_day[month - 1];

        var YearDiff = (current_date.getYear() - birth_date.getYear());

        var monthDiff = (current_date.getMonth() - birth_date.getMonth());
        if (monthDiff < 0) {
            monthDiff = current_date.getMonth() + (12 - birth_date.getMonth())
            YearDiff = YearDiff - 1;
        }

        var daysDiff = (current_date.getDate() - birth_date.getDate());
        if (daysDiff < 0) {
            daysDiff = current_date.getDate() + (day - birth_date.getDate());
            monthDiff = monthDiff - 1;
        }


        var hoursDiff = (current_date.getHours() - birth_date.getHours());
        var minDiff = (current_date.getMinutes() - birth_date.getMinutes());
        var secDiff = (current_date.getSeconds() - birth_date.getSeconds());


        ageCount.innerHTML = YearDiff + ' Years ' + monthDiff + ' Months ' + daysDiff  + ' Days ' + hoursDiff +
            ' Hours ' + minDiff + ' Minutes ' + secDiff + ' Seconds';

    }, 500);

});
//  word corusel
var typed = new Typed(".auto-type", {
    strings: ["web-designer", "web-developer", "Frontend-developer", "lead generation"],
    typeSpeed: 50,
    backSpeed: 30,
    loop: true
})