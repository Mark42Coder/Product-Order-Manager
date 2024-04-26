
<!-- item model -->
<!-- <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="itemModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="itemModalBody" class="modal-body"></div>
        </div>
    </div>
</div>
 -->



<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- Delete Member Modal -->
<div class="modal fade" id="deleteMemberModal" tabindex="-1" role="dialog" aria-labelledby="deleteMemberModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteMemberModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are sure about deleting the record.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Dismiss</button>
                <button class="btn btn-primary" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>




<!-- view order Modal -->
<div class="modal fade" id="orderviewModal" tabindex="-1" role="dialog" aria-labelledby="orderviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderviewModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="orderviewmodalBody" class="modal-body">

             <form >


<div class="row">
    <div class="col-12 col-md-7 col-xl-8 offset-0">
        <ul class="list-group">
            <li class="list-group-item"
                style="height: 64px;"><span class="d-flex justify-content-start" style="background-color: #7cdbe8;margin: 0px;height: 22px;">SALES EXECUTIVE</span><span id="view_order_rp" style="height: 0px;background-color: rgba(124,219,232,0);">NILL</span></li>
            <li class="list-group-item"
                style="height: 64px;"><span class="d-flex justify-content-start" style="background-color: #7cdbe8;margin: 0px;height: 22px;">ORDER NO</span><span id="view_order_id" style="height: 0px;background-color: rgba(124,219,232,0);">NILL</span></li>
            <li class="list-group-item"
                style="height: 64px;"><span class="d-flex justify-content-start" style="background-color: #7cdbe8;margin: 0px;height: 22px;">ORDER DATE</span><span id="view_order_date" style="height: 0px;background-color: rgba(124,219,232,0);">NILL</span></li>
                <li class="list-group-item"
                style="height: 64px;"><span class="d-flex justify-content-start" style="background-color: #7cdbe8;margin: 0px;height: 22px;">AREA NAME</span><span id="order_area" style="height: 0px;background-color: rgba(124,219,232,0);">NILL</span></li>
            <li class="list-group-item" style="height: 64px;"><span class="d-flex justify-content-start" style="background-color: #7cdbe8;margin: 0px;height: 22px;">CUSTOMER NAME</span><span id="order_name" style="height: 0px;background-color: rgba(124,219,232,0);">NILL</span></li>
            
            
        </ul>
    </div>
</div>
                       
                       
                       
                            <table id='view_or' class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 46px;">S.No</th>
                                        <th>Items Name</th>
                                        <th class="text-right" style="width: 102px;">Items Qty</th>
                                        <th class="text-right" style="width: 214px;">Items Price</th>
                                    </tr>
                                </thead>
                                <tbody id="view_order_items">
                                    <!-- <tr style="font-size: 12px;">
                                        <td class="text-center">1.</td>
                                        <td>Cell 2</td>
                                        <td class="text-right" style="text-align: right;margin: 5px;width: 101px;">Cell 2</td>
                                        <td class="text-right" style="text-align: right;margin: 5px;width: 101px;">Cell 2</td>
                                    </tr>
                                    <tr></tr> -->
                                </tbody>
                            </table>
                      <li class="list-group-item" style="height: auto;"><span class="d-flex justify-content-start" style="background-color: #7cdbe8;margin: 0px;height: auto;">NOTE</span><span id="note" style="height: 0px;background-color: rgba(124,219,232,0);"><p id="view_note1" ></p><p id="view_note2" ></p><p id="view_note3" ></p><p id="view_note4" ></p><p id="view_note5" ></p><p id="view_note6" ></p><p id="view_note7" ></p></span></li>
                       
                       <br>
                       <br>
                       
                        </form>


            </div>
        </div>
    </div>
</div>

<!-- Edit Member Modal -->
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="memberModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="modalBody" class="modal-body"></div>
        </div>
    </div>
</div>

