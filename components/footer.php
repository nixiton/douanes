
        <footer class="Footer bg-dark dker">
                <p>2017 &copy; TEAMTic Madagascar </p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
                <?php include('pop_ups/popup_help.php') ?>
            
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->    
    
        <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>

                    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <!--script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script-->

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>

            <script src="assets/lib/jquery_ui/js/jquery-ui.js"></script>


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <!--script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script-->

            <script src="assets/js/style-switcher.js"></script>


            <script type="text/javascript">
                (function($) {
                    $(document).ready(function() {
                        $('.list-inline li > a').click(function() {
                            var activeForm = $(this).attr('href') + ' > form';
                            //console.log(activeForm);
                            $(activeForm).addClass('animated fadeIn');
                            //set timer to 1 seconds, after that, unload the animate animation
                            setTimeout(function() {
                                $(activeForm).removeClass('animated fadeIn');
                            }, 1000);
                        });
                    });
                })(jQuery);
            </script>

            <script>



                $( function() {



                    $( "#dialog" ).dialog({
                    height: 500,
                    width:500,
                    autoOpen: false,


                    });
                 
                    $( "#add_type_mat" ).on( "click", function() {
                      $( "#dialog" ).dialog( "open" );
                    });

                    $( ".close-dialog" ).on( "click", function() {
                      $( "#dialog" ).dialog( "close" );
                    });



                    
                    var myIcon   =  '<i class="icon icon-flag-checkered icon-large pull-left"></i>'; 

                    $( "#dialog_list" ).dialog({
                    height: 200,
                    width:500,
                    autoOpen: false,


                    open : function(){
                        $(this)
                        .parent()
                        .children(".ui-dialog-titlebar")
                        .prepend(myIcon);
                    },
                      
                    });

                 
                    $( ".add_list" ).on( "click", function() {
                      $( "#dialog_list" ).dialog( "open" );
                    });

                    $( ".button-edit" ).on( "click", function() {
                      $( "#dialog_list" ).dialog( "open" );
                    });

                    $( ".close-dialog" ).on( "click", function() {
                      $( "#dialog_list" ).dialog( "close" );
                    });

                    



                    $( "#dialog_user" ).dialog({
                    height: 500,
                    width:500,
                      autoOpen: false,
                      
                    });
                 
                    $( ".add_user" ).on( "click", function() {
                      $( "#dialog_user" ).dialog( "open" );
                    });

                    $( ".button-edit" ).on( "click", function() {
                      $( "#dialog_user" ).dialog( "open" );
                    });

                    $( ".close-dialog" ).on( "click", function() {
                      $( "#dialog_user" ).dialog( "close" );
                    });


                  } );

              </script>

</body>

</html>