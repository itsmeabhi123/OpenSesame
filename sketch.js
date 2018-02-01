
var count =0;
var timeleft=time;

function convertSeconds(s) {
 var min =floor(s/60);
 sec =s%60;
 return nf(min,2) + ':'+ nf(sec,2);

}

function setup() {
  noCanvas();
  var timer= select('#counttimer');
   timer.html(convertSeconds(timeleft - count)); 

setInterval(timeIt, 1000);
  function timeIt() {
  	if(timeleft-count == 0)
  		{
  			window.location="timeout.php";
  }
    count++;
  document.cookie="timeleft="+(timeleft-count);
   timer.html(convertSeconds(timeleft-count));
  }
  


}