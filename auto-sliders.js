//----------Declaring variables------------ //
let slide_store_1 = document.getElementById("slide_store_1");
let slide_store_2 = document.getElementById("slide_store_2");
let slider_1 = document.getElementById("slider_1");
let slider_2 = document.getElementById("slider_2");
let column_five = document.getElementsByClassName("column-5")
let column_six = document.getElementsByClassName("column-6")

//-------Creating autoslide for the first carousel: latest products------//
const maxscrollLeft1 = slider_1.scrollWidth - slider_1.clientWidth;

function AutoSlide1() {
    if(slider_1.scrollLeft >(maxscrollLeft1 - 1 )){
        slider_1.scrollLeft -= maxscrollLeft1;
    }
    else{
        slider_1.scrollLeft += 1;
    }
}

//------- Making first carousel stop on hover -----//
let run_time_1 = setInterval(AutoSlide1, 10);

for (let i = 0; i < column_five.length; i++) {
    // console.log("hehhe");
    column_five[i].addEventListener("mouseover", () =>{
        clearInterval(run_time_1);
        
    })
    column_five[i].addEventListener("mouseout", () =>{
        return run_time_1 = setInterval(AutoSlide1, 10)
    })
}

//-------Creating autoslide for the second carousel: New Stores------//
const maxscrollLeft2 = slider_2.scrollWidth - slider_2.clientWidth;

function AutoSlide2()
{
    if(slider_2.scrollLeft >(maxscrollLeft2 - 1 )){
        slider_2.scrollLeft -= maxscrollLeft2;
    }
    else{
        slider_2.scrollLeft += 1;
    }
}

//------- Making second carousel stop on hover -----//
let run_time_2 = setInterval(AutoSlide2, 20);

for (let i =0; i <column_six.length; i++) {
    column_six[i].addEventListener("mouseover", () =>{
        clearInterval(run_time_2);
    })
    column_six[i].addEventListener("mouseout", () =>{
        return run_time_2 = setInterval(AutoSlide2, 10)
    })
}