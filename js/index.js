function createJobTitle(){
    var title = document.getElementById("myJobTitle");
    var jobTitle = "Full Stack Developer";
    
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
}