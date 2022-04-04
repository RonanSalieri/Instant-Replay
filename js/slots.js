// SLOT1 FUNCTIONS ------------------------------------------------------------------
// Play
function playslot1() {
var audioslot1 = document.getElementById('slot1');
if (audioslot1.paused) {
audioslot1.play();
document.getElementById('butslot1play').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot1pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1stop').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1cue3').className="btn btn-lg btn-secondary fs-4"; 

}
else{
audioslot1.currentTime = 0;
}
}

//Pause
function pauseslot1() {
var audioslot1 = document.getElementById('slot1');
audioslot1.pause();
document.getElementById('butslot1play').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1play').disabled = false; 
document.getElementById('butslot1pause').className="btn btn-lg btn-primary fs-4"; 
document.getElementById('butslot1stop').className="btn btn-lg btn-secondary fs-4"; 

}

//stop
function stopslot1() {
var audioslot1 = document.getElementById('slot1');
audioslot1.currentTime = 0;
audioslot1.pause();
document.getElementById('butslot1cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1cue3').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1play').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1play').disabled = false; 
document.getElementById('butslot1pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1stop').className="btn btn-lg btn-primary fs-4"; 

}

// volume
function volumeslot1(val_slot1){
var audioslot1 = document.getElementById('slot1');
audioslot1.volume = val_slot1 / 100;
}
// SLOT1 END FUNCTIONS ------------------------------------------------------------------

// SLOT2 FUNCTIONS ----------------------------------------------------------------------
// Play
function playslot2() {
var audioslot2 = document.getElementById('slot2');
if (audioslot2.paused) {
audioslot2.play();
document.getElementById('butslot2play').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot2pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2stop').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2cue3').className="btn btn-lg btn-secondary fs-4"; 

}
else{
audioslot2.currentTime = 0;
}
}

//Pause
function pauseslot2() {
var audioslot2 = document.getElementById('slot2');
audioslot2.pause();
document.getElementById('butslot2play').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2play').disabled = false; 
document.getElementById('butslot2pause').className="btn btn-lg btn-primary fs-4"; 
document.getElementById('butslot2stop').className="btn btn-lg btn-secondary fs-4"; 

}

//stop
function stopslot2() {
var audioslot2 = document.getElementById('slot2');
audioslot2.currentTime = 0;
audioslot2.pause();
document.getElementById('butslot2cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2cue3').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2play').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2play').disabled = false; 
document.getElementById('butslot2pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2stop').className="btn btn-lg btn-primary fs-4"; 

}

// volume
function volumeslot2(val_slot2){
var audioslot2 = document.getElementById('slot2');
audioslot2.volume = val_slot2 / 100;
}
// SLOT2 END FUNCTIONS ------------------------------------------------------------------

// SLOT3 FUNCTIONS ----------------------------------------------------------------------
// Play
function playslot3() {
    var audioslot3 = document.getElementById('slot3');
    if (audioslot3.paused) {
    audioslot3.play();
    document.getElementById('butslot3play').className="btn btn-lg btn-danger fs-4"; 
    document.getElementById('butslot3pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot3stop').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot3cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot3cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot3cue3').className="btn btn-lg btn-secondary fs-4"; 
    }
    else{
    audioslot3.currentTime = 0;
    }
    }
    
    //Pause
    function pauseslot3() {
    var audioslot3 = document.getElementById('slot3');
    audioslot3.pause();
    document.getElementById('butslot3play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot3play').disabled = false; 
    document.getElementById('butslot3pause').className="btn btn-lg btn-primary fs-4"; 
    document.getElementById('butslot3stop').className="btn btn-lg btn-secondary fs-4"; 
    }
    
    //stop
    function stopslot3() {
    var audioslot3 = document.getElementById('slot3');
    audioslot3.currentTime = 0;
    audioslot3.pause();
    document.getElementById('butslot3cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot3cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot3cue3').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot3play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot3play').disabled = false; 
    document.getElementById('butslot3pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot3stop').className="btn btn-lg btn-primary fs-4"; 
    
    }
    
    // volume
    function volumeslot3(val_slot3){
    var audioslot3 = document.getElementById('slot3');
    audioslot3.volume = val_slot3 / 100;
    }
