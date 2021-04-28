<!-- <div class="slidersection templete clear">
        <div id="slider">
            <a href="#"><img src="images/slideshow/01.jpg" alt="nature 1" title="This is slider one Title or Description" /></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="nature 2" title="This is slider Two Title or Description" /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="nature 3" title="This is slider three Title or Description" /></a>
            <a href="#"><img src="images/slideshow/04.jpg" alt="nature 4" title="This is slider four Title or Description" /></a>
        </div>

</div>
-->
<div style="margin-top:0px">
  <img class="mySlides" src="images/slideshow/01.jpg" style="height:min-content; width:100%; margin-top:0px;"title="This is slider one Title or Description" >
  <img class="mySlides" src="images/slideshow/02.jpg" style="height:min-content; width:100%; margin-top:0px;"title="This is slider one Title or Description" >
  <img class="mySlides" src="images/slideshow/03.jpg" style="height:min-content; width:100%;margin-top:0px;"title="This is slider one Title or Description">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>