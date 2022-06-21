  <!-- Thẻ Chứa Slideshow -->
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="imgs/1.png" style="width:100%">
      <!-- <div class="text">Nội dung caption của slide đầu tiên!</div> -->
    </div>
   
    <div class="mySlides fade">
      <img src="imgs/3.png" style="width:100%">
      <!-- <div class="text">Nội dung caption của slide thứ 2!</div> -->
    </div>
   
    <div class="mySlides fade">
      <img src="imgs/2.png" style="width:100%">
      <!-- <div class="text">Nội dung caption của slide thứ 3!</div> -->
    </div>
    <div class="mySlides fade">
        <img src="imgs/Back.png" style="width:100%">
        <!-- <div class="text">Nội dung caption của slide thứ 4!</div> -->
      </div>
  </div>
  <br>
   
 
  </div>
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(0)"></span> 
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 

  </div>
  <script>
    //khai báo biến slideIndex đại diện cho slide hiện tại
    var slideIndex;
    // KHai bào hàm hiển thị slide
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
           slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
   
        slides[slideIndex].style.display = "block";  
        dots[slideIndex].className += " active";
        //chuyển đến slide tiếp theo
        slideIndex++;
        //nếu đang ở slide cuối cùng thì chuyển về slide đầu
        if (slideIndex > slides.length - 1) {
          slideIndex = 0
        }    
        //tự động chuyển đổi slide sau 1s
        setTimeout(showSlides, 1500);
    }
    //mặc định hiển thị slide đầu tiên 
    showSlides(slideIndex = 0);
   
   
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
  </script> 


 