<!-- Edit order Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>

            <div class="form-row text-justify d-md-flex justify-content-md-start justify-content-lg-center" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                <div class="col-12 col-md-12 col-lg-9 offset-md-0 offset-lg-0"><label style="font-size: 24px;color: rgb(19,20,21);font-family: 'Archivo Black', sans-serif;">CUSTOMER NAME</label><select id='selectname' class="custom-select custom-select-lg" style="font-family: 'Archivo Black', sans-serif;"> <option value selected></option></select></div>
            </div>

            <div class="col-lg-6 col-xl-5 offset-xl-0">
                             <label id='repid' style="margin: 10px;"></label>
                             <label  style="margin: 10px;"></label>
                             <label id='order_idfroupdate' style="margin: 10px;"></label><br>
                            <label id='order_custfroupdate' style="margin: 10px; font-family: 'Archivo Black', sans-serif;opacity: 0.79;">CustomerUU Name  </label>
                            <label id='cust_name_updateorder' style="margin: 10px;"></label>

                            <!-- <select id='selectname'class="border rounded shadow" style="width: 208px;height: 48px; ">
                                <option value selected></option>
                               
                            </select> -->
            </div>

            <div id="ordermodalBody" class="modal-body">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">With textarea</span>
                      </div>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
            </div>
            <div id="orderpriviwemodalBody" class="modal-body"></div>


        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Dismiss</button>
            <!--<button id="btnUpdateorder" class="btn btn-primary" style="display: none;" type="button" data-dismiss="modal" onclick="app.update_order(this);">Update</button>-->
            <button id="btnAddorder" class="btn btn-primary" style="display: none;" type="button" onclick="app.addorder(this);">Order</button>
            <button id="backPreview" class="btn btn-primary" style="display: none;" type="button" onclick="app.back_preview(this);">Back</button>
            <!--<button id="btnOrderPreview" class="btn btn-primary" style="display: none;" type="button" onclick="app.order_preview (this);">preview</button>-->

            <button id="closeModalorder" type="button" style="display: none;" data-dismiss="modal"></button>
            
            
        <!--  flooat-->

                <a onclick="app.order_preview (this);" style="display: none;" id="btnOrderPreview"  class="float">
                <i class="fa fa-plus my-float"></i>
                </a>
                <style>
                *{padding:0;margin:0;}
                
                body{
                	font-family:Verdana, Geneva, sans-serif;
                	font-size:18px;
                	background-color:#CCC;
                }
                
                .float{
                	position:fixed;
                	width:60px;
                	height:60px;
                	bottom:40px;
                	right:40px;
                	background-color:#0C9;
                	color:#FFF;
                	border-radius:50px;
                	text-align:center;
                	box-shadow: 2px 2px 3px #999;
                }
                
                .my-float{
                	margin-top:22px;
                }
                  
                </style>
            <!--  flooat-->


  <!--  flooat-->

                <a onclick="app.update_order (this);" style="display: none;" id="btnUpdateorder" data-dismiss="modal" class="float">
                <i class="fa fa-plus my-float"></i>
                </a>
                <style>
                *{padding:0;margin:0;}
                
                body{
                	font-family:Verdana, Geneva, sans-serif;
                	font-size:18px;
                	background-color:#CCC;
                }
                
                .float{
                	position:fixed;
                	width:60px;
                	height:60px;
                	bottom:40px;
                	right:40px;
                	background-color:#0C9;
                	color:#FFF;
                	border-radius:50px;
                	text-align:center;
                	box-shadow: 2px 2px 3px #999;
                }
                
                .my-float{
                	margin-top:22px;
                }
                  
                </style>
            <!--  flooat-->


            
        </div>
        </div>
    </div>
</div>

<!--  new item CAT Modal -->
<div class="modal fade" id="newItemCategoryModal" tabindex="-1" role="dialog" aria-labelledby="newItemCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newItemCategoryModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="newItemCategoryModalBody" class="modal-body"></div>
        </div>
    </div>
</div>

<!--  new item Modal -->
<div class="modal fade" id="newitemModal" tabindex="-1" role="dialog" aria-labelledby="newitemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newitemModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="newitemmodalBody" class="modal-body"></div>
        </div>
    </div>
</div>

