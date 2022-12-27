 <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    
      <script src="assets/dist/js/dashboard.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="assets/dist/js/owl.carousel.min.js"></script>

  
<script>
  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay:true,
      autoplayHoverPause:true,
      autoplayTimeout:3000,
      dots:false,
      items:8
  })
</script>

<script>
var header = document.getElementsByClassName("header_menu");
var height = 0;
  $(".nav_menus").each(function() {
    height += $(this).height();
  });

  console.log(height);
  if(height>600){  
      $(".header_menu").addClass("header_menu_scroll");
  }
  </script>

<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
    });
  }
</script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62f9e5d854f06e12d88ea7bd/1gag2jltk';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<!-- Messenger Chat plugin Code -->
    <!-- <div id="fb-root" class='d-none d-md-block' ></div> -->

<!--  Your Chat plugin code -->
    <!-- <div id="fb-customer-chat" class="fb-customerchat">
    </div>  -->

<!--     <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "1148465988562538");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script> -->

    <!-- Your SDK code -->
  <!--   <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v13.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>  -->
   

  </body>
</html>
