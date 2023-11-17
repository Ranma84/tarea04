        <!-- jQuery 2.2.3 -->
        <script src="<?= site_url('asset/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?= site_url('asset/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?= site_url('asset/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?= site_url('asset/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= site_url('asset/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?= site_url('asset/js/moment.js');?>"></script>
        <script src="<?= site_url('asset/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?= site_url('asset/js/global.js');?>"></script>

        <?php 
        if(isset($js))
        foreach ($js as $valor) { ?> 
            <script src="<?= base_url($valor) ?>"></script>
            <?php }   ?>   
        </body>
</html>