<!--  edit item Modal -->
<div class="modal fade" id="edititemModal" tabindex="-1" role="dialog" aria-labelledby="edititemModalLabel" aria-hidden="true" data-onload="app.onEditNewItemClicked">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edititemModalLabel"> EDIT ITEM</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="edititemmodalBody" class="modal-body">

                      <div class="container">
                        <div>
                            <form>
                                <div class="form-group">
                                    <div id="formdiv">
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:10px;"><strong >ITEM ID :</strong><strong id="itemid"></strong><br /></p>
                                            </div>
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>ITEM CATEGORY</strong><br /></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1"><select id='edititem_cat' class="border rounded border-primary shadow-lg form-control" required style="font-size: 27px;"><option value="CATEGORY 1" selected>CATEGORY 1</option><option value="CATEGORY 2">CATEGORY 2</option><option value="CATEGORY 3">CATEGORY 3</option> <option value="CATEGORY 4">CATEGORY 4</option></select></div>
                                        </div>
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>ITEM NAME</strong></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1"><input  id='edititem_name' type="text" class="border rounded border-primary shadow-lg form-control form-control-lg" style="margin-left: 0px;font-family: Roboto, sans-serif;font-size: 24px;" placeholder="ITEM NAME" autocomplete="off" required /></div>
                                        </div>
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>ITEM PRICE</strong></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1"><input id='edititem_price' type="text" class="border rounded border-primary shadow-lg form-control" style="margin-left: 0px;font-family: Roboto, sans-serif;font-size: 24px;" name="name" placeholder="ITEM PRICE" /></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                     </div>          

                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Dismiss</button>
                                <button id="edititem" class="btn btn-primary"  type="button" data-dismiss="modal" onclick="app.update_item(this);">Update</button>
                            </div>
                        </div>


             </div>
                    
        </div>
    </div>
   
</div>

<!--  cat item Modal -->
<div class="modal fade" id="catitemModal" tabindex="-1" role="dialog" aria-labelledby="catitemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="catitemModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="catitemmodalBody" class="modal-body">



            <div class="container">
                        <div>
                            <form>
                                <div class="form-group">
                                    <div id="formdiv">
                                       
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>ITEM CAT</strong></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1"><input id='itemcat' type="text" class="border rounded border-primary shadow-lg form-control" style="margin-left: 0px;font-family: Roboto, sans-serif;font-size: 24px;" name="name" placeholder="ITEM CAT NAME" />
                                           </div>
                                           <div class="col-md-10 offset-md-1">
                                            <input id='itemcatsort' type="text" class="border rounded border-primary shadow-lg form-control" style="margin-top:10px;font-family: Roboto, sans-serif;font-size: 24px;" name="name" placeholder="SORT NO" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                     </div>          

                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Dismiss</button>
                                <button class="btn btn-primary"  type="button" data-dismiss="modal" onclick="app.add_itemcat(this);">ADD</button>
                            </div>
                        </div>


             </div>




            </div>
        </div>
    </div>
</div>



<!--  edit cat item Modal -->
<div class="modal fade" id="editcatitemModal" tabindex="-1" role="dialog" aria-labelledby="editcatitemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editcatitemModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="editcatitemmodalBody" class="modal-body">



            <div class="container">
                        <div>
                            <form>
                                <div class="form-group">
                                    <div id="formdiv">
                                       
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>ITEM CAT</strong></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1"><input id='iteedititem_name_catmcat' type="text" class="border rounded border-primary shadow-lg form-control" style="margin-left: 0px;font-family: Roboto, sans-serif;font-size: 24px;" name="name" placeholder="ITEM CAT NAME" /></div>
                                              <div class="col-md-10 offset-md-1">
                                            <input id='edititemcatsort' type="text" class="border rounded border-primary shadow-lg form-control" style="margin-top:10px;font-family: Roboto, sans-serif;font-size: 24px;" name="name" placeholder="SORT NO" />
                                            </div>
                                        </div>
                                        <div style="display: none;" id="old_cat">                              
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                     </div>          

                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Dismiss</button>
                                <button class="btn btn-primary"  type="button" data-dismiss="modal" onclick="app.update_itemcat(this);">update</button>
                            </div>
                        </div>


             </div>




            </div>
        </div>
    </div>
</div>


<!--  new rep Modal -->
<div class="modal fade" id="newrepModal" tabindex="-1" role="dialog" aria-labelledby="newrepModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newrepModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="newrepmodalBody" class="modal-body"></div>
        </div>
    </div>
</div>


