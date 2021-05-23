@section('script')
    
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#output_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#input_img").change(function() {
        readURL(this);
    });

</script>



{{-- Ck-editor --}}
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
{{-- Chart --}}
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<!-- Bootstrap core JavaScript-->
<script src=" {{ asset('theme_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src=" {{ asset('theme_admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src=" {{ asset('theme_admin/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src=" {{ asset('theme_admin/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src=" {{ asset('theme_admin/js/demo/chart-area-demo.js') }}"></script>
<script src=" {{ asset('theme_admin/js/demo/chart-pie-demo.js') }}"></script>
@endsection