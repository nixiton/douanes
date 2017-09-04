
<?php include('components/header.php') ?>



        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    
                    <?php include('components/navbar-top.php') ?>

                    <!-- /.navbar -->

                    <?php include('components/top.php') ?>

                    <!-- /.head -->
                </div>
                <!-- /#top -->

                    <?php include('components/left.php');

                    if (isset($_GET['content'])) {
                        $file=''.$_GET['content'].'.php';
                    }
                    else{
                        $file='content/admin.php';
                    }

                    ?>
                    
                    <!-- /#left -->

                <div id="content">
                     
                            <div class="inner bg-light lter">
                        
                            <?php include($file); ?>


                            </div>
                                        <!-- /.inner -->
                         
                </div>

                <!-- /#content -->

            </div>
            <!-- /#wrap -->
            

            


<?php include('components/footer.php') ?>
