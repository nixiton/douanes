<div id="left">
                        <div class="media user-media bg-dark dker">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper bg-dark">
                                <a class="user-link" href="">
                                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/images/user.gif">
                                    <span class="label label-danger user-label">16</span>
                                </a>
                        
                                <div class="media-body">
                                    <h5 class="media-heading">Admin</h5>
                                    <ul class="list-unstyled user-info">
                                        <li><a href="">Admin</a></li>
                                        <li> Dernière connexion : <br>
                                            <small><i class="fa fa-calendar"></i>&nbsp;16 Mars 16:32</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                        <ul id="menu" class="bg-blue dker">
                                  <li class="nav-header"> Sous-menu</li>
                                  <li class="nav-divider"></li>
                                  <li class="">
                                    <a href="?">
                                      <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Tableau de bord</span>
                                    </a>
                                  </li>


                                  <?php 
                                  if (isset($_GET['menu'])) {
                                        include('menu/'.$_GET['menu'].'.php');  
                                  }
                                    

                                  ?>
                                  
                                  

                                </ul>
                        <!-- /#menu -->
                    </div>