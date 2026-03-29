<?php
/*
Plugin Name: Crime Scene Mini Game
*/

function crime_scene_game() {
ob_start();
?>

<div id="room">

<h2>Crime Scene Investigation</h2>
<p>Click objects in the room and collect evidence.</p>

<div id="scene">

<div class="object evidence" data-name="Knife" style="top:60%;left:50%">🔪</div>
<div class="object evidence" data-name="Phone" style="top:70%;left:20%">📱</div>
<div class="object evidence" data-name="USB" style="top:40%;left:75%">💾</div>
<div class="object evidence" data-name="Note" style="top:30%;left:40%">📝</div>

<div class="object fake" data-name="Cup" style="top:40%;left:10%">☕</div>
<div class="object fake" data-name="Book" style="top:20%;left:80%">📚</div>

</div>

<h3>Evidence Log</h3>
<ul id="log"></ul>

</div>

<style>

#scene{
position:relative;
height:400px;
background:#ddd;
border:2px solid black;
}

.object{
position:absolute;
font-size:32px;
cursor:pointer;
}

</style>

<script>

let log=document.getElementById("log")

document.querySelectorAll(".object").forEach(obj=>{

obj.onclick=()=>{

let name=obj.dataset.name

if(obj.classList.contains("evidence")){

log.innerHTML += "<li>Collected evidence: "+name+"</li>"
obj.style.opacity=.4

}
else{

log.innerHTML += "<li>Incorrect item: "+name+"</li>"

}

}

})

</script>

<?php
return ob_get_clean();
}

add_shortcode('crime_game','crime_scene_game');

?>