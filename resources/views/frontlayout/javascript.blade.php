<!--Import jQuery before materialize.js-->
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<!-- Roles JS -->
<script type="text/javascript">
  $(function(){

    $('#roles-slider').flickity({
      autoPlay: 4000,
      pauseAutoPlayOnHover: false,
      cellAlign: 'left',
      contain: true,
      prevNextButtons: true
    });

    $('#roles-descriptions-slider').flickity({
      contain: true,
      pageDots: false,
      arrowShape: {
        x0: 10,
        x1: 40, y1: 30,
        x2: 50, y2: 20,
        x3: 25
      },
      on: {
        ready: function() {
          var id = this.selectedCell.element.dataset.id;
          $("#roles-descriptions-text #" + id).show();
        },
        staticClick: function(event, pointer, cellElement, cellIndex) {
          if ( typeof cellIndex == 'number' ) {
            $('#roles-descriptions-slider').flickity( 'select', cellIndex );
            var id = this.selectedCell.element.dataset.id;

            if ($("#roles-descriptions-text .role-desc").is(':visible')) {
              $("#roles-descriptions-text .role-desc").hide();
              $("#roles-descriptions-text #" + id).show();
            } else {
              $("#roles-descriptions-text .role-desc").hide();
              $("#roles-descriptions-text #" + id).slideDown();
            }
          }
        },
        change: function( index ) {
          var id = $($("#roles-descriptions .role-name")[index]).data("id");

          if ($("#roles-descriptions-text .role-desc").is(':visible')) {
            $("#roles-descriptions-text .role-desc").hide();
            $("#roles-descriptions-text #" + id).show();
          } else {
            $("#roles-descriptions-text .role-desc").hide();
            $("#roles-descriptions-text #" + id).slideDown();
          }
        }
      }
    });

    $("#extend-description").on("click", function(){
      $("#extend-description-btn").hide();
      $("#roles #roles-descriptions #extended-overlay").hide();
      $("#roles #roles-descriptions #extended-description").css("height","auto");
      $("#roles #roles-descriptions #extended-description").css("overflow-y","visible");
      $("#roles-descriptions").removeClass("extra-padding-bottom")
    })
  })
</script>