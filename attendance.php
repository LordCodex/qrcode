<!DOCTYPE html>
<html>
<body>


<button onclick="getLocation()">Try It</button>


<input id="inputel" type="text" value=""> 

<script>

var inputEl = document.getElementById("inputel");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
//   x.innerHTML = "Latitude: " + position.coords.latitude + 
//   "<br>Longitude: " + position.coords.longitude;
// //   alert(position.coords.latitude)
inputEl.value = "Latitude: " + position.coords.latitude + 
  " Longitude: " + position.coords.longitude;
}
</script>




<script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               document.getElementById('text').value=c;
               document.forms[0].submit();
           });

        </script>
</body>
</html>

