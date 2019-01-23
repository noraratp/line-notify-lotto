<html>
<form>
    <div class="wrapper"></div>
</form>

</html>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script>
function makeHttpObject() {
    try {
        return new XMLHttpRequest();
    } catch (error) {}
    try {
        return new ActiveXObject("Msxml2.XMLHTTP");
    } catch (error) {}
    try {
        return new ActiveXObject("Microsoft.XMLHTTP");
    } catch (error) {}

    throw new Error("Could not create HTTP request object.");
}
$(document).ready(function() {
    var request = makeHttpObject();
    request.open("GET", "https://www.jetsadabet.com/login", true);
    request.send(null);
    request.onreadystatechange = function() {
        if (request.readyState == 4)
            console.log(request.responseText);
        $(".wrapper").html(request.responseText);
        //$("#references").append(html);          
    };
    setTimeout(() => {
        const urlParams = new URLSearchParams(window.location.search);
        const myParam = urlParams.get('round');
        if (myParam != undefined) {
            var round = "จับยี่กี รอบที่ " + myParam;
            var three = $("th:contains(" + round + ")").next()[0].innerHTML;
            var two = $("th:contains(" + round + ")").next().next()[0].innerHTML;
            var array = [];
            array.push({
                id: 1,
                value: round
            });
            array.push({
                id: 2,
                value: three.trim()
            });
            array.push({
                id: 3,
                value: two.trim()
            });
            var message = array;
            // var postForm = { //Fetch form data
            // 'value' : message //Store name fields value
        };
        //var jsonString = JSON.stringify(message);
        //console.log(message)
        // if (three.trim().length == 3) {
        //     //console.log(JSON.stringify(message));
        //     //window.location= "send.php?message="+message;
        //     $.ajax({ //Process the form using $.ajax()
        //         type: 'POST', //Method type
        //         contentType: "application/json; charset=utf-8",
        //         url: 'line.php', //Your form processing file URL
        //         cache: false,
        //         data: {
        //             data: message
        //         }, //JSON.stringify(postForm),
        //         dataType: 'json',
        //         success: function(data) {
        //             console.log(data)
        //         }
        //     });
        // }
    }, 10000);
});
</script>