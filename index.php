<html>
<input type="text" id='txtRound' name="txtRound" maxlength="2" onkeypress='validate(event)'>
<button onclick='gotoRead()' maxlength="2">Get Lotto</button>
<br>
<br>
<label id="lbText" style='color:green;'></label>
<script>
// setTimeout(function(){
//   //window.location.reload(1);
//   window.location= "read.php";
// }, 20000);
window.onload = onLoad();
function onLoad()
{
const urlParams = new URLSearchParams(window.location.search);
const retRound = urlParams.get('round');
const retRes = urlParams.get('res');
console.log(retRes);
document.getElementById("lbText").innerText = "ทดสอบ ส่งหวย"+retRound + " ไปยัง Line กลุ่ม";
}

function gotoRead()
{
  var myElement = document.getElementById("txtRound");
  console.log(myElement.value)
  window.location= "read.php?round="+myElement.value;
}
function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
</html>


