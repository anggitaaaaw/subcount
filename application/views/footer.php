            <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2019 <b>PT INDO SEIKI METAL UTAMA</b> v1.0. All Rights Reserved.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center"><img src="<?php echo base_url() ?>assets/ismu-logo.png" width="60" class="header-brand-img" alt="lavalite"></span>
                    </div>
                </footer>
                
            </div>
        </div>
        
        <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>assets/src/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/screenfull/dist/screenfull.js"></script>
        <script src="<?php echo base_url() ?>assets/js/datatables.js?ss"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/moment/moment.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/d3/dist/d3.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/c3/c3.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/tables.js"></script>
        <script src="<?php echo base_url() ?>assets/js/charts.js?z"></script>
        
        <!-- Combobox -->
        <script src="<?php echo base_url() ?>assets/plugins/select2/dist/js/select2.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/mohithg-switchery/dist/switchery.min.js"></script>

        <script src="<?php echo base_url() ?>assets/dist/js/theme.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datedropper/datedropper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/form-picker.js"></script>

        <!-- Datatables Javascript -->
        <script src="<?php echo base_url() ?>javascript_data/receiving_disubcount.js?zxc"></script>
        <script src="<?php echo base_url() ?>javascript_data/create_label_batch.js?s"></script>
        <script src="<?php echo base_url() ?>javascript_data/delivery_note.js"></script>
        <script src="<?php echo base_url() ?>javascript_data/vendor_delivery.js"></script>
        <script>
            $(document).ready(function() {
                $('#print_sj').click(function() {
                    $("#iframe").get(0).contentWindow.print();
                });
            });

            $(document).ready(function() {
                $('#print_label').click(function() {
                    $("#iframe2").get(0).contentWindow.print();
                });
            });
        </script>
    </body>
</html>