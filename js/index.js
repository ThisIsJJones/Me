(function($){
  'use strict';
    $(window).on('load', function () {
        if ($(".pre-loader").length > 0)
        {
            $(".pre-loader").fadeOut(1000);
        }
    });
})(jQuery)

function highlight(){
    onHoverBottomHalf.addEventListener('mouseover', function() {
       rightContent.style.background = 'linear-gradient(0deg, black, transparent)'
       onHoverBottomHalf.style.zIndex = -1;
        onHoverTopHalf.style.zIndex = 1;
        updateDate.style.visibility = 'visible';
    });
    
    onHoverTopHalf.addEventListener('mouseover', function() {
       rightContent.style.background = 'linear-gradient(180deg, black 25%, transparent)'
       onHoverBottomHalf.style.zIndex = 1;
        onHoverTopHalf.style.zIndex = -1;
        updateDate.style.visibility = 'hidden';

    });
}

highlight();

function showNavigation(){
     document.getElementById("fp-nav").classList.remove('removeNavBar');
     document.getElementById("fp-nav").classList.remove('addNavBar');
     document.getElementById("fp-nav").classList.add('addNavBar');
}

function removeNavigation(){
    document.getElementById("fp-nav").classList.remove('removeNavBar');
    document.getElementById("fp-nav").classList.remove('addNavBar');
    document.getElementById("fp-nav").classList.add('removeNavBar');
}

function slideProfileContent(){
//    document.getElementById("leftContent").classList.add("slide-in");
//    document.getElementById("rightContent").classList.add("slide-in");
//    document.getElementById("profilePicture").classList.add("expandPicture");
//    document.getElementById("quoteContent").style.opacity = 1;
//    document.getElementById('fp-nav').classList.remove("remove");
////    document.getElementsByClassName("fp-controlArrow")[1].classList.remove("remove");
//    fullpage.setAllowScrolling(true);
}

function humanValidationInput(){
    var humanValidationInputField = document.getElementById("formHumanValidation");
    if(humanValidationInputField.value != 15){
        humanValidationInputField.classList.add("invalidAnswer");
        return false;
    }
    return true;
}

function showSnackBar() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function setupFormFocus() {
    document.getElementById("formName").classList.add("applyBoxShadow")
    document.getElementById("formName").addEventListener("click", () => {
        document.getElementById("formName").classList.add("applyBoxShadow")
        document.getElementById("formEmail").classList.remove("applyBoxShadow")
        document.getElementById("formMessage").classList.remove("applyBoxShadow")
        document.getElementById("formHumanValidation").classList.remove("applyBoxShadow")
    })
    
    document.getElementById("formEmail").addEventListener("click", () => {
        document.getElementById("formName").classList.remove("applyBoxShadow")
        document.getElementById("formEmail").classList.add("applyBoxShadow")
        document.getElementById("formHumanValidation").classList.remove("applyBoxShadow")
        document.getElementById("formMessage").classList.remove("applyBoxShadow")
    })
    
    document.getElementById("formMessage").addEventListener("click", () => {
        document.getElementById("formName").classList.remove("applyBoxShadow")
        document.getElementById("formEmail").classList.remove("applyBoxShadow")
        document.getElementById("formHumanValidation").classList.remove("applyBoxShadow")
        document.getElementById("formMessage").classList.add("applyBoxShadow")
    })
    
    document.getElementById("formHumanValidation").addEventListener("click", () => {
        document.getElementById("formName").classList.remove("applyBoxShadow")
        document.getElementById("formEmail").classList.remove("applyBoxShadow")
        document.getElementById("formMessage").classList.remove("applyBoxShadow")
        document.getElementById("formHumanValidation").classList.add("applyBoxShadow")
    })
}

function animateEducationPage() {
    document.getElementById('uwecLogo').classList.add('animateUwecLogo');
                
                
    document.getElementById('educationEauClaire').classList.add('education-1-show');
    document.getElementById('educationCourses').classList.add('education-2-show');
    document.getElementById('educationBooks').classList.add('education-3-show');

    var children = document.getElementById('educationEauClaire').children;
    children[1].classList.add('growHr-1');
    var counter=1;
    for(index=2; index<children.length; index++){
        children[index].classList.add('educationItemMoveRight');
        children[index].style.setProperty('animation-delay', counter+'s');
        counter += .1;
    }

    var children = document.getElementById('educationCourses').children;
    children[1].classList.add('growHr-2');
    for(index=2; index<children.length; index++){
        children[index].classList.add('educationItemMoveRight');
        children[index].style.setProperty('animation-delay', counter+'s');
        counter += .1;
    }


    var children = document.getElementById('educationBooks').children;
    children[1].classList.add('growHr-3');
    for(index=2; index<children.length; index++){
        children[index].classList.add('educationItemMoveRight');
        children[index].style.setProperty('animation-delay', counter+'s');
        counter += .1;
    }

}