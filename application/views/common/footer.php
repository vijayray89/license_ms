
    <!-- Plugin js for this page -->
    <script src="<?= BASE_URL."CHF/assets/vendors/jquery-bar-rating/jquery.barrating.min.js" ?>"></script>
    <script src="<?= BASE_URL."CHF/assets/vendors/chart.js/Chart.min.js" ?>"></script>
    <script src="<?= BASE_URL."CHF/assets/vendors/flot/jquery.flot.js" ?>"></script>
    <script src="<?= BASE_URL."CHF/assets/vendors/flot/jquery.flot.resize.js" ?>"></script>
    <script src="<?= BASE_URL."CHF/assets/vendors/flot/jquery.flot.categories.js" ?>"></script>
    <script src="<?= BASE_URL."CHF/assets/vendors/flot/jquery.flot.fillbetween.js" ?> "></script>
    <script src="<?= BASE_URL."CHF/assets/vendors/flot/jquery.flot.stack.js" ?> "></script>
    <script src="<?= BASE_URL."CHF/assets/js/jquery.cookie.js" ?>"></script>
    <!-- End plugin js for this page -->
    
    <!-- Custom js for this page -->
    <script src="<?= BASE_URL."CHF/assets/js/dashboard.js" ?>"></script>
    <!-- End custom js for this page -->

     <!-- plugins:js -->
     <script src="<?= BASE_URL."CHF/assets/vendors/js/vendor.bundle.base.js" ?>"></script>
    <!-- endinject -->

    <!-- inject:js -->
    <script src="<?= BASE_URL."CHF/assets/js/off-canvas.js" ?>"></script>
    <script src="<?= BASE_URL."CHF/assets/js/hoverable-collapse.js"?>"></script>
    <script src="<?= BASE_URL."CHF/assets/js/misc.js" ?>"></script>
    <script src="<?= BASE_URL."CHF/assets/js/settings.js" ?>"></script>
    <script src="<?= BASE_URL."CHF/assets/js/todolist.js" ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= BASE_URL."CHF/assets/js/chart.js"?>"></script>
    <!-- End custom js for this page -->
    <script>
      $('#search').on('change',function(){
          $('#search').submit();
      });
    </Script>
  </body>
</html>