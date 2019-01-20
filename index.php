<html>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class='row'>
<div class="col-sm-5 clearfix">
</div>
  <div class="col-sm-2">
    <label for="txtRound">รอบ</label>
    <input type="text" class="form-control" id="txtRound" onkeypress='validate(event)' aria-describedby="emailHelp" placeholder="รอบ">
    <br>
  <button onclick='gotoRead()' class="btn btn-primary">Submit</button>
  </div>
  </div>
  <div class="col-sm-5 clearfix">
</div>

<!-- 
<input class="form-control" type="text" id='txtRound' name="txtRound" maxlength="2" onkeypress='validate(event)'>
<button onclick='gotoRead()' maxlength="2">Get Lotto</button> -->
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


