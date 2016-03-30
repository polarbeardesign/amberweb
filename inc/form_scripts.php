  <script type="text/javascript" language="javascript">

function myFunction() {
    document.getElementById("userDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.droplink')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


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



    $(".form_datetime").datepicker({format: 'yyyy-mm-dd'});


    });

  </script>