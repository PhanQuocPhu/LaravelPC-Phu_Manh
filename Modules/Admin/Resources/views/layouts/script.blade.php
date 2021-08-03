{{-- Bootstrap file Input --}}
<!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
    wish to resize images before upload. This must be loaded before fileinput.min.js -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.2/js/plugins/piexif.min.js"
type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
        This must be loaded before fileinput.min.js -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.2/js/plugins/sortable.min.js"
type="text/javascript"></script>
<!-- the main fileinput plugin script JS file -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.2/js/fileinput.min.js"></script>
<!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.2/js/locales/LANG.js"></script>


{{-- Ck-editor --}}
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

{{-- Jquery confirm --}}
<script src="  {{ asset('js/jquery-confirm-v3.3.4/dist/jquery-confirm.min.js') }}"></script>


{{-- Line Chart --}}
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
{{-- Pie Chart --}}
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<!-- Bootstrap core JavaScript-->
<script src=" {{ asset('theme_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src=" {{ asset('theme_admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src=" {{ asset('theme_admin/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src=" {{ asset('theme_admin/vendor/chart.js/Chart.min.js') }}"></script>
{{-- Tabble --}}
<script src="{{ asset('theme_admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('theme_admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>


{{-- Table --}}
<script src=" {{ asset('theme_admin/js/demo/datatables-demo.js') }}"></script>
