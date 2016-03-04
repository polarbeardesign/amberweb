  <script type="text/javascript" language="javascript">

    $(document).ready(function() {
      $(".Login").click(function() {
          var h = $("body").height() + 'px';
          $("#grey_overlay").css({"height":h,"visibility":"visible"});
          $(".login_form").css('display','block');
        });
        $(".close, #submit").click(function() {
        $(".login_form").css('display','none');
        $("#grey_overlay").css("visibility","hidden");
      });

      $(".pet_link").click(function() {
        var h = $("body").height() + 'px';
        $("#grey_overlay").css({"height":h,"visibility":"visible"});
        $(".pet_form").css('display','block');
      });
      $(".close, #submit").click(function() {
      $(".pet_form").css('display','none');
      $("#grey_overlay").css("visibility","hidden");
      });

      $("#dog").change(function() {
        if(this.checked) {
        $(".dog-extra").css('display','block');
        }
        else {
        $(".dog-extra").css('display','none');
        };
      });

      $("#cat").change(function() {
        if(this.checked) {
        $(".cat-extra").css('display','block');
        }
        else {
        $(".cat-extra").css('display','none');
        };
      });

      $("#other_pet").change(function() {
        if(this.checked) {
        $(".other-pet-extra").css('display','block');
        }
        else {
        $(".other-pet-extra").css('display','none');
        };
      });

      $(".reserve-now").click(function() {
          var h = $("body").height() + 'px';
          $("#grey_overlay").css({"height":h,"visibility":"visible"});
          $(".reserve_now_form").css('display','block');
        });
        $(".close, #submit").click(function() {
        $(".reserve_now_form").css('display','none');
        $("#grey_overlay").css("visibility","hidden");
      });

      $(".request-info-link").click(function() {
          var h = $("body").height() + 'px';
          $("#grey_overlay").css({"height":h,"visibility":"visible"});
          $(".request_info_form").css('display','block');
        });
        $(".close, #submit").click(function() {
        $(".request_info_form").css('display','none');
        $("#grey_overlay").css("visibility","hidden");
      });

    });

  </script>