// SLOT3 END FUNCTIONS ------------------------------------------------------------------
// SLOT4 FUNCTIONS ----------------------------------------------------------------------
// Play
function playslot4() {
    var audioslot4 = document.getElementById('slot4');
    if (audioslot4.paused) {
    audioslot4.play();
    document.getElementById('butslot4play').className="btn btn-lg btn-danger fs-4"; 
    document.getElementById('butslot4pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot4stop').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot4cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot4cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot4cue3').className="btn btn-lg btn-secondary fs-4"; 
    }
    else{
    audioslot4.currentTime = 0;
    }
    }
    
    //Pause
    function pauseslot4() {
    var audioslot4 = document.getElementById('slot4');
    audioslot4.pause();
    document.getElementById('butslot4play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot4play').disabled = false; 
    document.getElementById('butslot4pause').className="btn btn-lg btn-primary fs-4"; 
    document.getElementById('butslot4stop').className="btn btn-lg btn-secondary fs-4"; 
    }
    
    //stop
    function stopslot4() {
    var audioslot4 = document.getElementById('slot4');
    audioslot4.currentTime = 0;
    audioslot4.pause();
    document.getElementById('butslot4cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot4cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot4cue3').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot4play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot4play').disabled = false; 
    document.getElementById('butslot4pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot4stop').className="btn btn-lg btn-primary fs-4"; 
    
    }
    
    // volume
    function volumeslot4(val_slot4){
    var audioslot4 = document.getElementById('slot4');
    audioslot4.volume = val_slot4 / 100;
    }
// SLOT4 END FUNCTIONS ------------------------------------------------------------------   
// SLOT5 FUNCTIONS ----------------------------------------------------------------------
// Play
function playslot5() {
    var audioslot5 = document.getElementById('slot5');
    if (audioslot5.paused) {
    audioslot5.play();
    document.getElementById('butslot5play').className="btn btn-lg btn-danger fs-4"; 
    document.getElementById('butslot5pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot5stop').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot5cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot5cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot5cue3').className="btn btn-lg btn-secondary fs-4"; 
    }
    else{
    audioslot5.currentTime = 0;
    }
    }
    
    //Pause
    function pauseslot5() {
    var audioslot5 = document.getElementById('slot5');
    audioslot5.pause();
    document.getElementById('butslot5play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot5play').disabled = false; 
    document.getElementById('butslot5pause').className="btn btn-lg btn-primary fs-4"; 
    document.getElementById('butslot5stop').className="btn btn-lg btn-secondary fs-4"; 
    }
    
    //stop
    function stopslot5() {
    var audioslot5 = document.getElementById('slot5');
    audioslot5.currentTime = 0;
    audioslot5.pause();
    document.getElementById('butslot5cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot5cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot5cue3').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot5play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot5play').disabled = false; 
    document.getElementById('butslot5pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot5stop').className="btn btn-lg btn-primary fs-4"; 
    
    }
    
    // volume
    function volumeslot5(val_slot5){
    var audioslot5 = document.getElementById('slot5');
    audioslot5.volume = val_slot5 / 100;
    }
// SLOT5 END FUNCTIONS ------------------------------------------------------------------   
// SLOT6 FUNCTIONS ----------------------------------------------------------------------
// Play
function playslot6() {
    var audioslot6 = document.getElementById('slot6');
    if (audioslot6.paused) {
    audioslot6.play();
    document.getElementById('butslot6play').className="btn btn-lg btn-danger fs-4"; 
    document.getElementById('butslot6pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot6stop').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot6cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot6cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot6cue3').className="btn btn-lg btn-secondary fs-4"; 
    }
    else{
    audioslot6.currentTime = 0;
    }
    }
    
    //Pause
    function pauseslot6() {
    var audioslot6 = document.getElementById('slot6');
    audioslot6.pause();
    document.getElementById('butslot6play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot6play').disabled = false; 
    document.getElementById('butslot6pause').className="btn btn-lg btn-primary fs-4"; 
    document.getElementById('butslot6stop').className="btn btn-lg btn-secondary fs-4"; 
    }
    
    //stop
    function stopslot6() {
    var audioslot6 = document.getElementById('slot6');
    audioslot6.currentTime = 0;
    audioslot6.pause();
    document.getElementById('butslot6cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot6cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot6cue3').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot6play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot6play').disabled = false; 
    document.getElementById('butslot6pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot6stop').className="btn btn-lg btn-primary fs-4"; 
    
    }
    
    // volume
    function volumeslot6(val_slot6){
    var audioslot6 = document.getElementById('slot6');
    audioslot6.volume = val_slot6 / 100;
    }
