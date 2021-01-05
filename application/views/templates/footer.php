<!--start overlay-->
<!-- <div class="overlay toggle-menu"></div> -->
<!--end overlay-->

</div>
<!-- End container-fluid-->

</div>
<!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<!--Start footer-->
<footer class="footer">
    <div class="container">
        <div class="text-center">
        &copy;<?php echo date("Y"); ?>
        </div>
    </div>
</footer>
<!--End footer-->


<script type="text/javascript" charset="utf8" src="<?php echo base_url() ?>assets/DataTables/datatables.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#table_id").DataTable();
    });
</script>
</div>
<!--End wrapper-->
<!--foo date picker-->
<script type="text/javascript">
    var foopicker = new FooPicker({
        id: 'datepicker',
        dateFormat: 'yyyy/MM/dd'
    });
    var foopicker2 = new FooPicker({
        id: 'datepicker2',
        dateFormat: 'yyyy/MM/dd'
    });
</script>


<!--seat js-->


<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/Chart.js/Chart.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/seatJs.js"></script>

<script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="<?php echo base_url() ?>assets/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="<?php echo base_url() ?>assets/js/sidebar-menu.js"></script>
<!-- loader scripts -->
<script src="<?php echo base_url() ?>assets/js/jquery.loading-indicator.js"></script>
<!-- Custom scripts -->
<script src="<?php echo base_url() ?>assets/js/app-script.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/foopicker.js"></script>
<!-- Chart js -->




<!-- Index js -->
<script src="<?php echo base_url() ?>assets/js/index.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/datatables.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/jquery.dataTables.min.js"></script>



</body>

</html>