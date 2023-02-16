  <!--========== SCROLL UP ==========-->
  <a href="#home" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/card.js"></script>
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
       <script>
         $(document).ready(function() {
           $('#datatableid').DataTable();
        } );
       </script>

       <script type="text/javascript">
        function numberonly(input)
        {
          var num = /[^0-9]/gi;
          input.value = input.value.replace(num, "");
        }
         
       </script>

<script src="assets/js/sweetalert.min.js"></script>
  <?php
  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
  {
      ?>

        <script>
            swal({
            title: "<?php echo $_SESSION['status']; ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status_code']; ?>",
            button:"Awww yyisss"
            });
        </script>
    <?php

    unset($_SESSION['status']);
  }
  ?>