// SLOT6 END FUNCTIONS ------------------------------------------------------------------   
// SLOT7 FUNCTIONS ----------------------------------------------------------------------
// Play
function playslot7() {
    var audioslot7 = document.getElementById('slot7');
    if (audioslot7.paused) {
    audioslot7.play();
    document.getElementById('butslot7play').className="btn btn-lg btn-danger fs-4"; 
    document.getElementById('butslot7pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot7stop').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot7cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot7cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot7cue3').className="btn btn-lg btn-secondary fs-4"; 
    }
    else{
    audioslot7.currentTime = 0;
    }
    }
    
    //Pause
    function pauseslot7() {
    var audioslot7 = document.getElementById('slot7');
    audioslot7.pause();
    document.getElementById('butslot7play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot7play').disabled = false; 
    document.getElementById('butslot7pause').className="btn btn-lg btn-primary fs-4"; 
    document.getElementById('butslot7stop').className="btn btn-lg btn-secondary fs-4"; 
    }
    
    //stop
    function stopslot7() {
    var audioslot7 = document.getElementById('slot7');
    audioslot7.currentTime = 0;
    audioslot7.pause();
    document.getElementById('butslot7cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot7cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot7cue3').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot7play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot7play').disabled = false; 
    document.getElementById('butslot7pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot7stop').className="btn btn-lg btn-primary fs-4"; 
    
    }
    
    // volume
    function volumeslot7(val_slot7){
    var audioslot7 = document.getElementById('slot7');
    audioslot7.volume = val_slot7 / 100;
    }
// SLOT7 END FUNCTIONS ------------------------------------------------------------------   
// SLOT8 FUNCTIONS ----------------------------------------------------------------------
// Play
function playslot8() {
    var audioslot8 = document.getElementById('slot8');
    if (audioslot8.paused) {
    audioslot8.play();
    document.getElementById('butslot8play').className="btn btn-lg btn-danger fs-4"; 
    document.getElementById('butslot8pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot8stop').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot8cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot8cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot8cue3').className="btn btn-lg btn-secondary fs-4"; 
    }
    else{
    audioslot8.currentTime = 0;
    }
    }
    
    //Pause
    function pauseslot8() {
    var audioslot8 = document.getElementById('slot8');
    audioslot8.pause();
    document.getElementById('butslot8play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot8play').disabled = false; 
    document.getElementById('butslot8pause').className="btn btn-lg btn-primary fs-4"; 
    document.getElementById('butslot8stop').className="btn btn-lg btn-secondary fs-4"; 
    }
    
    //stop
    function stopslot8() {
    var audioslot8 = document.getElementById('slot8');
    audioslot8.currentTime = 0;
    audioslot8.pause();
    document.getElementById('butslot8cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot8cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot8cue3').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot8play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot8play').disabled = false; 
    document.getElementById('butslot8pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot8stop').className="btn btn-lg btn-primary fs-4"; 
    
    }
    
    // volume
    function volumeslot8(val_slot8){
    var audioslot8 = document.getElementById('slot8');
    audioslot8.volume = val_slot8 / 100;
    }
// SLOT8 END FUNCTIONS ------------------------------------------------------------------ 
// SLOT9 FUNCTIONS ----------------------------------------------------------------------
// Play
function playslot9() {
    var audioslot9 = document.getElementById('slot9');
    if (audioslot9.paused) {
    audioslot9.play();
    document.getElementById('butslot9play').className="btn btn-lg btn-danger fs-4"; 
    document.getElementById('butslot9pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot9stop').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot9cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot9cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot9cue3').className="btn btn-lg btn-secondary fs-4"; 
    }
    else{
    audioslot9.currentTime = 0;
    }
    }
    
    //Pause
    function pauseslot9() {
    var audioslot9 = document.getElementById('slot9');
    audioslot9.pause();
    document.getElementById('butslot9play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot9play').disabled = false; 
    document.getElementById('butslot9pause').className="btn btn-lg btn-primary fs-4"; 
    document.getElementById('butslot9stop').className="btn btn-lg btn-secondary fs-4"; 
    }
    
    //stop
    function stopslot9() {
    var audioslot9 = document.getElementById('slot9');
    audioslot9.currentTime = 0;
    audioslot9.pause();
    document.getElementById('butslot9cue1').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot9cue2').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot9cue3').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot9play').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot9play').disabled = false; 
    document.getElementById('butslot9pause').className="btn btn-lg btn-secondary fs-4"; 
    document.getElementById('butslot9stop').className="btn btn-lg btn-primary fs-4"; 
    
    }
    
    // volume
    function volumeslot9(val_slot9){
    var audioslot9 = document.getElementById('slot9');
    audioslot9.volume = val_slot9 / 100;
    }
// SLOT9 END FUNCTIONS ------------------------------------------------------------------ 