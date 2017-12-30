

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>TEDI</b> Admin System | Version 1.0
        </div>
        <strong>Copyright &copy; 2017-2018 <a href="<?php echo base_url(); ?>">TEDI</a>.</strong> All rights reserved.
    </footer>
    
    <!-- jQuery UI 1.11.2 -->
    <!-- <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>
    <script type="text/javascript">
        /** add active class and stay opened when selected */
		var url = window.location;

		// for sidebar menu entirely but not cover treeview
		$('ul.sidebar-menu a').filter(function() {
			 return this.href == url;
		}).parent().addClass('active');

		// for treeview
		$('ul.treeview-menu a').filter(function() {
			 return this.href == url;
		}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
    </script>
  </body>
</html>