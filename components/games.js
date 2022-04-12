function card(sport,team1,team2){
const div = document.createElement('div');
const h3 = document.createElement('h3');    
const h2 = document.createElement('h2');    
const br= document.createElement('br');    

div.appendChild(h3);
div.appendChild(br);
div.appendChild(h2);
div.classList.add("game-card")
h3.innerHTML="Sport : "+sport
h2.innerHTML=team1+" vs "+team2;
document.body.appendChild(div);
}
function locator(){
    alert("clicker")
}