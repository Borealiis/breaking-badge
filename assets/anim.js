const body = document.body


const lazer = document.createElement("div")
lazer.classList.add("lazer")
body.appendChild(lazer)

let posL = 0; 
setInterval(function(){
    posL++
    let test = Math.floor(Math.random() * 100);
    lazer.style.left = test+"%"
  
}, 100);
let renvoi = 0;
setInterval(function(){
    renvoi++
    if(renvoi == 6){
        lazer.style.display ="block"
      
            setTimeout(function(){
                body.classList.add("blurBack")
                body.classList.add("hueRotate")
             }, 100);
             setTimeout(function(){
                body.classList.remove("blurBack");
                body.classList.remove("hueRotate");
             }, 200);
             setTimeout(function(){
                body.classList.add("blurBack")
                body.classList.add("brightnessDrop")
             }, 300);
             setTimeout(function(){
                body.classList.remove("blurBack");
                body.classList.remove("brightnessDrop");
             }, 400);
             setTimeout(function(){
                body.classList.add("blurBack")
             }, 490);
             setTimeout(function(){
                body.classList.remove("blurBack");
             }, 550);
        renvoi=0
    }else{
        lazer.style.display ="none"
        body.classList.remove("blurBack");
    }
}, 1000);
const allUserModal = document.getElementById("allUserModal")
const boutonAfficheAllUsers = document.getElementById("boutonAfficheAllUsers")
let bolModalAfficheUser = false
boutonAfficheAllUsers.addEventListener("click", function(){
    console.log("test");
        if(bolModalAfficheUser == false){
            allUserModal.style.height = "200px"
            setTimeout(function(){
                allUserModal.style.opacity = "100%"  
           }, 500); 
            bolModalAfficheUser = true  
        }
        else if(bolModalAfficheUser == true){
            allUserModal.style.height = "0px"
            allUserModal.style.opacity = "0%" 
            bolModalAfficheUser = false 
        }
})