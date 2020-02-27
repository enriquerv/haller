


$( document ).ready(function() {
    loc = $(location).attr('pathname');
    console.log(loc);
    console.log("loc");
    if(loc == '/universidad/index.php' || loc == '/universidad/' || loc == '/test/universidad/index.php' || loc == '/test/universidad/'){
        $('#intVideo').get(0).play();
        var video = document.getElementById('intVideo');

        video.addEventListener('ended',function(){
           $('#img_last').show("slow").css('width', $('#intVideo').width()).css('height', $('#intVideo').height());
        $('#intVideo').remove();
        });
    }
    $(".cont-mvh").each(function(){
    	PH = $("#height-mvh").val();
    	H  = $(this).height();
    	if(PH < H)
    		$("#height-mvh").val(H);    	
    });
    $(".cont-mvh").css("min-height", $("#height-mvh").val() + "px");
});


$(".edu_option").mouseover(function(){
	$(".edu_option").removeClass("col-md-3").removeClass("col-md-6").addClass("col-md-2").css("opacity", 1);
	$(this).removeClass("col-md-2").addClass("col-md-6");    
    image = $(this).attr('data-image');
    text = $(this).attr('data-text');
    $(this).css("background-image", "url('../assets/images/uni/"+image+".png')");
    $("#"+text).removeClass('d-none');
});

$(".edu_option").mouseleave(function(){
	$(".edu_option").addClass("col-md-3").removeClass("col-md-6").removeClass("col-md-2").css("opacity", 1);	    
    image = $(this).attr('data-image-r');
    text = $(this).attr('data-text');
    $(this).css("background-image", "url('../assets/images/uni/"+image+".png')");
    $("#"+text).addClass('d-none');
});

$(".edu_option2").mouseover(function(){
    $(".edu_option2").removeClass("col-md-3").removeClass("col-md-6").addClass("col-md-2").css("opacity", 1);
    $(this).removeClass("col-md-2").addClass("col-md-6");    
    image = $(this).attr('data-image');
    text = $(this).attr('data-text');
    $(this).css("background-image", "url('../assets/images/uni/"+image+".png')");
    $("#"+text).removeClass('d-none');
});

$(".edu_option2").mouseleave(function(){
    $(".edu_option2").addClass("col-md-3").removeClass("col-md-6").removeClass("col-md-2").css("opacity", 1);        
    image = $(this).attr('data-image-r');
    text = $(this).attr('data-text');
    $(this).css("background-image", "url('../assets/images/uni/"+image+".png')");
    $("#"+text).addClass('d-none');
});

