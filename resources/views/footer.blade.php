<!-- jquery
        ============================================ -->
    <script src="{{ url('public/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{ url('public/assets/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{ url('public/assets/js/wow.min.js')}}"></script>
    <!-- Charts JS
        ============================================ -->
    <!-- <script src="{{ url('public/assets/js/charts/Chart.js')}}"></script>
    <script src="{{ url('public/assets/js/charts/bar-chart.js')}}"></script> -->
    <!-- slick JS
        ============================================ -->
    <script src="{{ url('public/assets/js/slick.js')}}"></script>

    <!-- price-slider JS
        ============================================ -->
    <script src="{{ url('public/assets/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{ url('public/assets/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{ url('public/assets/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{ url('public/assets/js/jquery.sticky.js')}}"></script>
     <!-- dropzone JS
        ============================================ -->
    <script src="{{ url('public/assets/js/dropzone/dropzone.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{ url('public/assets/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{ url('public/assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ url('public/assets/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- data table JS
        ============================================ -->
    <script src="{{ url('public/assets/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{ url('public/assets/js/data-table/tableExport.js')}}"></script>
    <script src="{{ url('public/assets/js/data-table/data-table-active.js')}}"></script>
    <script src="{{ url('public/assets/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{ url('public/assets/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{ url('public/assets/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{ url('public/assets/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{ url('public/assets/js/data-table/bootstrap-table-export.js')}}"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{ url('public/assets/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{ url('public/assets/js/metisMenu/metisMenu-active.js')}}"></script>
    <script src="https://bestwebcreator.com/shopwise/demo/assets/js/jquery.dd.min.js"></script>
    <!-- colorpicker JS
        ============================================ -->
    <script src="{{ url('public/assets/js/colorpicker/jquery.spectrum.min.js')}}"></script>
    <script src="{{ url('public/assets/js/colorpicker/color-picker-active.js')}}"></script>
    <!-- cropper JS
        ============================================ -->
    <script src="{{ url('public/assets/js/cropper/cropper.min.js')}}"></script>
    <script src="{{ url('public/assets/js/cropper/cropper-actice.js')}}"></script>
    <!-- main JS -->
    <script src="{{ url('public/assets/js/main.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_KEY')}}&libraries=places&callback=initialize" defer></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.12/js/jquery.Jcrop.min.js"></script>-->
    <script src="{{ url('public/assets/js/jquery.Jcrop.min.js')}}"></script>
    <script src="{{ url('public/assets/js/custom.js')}}"></script>
    <script>
    /*==============================================================
    15. DROPDOWN JS
    ==============================================================*/
	if ($(".custome_select").length > 0){
		$(document).on('ready', function() {
			$(".custome_select").msDropdown();
		});
	}
  </script>
          <script>
        	$('.slide-6').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
                breakpoint: 1367,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true
                }
            },
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    margin:0,
                    autoplay: true,
                    autoplaySpeed: 2000
                }
            }

        ]
    });
        </script>
</body>

</html>