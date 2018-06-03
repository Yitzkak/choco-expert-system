//alert('start');

//Used for opening diagnosis tab
document.getElementById("defaultOpen").click();
function openStage(evt, stage) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(stage).style.display = "block";
    evt.currentTarget.className += " active";
}

//used for getting checkbox values
$("#stage1-btn").on('click',function(){
    //alert("hellllo");

    var result = $('input[type="radio"]:checked');
    //alert(result.val());
    //alert(result);
});


//when submit button is clicked show the modal box
//with the loading box
//remove it after 10 secs 
//and show the result box

//MODAL WINDOW
/*$('#stage1-btn').on('click',function(){
    $(".modal").css("display","block");
    setInterval(function(){
        //$("#myLoader").remove();
        $('.result').css('display','block');
        $("#myLoader").css("display","none");
    },2000)

    //Result Logic
    var age = $('#age').val();
    var weigth = $('#weight');
    var obese = $("input[name='obese']:checked").val();
    var history = $("input[name='history']:checked").val();

    alert(obese+' ob '+'his'+ history);

    
   /* if(age < 30 && obese == "no" && history == "no"){
        var result = "You do not have prostate disease";
        $('.result-space').text(result);
    }
});*/

//Stage 2 Button
$('#stage-2-btn').on('click',function(){

    //Result Logic
    var age = $('#age').val();
    var weigth = $('#weight');
    var obese = $("input[name='obese']:checked").val();
    var history = $("input[name='history']:checked").val();

    alert(obese+' ob '+'his'+ history);

    
    var c1 = $("input[name='c1']:checked").val();
    var c2 = $("input[name='c2']:checked").val();
    var c3 = $("input[name='c3']:checked").val();
    var c4 = $("input[name='c4']:checked").val();
    var c5 = $("input[name='c5']:checked").val();

    var pos_result = "You have prostate disease";
    var neg_result = "You have prostate disease";
    if(age > 39 && obese == "yes" && history == "yes"){
        if(c1 == "yes" || c2 == "yes" || c3 == "yes" || c4 == "yes" || c5 == "yes" ){   
            $('.result-space').text(result);
        }
    }
    else if(age > 39 && c5 == "yes"){
        $('.result-space').text(result);
    }
    

    $(".modal").css("display","block");
    setInterval(function(){
        //$("#myLoader").remove();
        $('.result').css('display','block');
        $("#myLoader").css("display","none");
    },1000);  
});

$('#myModal').on('click',function(){  
    //$(".modal").css("display","none");
});


//Accordion Design
/*$('.accordion').on('click',function(){
    $(this).toggleClass('active');
    alert('work 1')
   
    
    var panel = $(this).next().attr("display");

    alert('this is panel dispal 2 '+panel);
    //var panelDisplayAttr = $('.panel');
    //var panelDisplayAttr = panel.attr("display","block");
    alert('this is panel display attri 3 '+panel);
    
    if(panelDisplayAttr != "block"){
        //alert("got here 1");
        panel.attr('display','block');
    } 
    else {
        //alert("hello,am here 2");
        panel.attr('display','none');
    }  
});*/
var acc = document.getElementsByClassName("accordion");
var i;

for(i = 0; i < acc.length; i++){
    acc[i].addEventListener("click",function(){
        this.classList.toggle("aktive");

        var panel =this.nextElementSibling;

        if(panel.style.display === "block"){
            panel.style.display = "none";
        }
        else{
            panel.style.display = "block";
        }
    });
}


