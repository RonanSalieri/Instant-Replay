function audioplay() {
var audio = document.getElementById('audio');
var btnplay = document.getElementById('btnplay');
var btnpause = document.getElementById('btnpause');
var btncue1play = document.getElementById('btncue1play');
var btncue2play = document.getElementById('btncue2play');
var btncue3play = document.getElementById('btncue3play');
var audiocue1 = document.getElementById('audiocue1');	
var audiocue2 = document.getElementById('audiocue2');	
var audiocue3 = document.getElementById('audiocue3');	
audio.play();
audiocue1.pause();
audiocue2.pause();
audiocue3.pause();
btnplay.className="btn btn-lg btn-danger fs-1";
btnpause.className="btn btn-lg btn-primary fs-1";
btncue1play.className="btn btn-secondary";
btncue2play.className="btn btn-secondary";
btncue3play.className="btn btn-secondary";
}
function audiopause() {
var btnplay = document.getElementById('btnplay');
var btnpause = document.getElementById('btnpause');
var audio = document.getElementById('audio');
audio.pause();
btnplay.className="btn btn-lg btn-secondary fs-1";
btnpause.className="btn btn-lg btn-danger fs-1";
}
function plus5() {
var audio = document.getElementById('audio');
var btnplay = document.getElementById('btnplay');
var btnpause = document.getElementById('btnpause');	
audio.currentTime = audio.currentTime + 5;
audio.pause();	

btnplay.className="btn btn-lg btn-secondary fs-1";
btnpause.className="btn btn-lg btn-danger fs-1";
}
function moins5() {
var audio = document.getElementById('audio');
var btnplay = document.getElementById('btnplay');
var btnpause = document.getElementById('btnpause');	
audio.currentTime = audio.currentTime - 5;
audio.pause();
btnplay.className="btn btn-lg btn-secondary fs-1";
btnpause.className="btn btn-lg btn-danger fs-1";
}
function plus1() {
var audio = document.getElementById('audio');
var btnplay = document.getElementById('btnplay');
var btnpause = document.getElementById('btnpause');	
audio.currentTime = audio.currentTime + 1;
audio.pause();	

btnplay.className="btn btn-lg btn-secondary fs-1";
btnpause.className="btn btn-lg btn-danger fs-1";
}
function moins1() {
var audio = document.getElementById('audio');
var btnplay = document.getElementById('btnplay');
var btnpause = document.getElementById('btnpause');	
audio.currentTime = audio.currentTime - 1;
audio.pause();
btnplay.className="btn btn-lg btn-secondary fs-1";
btnpause.className="btn btn-lg btn-danger fs-1";
}
function plus05() {
var audio = document.getElementById('audio');
var btnplay = document.getElementById('btnplay');
var btnpause = document.getElementById('btnpause');	
audio.currentTime = audio.currentTime + 0.5;
audio.pause();	

btnplay.className="btn btn-lg btn-secondary fs-1";
btnpause.className="btn btn-lg btn-danger fs-1";
}
function moins05() {
var audio = document.getElementById('audio');
var btnplay = document.getElementById('btnplay');
var btnpause = document.getElementById('btnpause');	
audio.currentTime = audio.currentTime - 0.5;
audio.pause();
btnplay.className="btn btn-lg btn-secondary fs-1";
btnpause.className="btn btn-lg btn-danger fs-1";
}
function plus01() {
var audio = document.getElementById('audio');
var btnplay = document.getElementById('btnplay');
var btnpause = document.getElementById('btnpause');	
audio.currentTime = audio.currentTime + 0.1;
audio.pause();	

btnplay.className="btn btn-lg btn-secondary fs-1";
btnpause.className="btn btn-lg btn-danger fs-1";
}
function moins01() {
var audio = document.getElementById('audio');
var btnplay = document.getElementById('btnplay');
var btnpause = document.getElementById('btnpause');	
audio.currentTime = audio.currentTime - 0.1;
audio.pause();
btnplay.className="btn btn-lg btn-secondary fs-1";
btnpause.className="btn btn-lg btn-danger fs-1";
}
function capturecue1(){
var tempscue1 = document.getElementById('audio').innerHTML = audio.currentTime;
document.getElementById('cue1').setAttribute('value', tempscue1);
}
function capturecue2(){
var tempscue2 = document.getElementById('audio').innerHTML = audio.currentTime;
document.getElementById('cue2').setAttribute('value', tempscue2);
}
function capturecue3(){
var tempscue3 = document.getElementById('audio').innerHTML = audio.currentTime;
document.getElementById('cue3').setAttribute('value', tempscue3);
}
function playcue1() {
var tempscue1 = document.getElementById('cue1').value;
var audiocue1 = document.getElementById('audiocue1');
var audiocue2 = document.getElementById('audiocue2');
var audiocue3 = document.getElementById('audiocue3');
var audio = document.getElementById('audio');
var btnpause = document.getElementById('btnpause');	
var btncue1play = document.getElementById('btncue1play');
var btncue2play = document.getElementById('btncue2play');
var btncue3play = document.getElementById('btncue3play');
var btnplay = document.getElementById('btnplay');

audiocue1.currentTime = tempscue1;
audio.pause();
audiocue1.play();
audiocue2.pause();
audiocue3.pause();
btnpause.className="btn btn-lg btn-danger fs-1";
btncue1play.className="btn btn-danger";
btncue2play.className="btn btn-secondary";
btncue3play.className="btn btn-secondary";
btnplay.className="btn btn-secondary fs-1";
}
function stopcue1() {
var audiocue1 = document.getElementById('audiocue1');
var tempscue1 = document.getElementById('cue1').value;
var btnplay = document.getElementById('btnplay');
var btncue1play = document.getElementById('btncue1play');
audiocue1.pause();	
audiocue1.currentime = tempscue1;
btncue1play.className="btn btn-secondary";
btnplay.className="btn btn-secondary fs-1";
}
function resetcue1() {
var audiocue1 = document.getElementById('audiocue1');
var tempscue1 = document.getElementById('cue1')
audiocue1.currentime = 0;
tempscue1.setAttribute('value', 0);
tempscue1.setAttribute('placeholder', 0);
}
function playcue2() {
var tempscue2 = document.getElementById('cue2').value;
var audiocue1 = document.getElementById('audiocue1');
var audiocue2 = document.getElementById('audiocue2');
var audiocue3 = document.getElementById('audiocue3');
var audio = document.getElementById('audio');
var btnpause = document.getElementById('btnpause');	
var btncue1play = document.getElementById('btncue1play');
var btncue2play = document.getElementById('btncue2play');
var btncue3play = document.getElementById('btncue3play');
var btnplay = document.getElementById('btnplay');

audiocue2.currentTime = tempscue2;
audio.pause();
audiocue1.pause();
audiocue2.play();
audiocue3.pause();
btnpause.className="btn btn-lg btn-danger fs-1";
btncue1play.className="btn btn-secondary";
btncue2play.className="btn btn-danger";
btncue3play.className="btn btn-secondary";
btnplay.className="btn btn-secondary fs-1";
}
function stopcue2() {
var audiocue2 = document.getElementById('audiocue2');
var tempscue2 = document.getElementById('cue2').value;
var btnplay = document.getElementById('btnplay');
var btncue2play = document.getElementById('btncue2play');
audiocue2.pause();	
audiocue2.currentime = tempscue2;
btncue2play.className="btn btn-secondary";
btnplay.className="btn btn-secondary fs-1";
}
function resetcue2() {
var audiocue2 = document.getElementById('audiocue2');
var tempscue2 = document.getElementById('cue2')
audiocue2.currentime = 0;
tempscue2.setAttribute('value', 0);
tempscue2.setAttribute('placeholder', 0);
}
function playcue3() {
var tempscue3 = document.getElementById('cue3').value;
var audiocue1 = document.getElementById('audiocue1');
var audiocue2 = document.getElementById('audiocue2');
var audiocue3 = document.getElementById('audiocue3');
var audio = document.getElementById('audio');
var btnpause = document.getElementById('btnpause');	
var btncue1play = document.getElementById('btncue1play');
var btncue2play = document.getElementById('btncue2play');
var btncue3play = document.getElementById('btncue3play');
var btnplay = document.getElementById('btnplay');

audiocue3.currentTime = tempscue3;
audio.pause();
audiocue1.pause();
audiocue2.pause();
audiocue3.play();
btnpause.className="btn btn-lg btn-danger fs-1";
btncue1play.className="btn btn-secondary";
btncue2play.className="btn btn-secondary";
btncue3play.className="btn btn-danger";
btnplay.className="btn btn-secondary fs-1";
}
function stopcue3() {
var audiocue3 = document.getElementById('audiocue3');
var tempscue3 = document.getElementById('cue3').value;
var btnplay = document.getElementById('btnplay');
var btncue3play = document.getElementById('btncue3play');
audiocue3.pause();	
audiocue3.currentime = tempscue3;
btncue3play.className="btn btn-secondary";
btnplay.className="btn btn-secondary fs-1";
}
function resetcue3() {
var audiocue3 = document.getElementById('audiocue3');
var tempscue3 = document.getElementById('cue3')
audiocue3.currentime = 0;
tempscue3.setAttribute('value', 0);
tempscue3.setAttribute('placeholder', 0);
}