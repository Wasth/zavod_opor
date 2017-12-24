var slider1 = 1;
var max1i = 10;
var min1i = 1;

var slider2 = 1;
var max2i = 7;
var min2i = 1;
var slider2data;

var varietySlider = 0;
$(document).ready(function () {
    $.getJSON({
        url:"assets/img/slider2/slidestext.json",
        success: function (data) {
            slider2data = data;
        }
    });
    prepareVarietySlider();
    $("#photoSlider .arrow img").click(function () {
        if($(this).parent().hasClass("leftArrow")) {
            if(slider1 == max1i) {
                slider1 = min1i;
            }else {
                slider1++;
            }
            $("#photoSlider .slides .slidesBlock").animate({
                left:"-834px"
            },500,function () {
                $("#photoSlider .slides .slidesBlock").css({
                    "left":"834px"
                });
                    $("#photoSlider .slides .slidesBlock").empty();
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider1/'+(slider1*3 - 2)+'slide.jpg\');"></div></div>');
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider1/'+(slider1*3 - 1)+'slide.jpg\'); "></div></div>');
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider1/'+(slider1*3)+'slide.jpg\');"></div></div>');
                    $("#photoSlider .slides .slidesBlock").animate({
                        left:"0px"
                    },500);
            });
        }else if($(this).parent().hasClass("rightArrow")){
            if(slider1 == min1i) {
                slider1 = max1i;
            }else {
                slider1--;
            }
            $("#photoSlider .slides .slidesBlock").animate({
                left:"834px"
            },500,function () {
                $("#photoSlider .slides .slidesBlock").css({
                    "left":"-834px"
                });
                setTimeout(function () {
                    $("#photoSlider .slides .slidesBlock").empty();
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider1/'+(slider1*3 - 2)+'slide.jpg\');"></div></div>');
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider1/'+(slider1*3 - 1)+'slide.jpg\'); "></div></div>');
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider1/'+(slider1*3)+'slide.jpg\');"></div></div>');
                    $("#photoSlider .slides .slidesBlock").animate({
                        left:"0px"
                    },500);
                },100);
            });
        }
    });
    $("#ownProductionSlide .arrow img").click(function () {
        if($(this).parent().hasClass("leftArrow")) {
            if(slider2 == max2i) {
                slider2 = min2i;
            }else {
                slider2++;
            }
            $("#ownProductionSlide .slides .slidesBlock").animate({
                left:"-834px"
            },500,function () {
                $("#ownProductionSlide .slides .slidesBlock").css({
                    "left":"834px"
                });
                $("#ownProductionSlide .slides .slidesBlock").empty();
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider2/'+(slider2*3 - 2)+'slide.jpg\');"></div><h2>'+slider2data[(slider2*3 - 2)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider2/'+(slider2*3 - 1)+'slide.jpg\'); "></div><h2>'+slider2data[(slider2*3 - 1)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider2/'+(slider2*3)+'slide.jpg\');"></div><h2>'+slider2data[(slider2*3)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").animate({
                    left:"0px"
                },500);
            });
        }else if($(this).parent().hasClass("rightArrow")){
            if(slider2 == min2i) {
                slider2 = max2i;
            }else {
                slider2--;
            }
            $("#ownProductionSlide .slides .slidesBlock").animate({
                left:"834px"
            },500,function () {
                $("#ownProductionSlide .slides .slidesBlock").css({
                    "left":"-834px"
                });
                $("#ownProductionSlide .slides .slidesBlock").empty();
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider2/'+(slider2*3 - 2)+'slide.jpg\');"></div><h2>'+slider2data[(slider2*3 - 2)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider2/'+(slider2*3 - 1)+'slide.jpg\'); "></div><h2>'+slider2data[(slider2*3 - 1)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'assets/img/slider2/'+(slider2*3)+'slide.jpg\');"></div><h2>'+slider2data[(slider2*3)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").animate({
                    left:"0px"
                },500);
            });
        }
    });

    $("#curItemGallery img").click(function () {
        $("body").prepend("<div id='popupWrapper'><div id='popup'><img class='full-img' src='"+$(this).attr("src")+"'></div></div>");
        $("#popupWrapper").click(function () {
            $("#popupWrapper").remove();
        });
    });

});
function prepareVarietySlider(){

    for(var i = 0; i < 4;i++){
        var block = $("#slides-tmp > div:eq("+(varietySlider+i)+")").html();
        if(block != undefined) {
            $("#varietySlider .slides .slidesBlock").append("<div class='right'>" + block + "</div>");
        }
    }
    $("#varietySlider .slides .slidesBlock > div").animate({"left":"0px"},500);



    $("#varietySlider .arrow").click(function () {
        if($(this).hasClass("leftArrow")) {
            $("#varietySlider .slides .slidesBlock > div").animate({"left":"-1000px"},500);
            setTimeout(function () {
                $("#varietySlider .slides .slidesBlock").empty();
                if(getSliderCount() > (varietySlider+4)){
                    varietySlider+=4;
                }else {
                    varietySlider = 0
                }
                for(var i = 0; i < 4;i++){
                    var block = $("#slides-tmp > div:eq("+(varietySlider+i)+")").html();
                    console.log(varietySlider+i);
                    console.log(block);
                    if(block != undefined) {
                        $("#varietySlider .slides .slidesBlock").append("<div class='right' data-p='"+varietySlider+i+"'>"+block+"</div>");
                    }
                }
                $("#varietySlider .slides .slidesBlock > div").animate({"left":"0px"},500);
            },500);

        }
        else if($(this).hasClass("rightArrow")) {
            $("#varietySlider .slides .slidesBlock > div").animate({"left":"1000px"},500);
            setTimeout(function () {
                $("#varietySlider .slides .slidesBlock").empty();
                if(varietySlider == 0){
                    if (((getSliderCount()/4) - Math.floor((getSliderCount()/4))) != 0){
                        varietySlider = ((Math.floor((getSliderCount()/4)) + 1) * 4)-4;
                    }else {
                        varietySlider = Math.floor((getSliderCount()/4));
                    }
                }else {
                    varietySlider-=4;
                }
                for(var i = 0; i < 4;i++){
                    var block = $("#slides-tmp > div:eq("+(varietySlider+i)+")").html();
                    if(block != undefined) {
                        $("#varietySlider .slides .slidesBlock").append("<div class='left' data-p='"+varietySlider+i+"'>"+block+"</div>");
                    }
                }
                $("#varietySlider .slides .slidesBlock > div").animate({"left":"0px"},500);
            },500);
        }
    });
}
function getSliderCount(){
    var c = 0;
    $("#slides-tmp > div").each(function () {
        c++;
    });
    return c;
}