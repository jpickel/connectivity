<!-- Sticky Ad Placement -->
<script>
    $(window).scroll(function() {
      if ($(document).scrollTop() > 415) {
        $('ad').addClass('sticky');
      } else {
        $('ad').removeClass('sticky');
      }
    });
</script>

<!-- Email Signup Pop-up -->
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>