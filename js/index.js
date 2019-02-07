function createJobTitle(){
    var title = document.getElementById("myJobTitle");
    var jobTitle = "A Back-End Developer";
    
    var delay = 3050;
    var i; 
    for(i = 0; i < jobTitle.length; i++){
        var letter = jobTitle.charAt(i);
        var letterElement = document.createElement("span");
        letterElement.classList.add("letterLift");
        letterElement.innerHTML = letter;
        letterElement.style.animationDelay = (delay+(i*100))+"ms";
        
        title.appendChild(letterElement);
    }
    
    var title2 = document.getElementById("myJobTitle2");
    var jobTitle = "with a touch of Front-End";
    
    var delay = 3050;
    var i; 
    for(i = 0; i < jobTitle.length; i++){
        var letter = jobTitle.charAt(i);
        var letterElement = document.createElement("span");
        letterElement.classList.add("letterLift");
        letterElement.innerHTML = letter;
        letterElement.style.animationDelay = (delay+(i*100))+"ms";
        
        title2.appendChild(letterElement);
    }
}

function modalCloseFunctions(){
    // Get the modal
    var modal = document.getElementById('myModal');
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    modal.onclick = function() {
        slideProfileContent();
        showNavigation();
    }

    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        slideProfileContent();
        showNavigation();
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            slideProfileContent();
            showNavigation();
        }
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
    document.getElementById("myModal").classList.remove("slide-in-modal");
    document.getElementById("myModal").classList.add("slide-out-left");
    document.getElementById("quoteContent").style.opacity = 1;
    document.getElementById('fp-nav').classList.remove("remove");
    document.getElementsByClassName("fp-controlArrow")[1].classList.remove("remove");
    fullpage.setAllowScrolling(true);


}