<form class="form-horizontal">

                <div class="form-group">
                    <label class="control-label col-lg-3">Type du matériel</label>

                    <div class="col-lg-4">
                        <select class="form-control">
                            <option>Matériel Informatique</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <a href="javascript:;" id="add_type_mat" class="btn btn-default"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>

                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-3">Nomenclature</label>

                    <div class="col-lg-4">
                        <input type="text" id="text1" placeholder="" class="form-control">
                    </div>   

                    <div class="col-lg-1">
                         <a href="javascript:;" class="btn btn-default add_list"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>
                    
                </div>

                

                <div class="form-group">
                    <label class="control-label col-lg-3">Etat du matériel</label>

                    <div class="col-lg-4">
                        <select class="form-control">
                            <option>Bon Etat</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <a href="javascript:;" class="btn btn-default add_list"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>

                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Marque</label>

                    <div class="col-lg-4">
                        <select class="form-control">
                            <option>Asus</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <a href="javascript:;" class="btn btn-default add_list"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>

                </div>

                <div class="form-group">
                    <label class="control-label col-lg-3">Liste détenteurs</label>

                    <div class="col-lg-4">
                        <select multiple="multiple" size="5" class="form-control">
                            <option selected>1 ANDRY Ny SI Tana</option>
                            <option >1 ANDRY Ny SI Tana</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <a href="javascript:;" class="btn btn-default add_user"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>

                </div>


                <div class="form-group">
                    <label class="control-label col-lg-3">Utilisateurs</label>

                    <div class="col-lg-4">
                        <select multiple="multiple" size="5" class="form-control">
                            <option selected>Dépositaires</option>
                            <option >GAC</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <a href="javascript:;" class="btn btn-default add_list"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>

                </div>


                <div class="form-group">
                    <label for="text1" class="control-label col-lg-3">Bureau/porte/adresse</label>

                   <div class="col-lg-4">
                        <select class="form-control">
                            <option >67/11/Tana</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <a href="javascript:;" class="btn btn-default add_list"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>
                    
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-3">Mode d'aquisition</label>

                   <div class="col-lg-4">
                        <select class="form-control">
                            <option >Achat</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <a href="javascript:;" class="btn btn-default add_list"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>
                    
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-3">Motif de décharge</label>

                   <div class="col-lg-4">
                        <select class="form-control">
                            <option >affectation</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <a href="javascript:;" class="btn btn-default add_list"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>
                    
                </div>


                <div class="form-group">
                    <label for="text1" class="control-label col-lg-3 ">Financement</label>

                   <div class="col-lg-4">
                        <select class="form-control">
                            <option >Budgetaire</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <a href="javascript:;" class="btn btn-default add_list"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>
                    
                </div>


                <div class="form-group">
                    <label for="text1" class="control-label col-lg-3">Fournisseur</label>

                   <div class="col-lg-4">
                        <select class="form-control">
                            <option >Raison sociale, NIF, Activités principales</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <a href="javascript:;" class="btn btn-default"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>
                    
                </div >

                <div class="form-group">
                      <label for="text1" class="control-label col-lg-4"></label>
                    
                    <div class="col-lg-4">
                        <input class="btn btn-lg btn-primary btn-block"  type="submit" value="Créer"/>
                    </div>

                    <div class="col-lg-4"></div>
                    
                </div>


                <!-- /.form-group -->
            </form>


<?php include('pop_ups/popup_list.php') ?>

<?php include('pop_ups/popup_user.php') ?>

<?php include('pop_ups/popup_type_mat.php') ?>