<!--  edit rep Modal -->
<div class="modal fade" id="edirepModal" tabindex="-1" role="dialog" aria-labelledby="editrepModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editrepModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="reprepmodalBody" class="modal-body">



            <div class="container">
    <div>
        <form>
            <div class="form-group">
                <div id="formdiv">
                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                        <div class="col-md-8 offset-md-1">
                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Name </strong></p>
                        </div>
                        <div class="col-md-10 offset-md-1"><input id='editrep_name' type="text" class="form-control" style="margin-left:0px;font-family:Roboto, sans-serif;" name="name" placeholder="Name" required /></div>
                    </div>
                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                        <div class="col-md-8 offset-md-1">
                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Phone</strong></p>
                        </div>
                        <div class="col-md-10 offset-md-1"><input id='editrep_phone'  type="text" class="form-control" style="margin-left:0px;font-family:Roboto, sans-serif;" placeholder="phone" required inputmode="tel" /></div>
                    </div>
                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                        <div class="col-md-8 offset-md-1">
                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Representative ID</strong><br /></p>
                        </div>
                        <div class="col-md-10 offset-md-1"><input id='editrep_id'  type="text" class="form-control" style="margin-left:0px;font-family:Roboto, sans-serif;" placeholder="Representative ID" required inputmode="numeric" /></div>
                    </div>

                    <div style="display: none;" id="old_rep">  </div>
                    <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Dismiss</button>
                            <button id="btnUpdaterep" class="btn btn-primary" style="display: none;" type="button" data-dismiss="modal" onclick="app.update_rep(this);">Update</button>
                            
                            <button id="" class="btn btn-primary"  type="button"  data-dismiss="modal" onclick="app.update_rep(this);">Update</button>

                            <button id="closeModal" type="button" style="display: none;" data-dismiss="modal"></button>
                    </div>


                </div>
            </div>
        </form>
    </div>
</div>


            
            </div>
        </div>
    </div>
</div>



<!-- viwe order Modal ------>
<div class="modal fade" id="orderModalreport" tabindex="-1" role="dialog" aria-labelledby="orderModalLabelreport" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabelreport"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="ordermodalBodyreport" class="modal-body"></div>
        </div>
    </div>
</div>


<!-- Contacts List Modal -->
<div class="modal fade" id="contactsModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="contactModalLabel" class="modal-title">Contacts</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Family No</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Dismiss</button>
                <button id="btnAddAll" class="btn btn-primary" type="button" data-dismiss="modal" onclick="app.addAllContacts(this);">Add All</button>
                <button id="btnAddSelected" class="btn btn-primary" type="button" data-dismiss="modal" onclick="app.addSelectedContacts(this);">Add Selected</button>
            </div>
        </div>
    </div>
</div>

<!-- Member Form -->
<div id="memberForm" style="display: none;">
    <form>
        <!-- <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="familyNo">Custemar ID</label>
                    <input type="text" id="familyNo" class="form-control" name="family_no" />
                </div>
            </div>
            <div class="col"> 
                <div class="form-outline">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="name" class="form-control" name="name" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="spouseName">Spouse Name</label>
                    <input type="text" id="spouseName" class="form-control" name="spouse_name" />
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label class="form-label" for="gender">Gender</label>
                <select id="gender" name="gender" class="custom-select mb-3">
                    <option selected value="">Not Selected</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Others</option>
                </select>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="dob">Date of Birth</label>
                    <input type="date" id="dob" class="form-control" name="dob" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="dom">Date of Marriage</label>
                    <input type="date" id="dom" class="form-control" name="dom" />
                </div>
            </div>
        </div> -->

        <!-- <div class="row">
            <div class="col col-sm-10">
                <div class="form-outline mb-4">
                    <label class="form-label" for="address">Address</label>
                    <textarea class="form-control" id="address" rows="3" name="address"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="address">QR Code</label>
                    <div id="qrCode" class="col"></div>
                </div>
            </div>
        </div>
        

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="area">Area</label>
                    <input type="text" id="area" class="form-control" name="area" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="email" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="phoneNo">Phone No</label>
                    <input type="number" id="phoneNo" class="form-control" name="phone_no" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="mobileNo">Mobile No</label>
                    <input type="number" id="mobileNo" class="form-control" name="mobile_no" />
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label class="form-label" for="conformation">Conformation</label>
                <input type="checkbox" id="conformation" class="form-control toggle-control" name="conformation" />
                <label for="conformation"></label>
            </div>
            <div class="col">
                <label class="form-label" for="baptism">Baptism</label>
                <input type="checkbox" id="baptism" class="form-control toggle-control" name="baptism" />
                <label for="baptism"></label>
            </div>
        </div> -->

        <!-- <div class="row mb-4">
            <div class="col-md-6 col-xl-3">
                <label id="cust_id_lab" style="margin: 5px;"> <br /></label>
                <label id="cust_id" style="margin: 5px;"> <br /></label><br>
                <label style="margin: 5px;">Customer Name<br /></label>
                <input  id="cust_name"  type="text" class="border rounded" style="margin: 5px;width: 100%;height: 40px;" />
            </div>

            <div class="col-md-6 col-xl-3">
            <label style="margin: 5px;">Address 1<br /></label>
            <input id="cust_address
            
            1" type="text" class="border rounded" style="margin: 5px;width: 100%;height: 40px;" />
            </div>

            <div class="col-md-6 col-xl-3">
            <label style="margin: 5px;">Address 2<br /></label>
            <input id="cust_address2" type="text" class="border rounded" style="margin: 5px;width: 100%;height: 40px;" />
            </div>

            <div class="col-md-6 col-xl-3">
            <label style="margin: 5px;">Area<br /></label>
            <input id="cust_area" type="text" class="border rounded" style="margin: 5px;width: 100%;height: 40px;" />
            </div>

            <div class="col-md-6 col-xl-3">
            <label style="margin: 5px;">City<br /></label>
            <input  id="cust_city" type="text" class="border rounded" style="margin: 5px;width: 100%;height: 40px;" />
            </div>

            <div class="col-md-6 col-xl-3">
            <label style="margin: 5px;">Pincode<br /></label>
            <input id="cust_pincode" type="text" class="border rounded" style="margin: 5px;width: 100%;height: 40px;" inputmode="numeric" />
            </div>

            <div class="col-md-6 col-xl-3">
            <label style="margin: 5px;">Mobile<br />
            </label><input id="cust_phone" type="text" class="border rounded" style="margin: 5px;width: 100%;height: 40px;" inputmode="numeric" autocomplete="off" />
            </div>

            <div class="col-md-6 col-xl-3">
            <label style="margin: 5px;">GST Number<br /></label>
            <input id="cust_gstNo" type="text" class="border rounded" style="margin: 5px;width: 100%;height: 40px;" />
            </div>

        </div> -->



