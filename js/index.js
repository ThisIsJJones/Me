function createJobTitle(){
    var title = document.getElementById("myJobTitle");
    var jobTitle = "A Software Developer";
    
    var delay = 3050;
    var i; 
    for(i = 0; i < jobTitle.length; i++){
        var letter = jobTitle.charAt(i);
        var letterElement = document.createElement("span");
        letterElement.classList.add("letterStyle");
        letterElement.innerHTML = letter;
        letterElement.style.animationDelay = (delay+(i*100))+"ms";
        
        title.appendChild(letterElement);
    }
    
    var title2 = document.getElementById("myJobTitle2");
    var jobTitle = "Seeking opportunities";
    
    var delay = 3050;
    var i; 
    for(i = 0; i < jobTitle.length; i++){
        var letter = jobTitle.charAt(i);
        var letterElement = document.createElement("span");
        letterElement.classList.add("letterStyle");
        letterElement.innerHTML = letter;
        letterElement.style.animationDelay = (delay+(i*100))+"ms";
        
        title2.appendChild(letterElement);
    }
}

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
    document.getElementById("leftContent").classList.add("slide-in");
    document.getElementById("rightContent").classList.add("slide-in");
    document.getElementById("profilePicture").classList.add("expandPicture");
    document.getElementById("quoteContent").style.opacity = 1;
    document.getElementById('fp-nav').classList.remove("remove");
    document.getElementsByClassName("fp-controlArrow")[1].classList.remove("remove");
    fullpage.setAllowScrolling(true);
}

function humanValidationInput(){
    var humanValidationInputField = document.getElementById("formHumanValidation");
    if(humanValidationInputField.value != 15){
        humanValidationInputField.classList.add("invalidAnswer");
        return false;
    }
    return true;
}