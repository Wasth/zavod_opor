var slider1 = 12;
var max1i = 13;
var min1i = 1;

var slider2 = 9;
var max2i = 10;
var min2i = 1;
var slider2data;

var varietySlider = 0;
$(document).ready(function () {

    $.getJSON({
        url:"/assets/img/slider2/slidestext.json",
        success: function (data) {
            slider2data = data;
        }
    });


    $('#detailButtons .ui-button').click(function () {
        var block = $(this).attr('id').replace('Button','Block');
        $("body").addClass('lock')
        $("#"+block).show();
    });
    $(".modal-wrapper").click(function () {
        $("body").removeClass('lock')
        $(this).parent().hide();
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
            },100,function () {
                $("#photoSlider .slides .slidesBlock").css({
                    "left":"834px"
                });
                    $("#photoSlider .slides .slidesBlock").empty();
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider1/'+(slider1*3 - 2)+'slide.jpg\');"></div></div>');
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider1/'+(slider1*3 - 1)+'slide.jpg\'); "></div></div>');
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider1/'+(slider1*3)+'slide.jpg\');"></div></div>');
                    $("#photoSlider .slides .slidesBlock").animate({
                        left:"0px"
                    },100);
            });
        }else if($(this).parent().hasClass("rightArrow")){
            if(slider1 == min1i) {
                slider1 = max1i;
            }else {
                slider1--;
            }
            $("#photoSlider .slides .slidesBlock").animate({
                left:"834px"
            },100,function () {
                $("#photoSlider .slides .slidesBlock").css({
                    "left":"-834px"
                });
                setTimeout(function () {
                    $("#photoSlider .slides .slidesBlock").empty();
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider1/'+(slider1*3 - 2)+'slide.jpg\');"></div></div>');
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider1/'+(slider1*3 - 1)+'slide.jpg\'); "></div></div>');
                    $("#photoSlider .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider1/'+(slider1*3)+'slide.jpg\');"></div></div>');
                    $("#photoSlider .slides .slidesBlock").animate({
                        left:"0px"
                    },100);
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
            },100,function () {
                $("#ownProductionSlide .slides .slidesBlock").css({
                    "left":"834px"
                });
                $("#ownProductionSlide .slides .slidesBlock").empty();
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider2/'+(slider2*3 - 2)+'slide.jpg\');"></div><h2>'+slider2data[(slider2*3 - 2)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider2/'+(slider2*3 - 1)+'slide.jpg\'); "></div><h2>'+slider2data[(slider2*3 - 1)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider2/'+(slider2*3)+'slide.jpg\');"></div><h2>'+slider2data[(slider2*3)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").animate({
                    left:"0px"
                },100);
            });
        }else if($(this).parent().hasClass("rightArrow")){
            if(slider2 == min2i) {
                slider2 = max2i;
            }else {
                slider2--;
            }
            $("#ownProductionSlide .slides .slidesBlock").animate({
                left:"834px"
            },100,function () {
                $("#ownProductionSlide .slides .slidesBlock").css({
                    "left":"-834px"
                });
                $("#ownProductionSlide .slides .slidesBlock").empty();
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider2/'+(slider2*3 - 2)+'slide.jpg\');"></div><h2>'+slider2data[(slider2*3 - 2)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider2/'+(slider2*3 - 1)+'slide.jpg\'); "></div><h2>'+slider2data[(slider2*3 - 1)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").append('<div><div style="background-image: url(\'/assets/img/slider2/'+(slider2*3)+'slide.jpg\');"></div><h2>'+slider2data[(slider2*3)+""]+'</h2></div>');
                $("#ownProductionSlide .slides .slidesBlock").animate({
                    left:"0px"
                },100);
            });
        }
    });

    $("#curItemGallery img, #photos img").click(function () {
        $("body").prepend("<div id='popupWrapper'><div id='popup'><img class='full-img' src='"+$(this).attr("src")+"'></div></div>");
        $("#popupWrapper").click(function () {
            $("#popupWrapper").remove();
        });
    });

});
function prepareVarietySlider(){

    for(var i = 0; i < 4;i++){
        var block = getBlock(i);
        if(block != undefined) {
            appendToSlider(block,'right',getLink(i));
        }
    }
    $("#varietySlider .slides .slidesBlock > div").animate({"left":"0px"},100);



    $("#varietySlider .arrow").click(function () {
        if($(this).hasClass("leftArrow")) {
            $("#varietySlider .slides .slidesBlock > div").animate({"left":"-1000px"},100);
            setTimeout(function () {
                $("#varietySlider .slides .slidesBlock").empty();
                if(getSliderCount() > (varietySlider+4)){
                    varietySlider+=4;
                }else {
                    varietySlider = 0
                }

                for(var i = 0; i < 4;i++){
                    var block = getBlock(i);

                    if(block != undefined) {
                        appendToSlider(block,'right',getLink(i));
                    }
                }
                $("#varietySlider .slides .slidesBlock > div").animate({"left":"0px"},100);
            },500);

        } else if($(this).hasClass("rightArrow")) {
            $("#varietySlider .slides .slidesBlock > div").animate({"left":"1000px"},100);
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
                    var block = getBlock(i);
                    if(block != undefined) {
                        appendToSlider(block,'left',getLink(i))
                    }
                }
                $("#varietySlider .slides .slidesBlock > div").animate({"left":"0px"},100);
            },500);
        }
    });
}
function getSliderCount(){
    var c = 0;
    $("#slides-tmp > a").each(function () {
        c++;
    });
    return c;
}
function getBlock(i){
    return $("#slides-tmp > a:eq("+(varietySlider+i)+")").html();
}
function getLink(i){
    return $("#slides-tmp > a:eq("+(varietySlider+i)+")").attr("href");
}
function appendToSlider(block,pos,link){
    $("#varietySlider .slides .slidesBlock").append("<div class='"+pos+"'><a href='"+link+"'>" + block + "</a></div>");
}