<div class="container">
    <div>
        <form>
            <div class="form-group">
                <div id="formdiv">
                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                        <div class="col-md-8 offset-md-1">
                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>AREA</strong></p>
                        </div>
                        <div class="col-md-10 offset-md-1"><input id="cust_area" type="text" class="border rounded border-primary shadow-lg form-control form-control-lg" style="margin-left: 0px;font-family: Roboto, sans-serif;font-size: 24px;" placeholder="AREA" autofocus autocomplete="off" required
                            /></div>
                    </div>
                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                        <div class="col-md-8 offset-md-1">
                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>CUSTOMER NAME</strong></p>
                        </div>
                        <div class="col-md-10 offset-md-1"><input  id="cust_name" type="text" class="border rounded border-primary shadow-lg form-control form-control-lg" style="margin-left: 0px;font-family: Roboto, sans-serif;font-size: 24px;" placeholder="CUSTOMER NAME" autocomplete="off" required /></div>
                    </div>
                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                        <div class="col-md-8 offset-md-1">
                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>SEALS EXECUTIVE</strong><br /></p>
                        </div>
                        <div class="col-md-10 offset-md-1"><select style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;" id="selectrep" class="custom-select">
                            
                                                            </select>
                        </div>
                        <div style="display: none;" id="cust_id">  </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>







        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Dismiss</button>
            <button id="btnUpdate" class="btn btn-primary" style="display: none;" type="button" data-dismiss="modal" onclick="app.updateCust(this);">Update</button>
            <button id="btnAdd" class="btn btn-primary" style="display: none;" type="button" onclick="app.addMember(this);">Add</button>
            <button id="closeModal" type="button" style="display: none;" data-dismiss="modal"></button>
        </div>
    </form>
</div>



