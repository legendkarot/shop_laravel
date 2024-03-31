<!DOCTYPE html>
<html lang="en">

@include('backend.layout.header');

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('backend.layout.sidebar');
        @yield('content');
        @include('backend.layout.footer');
    </div>

    <!-- jQuery -->
    <script src="../web/backend/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../web/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../web/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../web/backend/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../web/backend/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../web/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../web/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../web/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../web/backend/plugins/moment/moment.min.js"></script>
    <script src="../web/backend/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../web/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../web/backend/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../web/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../web/backend/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../web/backend/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../web/backend/dist/js/pages/dashboard.js"></script>
</body>

</html>
