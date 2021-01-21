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
    if(renvoi == 3){
        lazer.style.display ="block"
        renvoi=0
    }else{
        lazer.style.display ="none"
    }
    console.log(renvoi);
}, 1000);