<div  id="itemForm" style="display: none;" >
    <form >
            
                    <div>
                        <div class="container">
                            <div class="row" >
                                <div class="col-lg-6 col-xl-5 offset-xl-0">
                                     <label id='repid' style="margin: 10px;"></label>
                                     <label  style="margin: 10px;"></label>
                                     <label id='order_idfroupdate' style="margin: 10px;"></label><br>
                                    <label id='order_custfroupdate' style="margin: 10px; font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Customer Name  </label>
                                    <label id='cust_name_updateorder' style="margin: 10px;"></label>

                                    <select id='selectname'class="border rounded shadow" style="width: 208px;height: 48px; ">
                                        <option value selected></option>
                                       
                                    </select>
                                </div>

                            <!-- <div class="row">
                                <div class="col-md-6 col-xl-3" style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 1</label><input id='itemqut1'  type="number" style="text-align: right;margin: 5px;width: 129px;" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice1" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 2</label><input id='itemqut2' type="number" style="text-align: right;margin: 5px;width: 129px;" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice2" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 3</label><input id='itemqut3' type="number" style="text-align: right;margin: 5px;width: 129px;" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice3" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 4</label><input id='itemqut4' type="number" style="text-align: right;margin: 5px;width: 129px;" style="width: 30%;margin: 10px;" placeholder="Qty" / ><input id="itemprice4" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 5</label><input id='itemqut5' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice5" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 6</label><input id='itemqut6' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice6" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 7</label><input id='itemqut7' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice7" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 8</label><input id='itemqut8' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice8" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 9</label><input id='itemqut9' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice9" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 10</label><input id='itemqut10' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice10" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 11</label><input id='itemqut11' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice11" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 12</label><input id='itemqut12' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice12" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 13</label><input id='itemqut13' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice13" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 14</label><input id='itemqut14' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice14" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 15</label><input id='itemqut15' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice15" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 16</label><input id='itemqut16' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice16" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 17</label><input id='itemqut17' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice17" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 18</label><input id='itemqut18' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice18" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 19</label><input id='itemqut19' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice19" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 20</label><input id='itemqut20' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice20" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 21</label><input id='itemqut21' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice21" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 22</label><input id='itemqut22' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice22" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 23</label><input id='itemqut23' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice23" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 24</label><input id='itemqut24' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice24" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                                <div class="col-md-6 col-xl-3"
                                    style="margin: 10px;"><label style="margin: 10px;width: 100%;">Item name 25</label><input id='itemqut25' type="number" style="width: 30%;margin: 10px;" placeholder="Qty" /><input id="itemprice25" type="text" style="width: 50%;" placeholder="Price" inputmode="numeric" /></div>
                            </div> -->

                                        <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(100%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 1</label><input type="text" id="itemqut1" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice1" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 2</label><input type="text" id="itemqut2" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice2" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label id="itemprice2" style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 3</label><input type="text" id="itemqut3" placeholder="Qty" inputmode="numeric"
                                                    style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;" /><input type="text" id="itemprice3" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label id="itemprice3" style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 4</label><input type="text" id="itemqut4" placeholder="Qty" inputmode="numeric"
                                                    style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;" /><input type="text" id="itemprice4" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label id="itemprice4" style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 5</label><input type="text" id="itemqut5" placeholder="Qty" inputmode="numeric"
                                                    style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;" /><input type="text" id="itemprice5" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 6</label><input type="text" id="itemqut6" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice6" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 7</label><input type="text" id="itemqut7" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice7" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 8</label><input type="text" id="itemqut8" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice8" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 9</label><input type="text" id="itemqut9" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice9" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 10</label><input type="text" id="itemqut10" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice10" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 11</label><input type="text" id="itemqut11" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice11" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 12</label><input type="text" id="itemqut12" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice12" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 13</label><input type="text" id="itemqut13" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice13" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 14</label><input type="text" id="itemqut14" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice14" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 15</label><input type="text" id="itemqut15" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice15" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 16</label><input type="text" id="itemqut16" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice16" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 17</label><input type="text" id="itemqut17" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice17" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 18</label><input type="text" id="itemqut18" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice18" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 19</label><input type="text" id="itemqut19" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice19" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 20</label><input type="text" id="itemqut20" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice20" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 21</label><input type="text" id="itemqut21" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice21" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 22</label><input type="text" id="itemqut22" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice22" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 23</label><input type="text" id="itemqut23" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice23" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 24</label><input type="text" id="itemqut24" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice24" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 offset-3" style="margin: 10px;"><label style="margin: 0px;width: 100%;filter: brightness(0%) grayscale(0%) sepia(0%);font-family: 'Archivo Black', sans-serif;opacity: 0.79;">Item name 25</label><input type="text" id="itemqut25" placeholder="Qty" inputmode="numeric" style="text-align: right;margin: 5px;width: 70px;font-family: 'Archivo Black', sans-serif;"
                                                /><input type="text" id="itemprice25" placeholder="Price" inputmode="numeric" style="text-align: right;margin: 5px;width: 101px;font-family: 'Archivo Black', sans-serif;" /></div>
                                        </div>
                                    </div>
                        </div>
                    </div>



        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Dismiss</button>
            <button id="btnUpdateorder" class="btn btn-primary" style="display: none;" type="button" data-dismiss="modal" onclick="app.update_order(this);">Update</button>
            <button id="btnAddorder" class="btn btn-primary" style="display: none;" type="button" onclick="app.addorder(this);">Order</button>
            <button id="closeModalorder" type="button" style="display: none;" data-dismiss="modal"></button>
        </div>
    </form>



</div>







<!-- Communication Form -->
<div id="communicationForm" style="display: none;">
    <form>
        <div class="row mb-4">
            <div class="col">
                <label class="form-label" for="enableEditing">Enable Editing?</label>
                <input type="checkbox" id="enableEditing" class="form-control toggle-control" name="enableEditing" onchange="app.handleEditForm(this);" value="false" />
                <label for="enableEditing"></label>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label class="form-label" for="autoNotify">Send wishes automatically?</label>
                <input type="checkbox" id="autoNotify" class="form-control toggle-control" name="autoNotify" disabled="disabled" checked="checked" />
                <label for="autoNotify"></label>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col col-sm-8">
                <label class="form-label" for="preferredTime">Preferred time for automatic notifications</label>
                <select id="preferredTime" name="preferredTime" class="custom-select mb-3" disabled="disabled">
                    <option selected>Not Selected</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="col col-sm-4">
                <label class="form-label" for="preferredSession">&nbsp;</label>
                <select id="preferredSession" name="preferredSession" class="custom-select mb-3" disabled="disabled">
                    <option selected>Not Selected</option>
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
            </div>
        </div>
        <div class="row" style="display: none;">
            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="subject">Subject (Note: &lt;name&gt;, &lt;years&gt;, &lt;date&gt; will be replaced by original data) </label>
                    <input type="text" id="subject" class="form-control" name="subject" readonly="readonly" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="messageTemplate">Message Template (Note: &lt;name&gt;, &lt;years&gt;, &lt;date&gt; will be replaced by original data) </label>
                    <textarea class="form-control" id="messageTemplate" rows="3" name="messageTemplate" readonly="readonly"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer" style="display: none;">
            <button class="btn btn-primary" type="button" onclick="app.updateConfig();">Update</button>
        </div>
    </form>
</div>

<!-- SMS Settings -->
<div id="sms-settings" style="display: none;">
    <form>
        <div class="row mb-4">
            <div class="col">
                <label class="form-label" for="enableEditing">Enable Editing?</label>
                <input type="checkbox" id="enableEditing" class="form-control toggle-control" name="enableEditing" onchange="app.handleEditForm(this);" value="false" />
                <label for="enableEditing"></label>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="apiKey">API Key</label>
                    <input type="text" id="apiKey" class="form-control" name="apiKey" readonly="readonly" />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label class="form-label" for="language">Language</label>
                <select id="language" name="language" class="custom-select mb-3" disabled="disabled">
                    <option value="english" selected>English</option>
                    <option value="unicode">Unicode</option>
                </select>
            </div>
        </div>
        <div class="modal-footer" style="display: none;">
            <button class="btn btn-primary" type="button" onclick="app.updateSettings();">Update</button>
        </div>
    </form>
</div>

<!-- Email Settings -->
<div id="email-settings" style="display: none;">
    <form>
        <div class="row mb-4">
            <div class="col">
                <label class="form-label" for="enableEditing">Enable Editing?</label>
                <input type="checkbox" id="enableEditing" class="form-control toggle-control" name="enableEditing" onchange="app.handleEditForm(this);" value="false" />
                <label for="enableEditing"></label>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col col-sm-9">
                <div class="form-outline mb-4">
                    <label class="form-label" for="host">Host</label>
                    <input type="text" id="host" class="form-control" name="host" readonly="readonly" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="port">Port</label>
                    <input type="number" id="port" class="form-control" name="port" readonly="readonly" />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" class="form-control" name="username" readonly="readonly" />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password" readonly="readonly" />
                </div>
            </div>
        </div>
        <div class="modal-footer" style="display: none;">
            <button class="btn btn-primary" type="button" onclick="app.updateSettings();">Update</button>
        </div>
    </form>
</div>


<div  id="orderreport" style="display: none;" >
    <form >

        <div>
    <div class="container" style="padding: 40px;">
        <div class="row">
            <div class="col-md-12"><label style="width: 140px;">Customer          :  </label><label>basha   </label></div>
            <div class="col-md-12"><label style="width: 140px;"></label><label>addess 1234</label></div>
            <div class="col-md-12"><label style="width: 140px;"></label><label>09878765456645</label></div>
            <div class="col-md-12"><label style="width: 140px;"></label><label>veoore</label></div>
            <div class="col-md-12"><label style="width: 140px;">Order ID              :  </label><label>1000</label></div>
            <div class="col-md-12"><label style="width: 140px;">Order Date          :  </label><label>1000</label></div>
            <div class="col-md-12"><label style="width: 140px;">Rep Name           :  </label><label>1000</label></div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 46px;">S.No</th>
                        <th>Items Name</th>
                        <th class="text-right" style="width: 102px;">Items Qty</th>
                        <th class="text-right" style="width: 214px;">Items Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="font-size: 12px;">
                        <td class="text-center">1.</td>
                        <td>Cell 2</td>
                        <td class="text-right" style="text-align: right;margin: 5px;width: 101px;">Cell 2</td>
                        <td class="text-right" style="text-align: right;margin: 5px;width: 101px;">Cell 2</td>
                    </tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    </form>
</div>






<div  id="newitemForm" style="display: none;" >
    

                    <div class="container">
                        <div>
                            <form>
                                <div class="form-group">
                                    <div id="formdiv">
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>ITEM CATEGORY</strong><br /></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1"><select id='newitem_cat' class="border rounded border-primary shadow-lg form-control" required style="font-size: 27px;"><option value="CATEGORY 1" selected>CATEGORY 1</option><option value="CATEGORY 2">CATEGORY 2</option><option value="CATEGORY 3">CATEGORY 3</option> <option value="CATEGORY 4">CATEGORY 4</option></select></div>
                                        </div>
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>ITEM NAME</strong></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1"><input id='newitem_name' type="text" class="border rounded border-primary shadow-lg form-control form-control-lg" style="margin-left: 0px;font-family: Roboto, sans-serif;font-size: 24px;" placeholder="ITEM NAME" autocomplete="off" required /></div>
                                        </div>
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>ITEM PRICE</strong></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1"><input id='newitem_price' type="text" class="border rounded border-primary shadow-lg form-control" style="margin-left: 0px;font-family: Roboto, sans-serif;font-size: 24px;" name="name" placeholder="ITEM PRICE" /></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>          

                     <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Dismiss</button>
                            <button id="btnUpdateorder" class="btn btn-primary" style="display: none;" type="button" data-dismiss="modal" onclick="app.update_order(this);">Update</button>
                            <button id="btnAddorder" class="btn btn-primary" style="display: none;" type="button" onclick="app.addorder(this);">Order</button>
                            <button id="btnAdditem" class="btn btn-primary" style="display: none;" type="button" onclick="app.additem(this);">Add Item</button>
                            <button id="newitemcloseModal" type="button" style="display: none;" data-dismiss="modal"></button>
                        </div>
                      </div>

</div>


<!-- rep form -->

<div  id="newrepForm" style="display: none;" >

<div class="container">
    <div>
        <form>
            <div class="form-group">
                <div id="formdiv">
                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                        <div class="col-md-8 offset-md-1">
                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Name </strong></p>
                        </div>
                        <div class="col-md-10 offset-md-1"><input id='rep_name' type="text" class="form-control" style="margin-left:0px;font-family:Roboto, sans-serif;" name="name" placeholder="Name" required /></div>
                    </div>
                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                        <div class="col-md-8 offset-md-1">
                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Phone</strong></p>
                        </div>
                        <div class="col-md-10 offset-md-1"><input id='rep_phone'  type="text" class="form-control" style="margin-left:0px;font-family:Roboto, sans-serif;" placeholder="phone" required inputmode="tel" /></div>
                    </div>
                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                        <div class="col-md-8 offset-md-1">
                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Representative ID</strong><br /></p>
                        </div>
                        <div class="col-md-10 offset-md-1"><input id='rep_id'  type="text" class="form-control" style="margin-left:0px;font-family:Roboto, sans-serif;" placeholder="Representative ID" required inputmode="numeric" /></div>
                    </div>


                    <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Dismiss</button>
                            <button id="btnUpdaterep" class="btn btn-primary" style="display: none;" type="button" data-dismiss="modal" onclick="app.update_rep(this);">Update</button>
                            
                            <button id="btnAddrep" class="btn btn-primary" style="display: none;" type="button" onclick="app.addrep(this);">Add Rep</button>

                            <button id="closeModal" type="button" style="display: none;" data-dismiss="modal"></button>
                    </div>


                </div>
            </div>
        </form>
    </div>
</div>

</div>
