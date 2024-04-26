<!-- Dashboard Section -->
<div id="dashboard-section" style="display:none;" data-onload="app.loadDashboard">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo "Login By :  " . $_SESSION['username']; ?>
</h1>
<!--             <img src="http://udayamvellore.com/img/logo.png" />
 -->            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="app.print();"><i class="fas fa-download fa-sm text-white-50"></i> Print / Download PDF</a>-->
        </div>

        <div class="row">
                <!--<div class="col-xl-3 col-md-6 mb-4">-->
                <!--    <div class="card border-left-info shadow h-100 py-2">-->
                <!--        <div class="card-body">-->
                <!--            <div class="row no-gutters align-items-center">-->
                <!--                <div class="col mr-2">-->
                <!--                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">order </div>-->
                <!--                    <div id="today" class="h5 mb-0 font-weight-bold text-gray-800"></div>-->
                <!--                </div>-->
                <!--                <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-700"></i></div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                
                <!--<div class="col-xl-3 col-md-6 mb-4">-->
                <!--    <div class="card border-left-primary shadow h-100 py-2">-->
                <!--        <div class="card-body">-->
                <!--            <div class="row no-gutters align-items-center">-->
                <!--                <div class="col mr-2">-->
                <!--                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">pending</div>-->
                <!--                    <div id="dobMembers" class="h5 mb-0 font-weight-bold text-gray-800"></div>-->
                <!--                </div>-->
                <!--                <div class="col-auto">-->
                <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">-->
                <!--                        <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>-->
                <!--                    </svg>-->
                                
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!-- <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Today Anniversaries</div>
                                    <div id="domMembers" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col-auto"><i class="fas fa-ring fa-2x text-gray-700"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Members</div>
                                    <div id="totalMembers" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-friends fa-2x text-gray-700"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Today order</h6>
                            <a class="btn btn-primary" href="#birthdays">Show All</a>
                        </div>
                        <div id="dobCont" class="card-body">
                            <?php// include("dashboard_table.php"); ?>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-sm-12 col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Today Anniversaries</h6>
                            <a class="btn btn-primary" href="#anniversaries">Show All</a>
                        </div>
                        <div id="domCont" class="card-body">
                            <?php //include("dashboard_table.php"); ?>
                        </div>
                    </div>
                </div>
                
            </div>
            -->
           <?php
            
                // <div class="row">
                //     <div class="col-xl-8 col-lg-7">
                //         <div class="card shadow mb-4">
                //             <div
                //                 class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                //                 <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                //                 <div class="dropdown no-arrow">
                //                     <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                //                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                //                         <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                //                     </a>
                //                     <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                //                         aria-labelledby="dropdownMenuLink">
                //                         <div class="dropdown-header">Dropdown Header:</div>
                //                         <a class="dropdown-item" href="#">Action</a>
                //                         <a class="dropdown-item" href="#">Another action</a>
                //                         <div class="dropdown-divider"></div>
                //                         <a class="dropdown-item" href="#">Something else here</a>
                //                     </div>
                //                 </div>
                //             </div>
                //             <div class="card-body">
                //                 <div class="chart-area">
                //                     <canvas id="myAreaChart"></canvas>
                //                 </div>
                //             </div>
                //         </div>
                //     </div>

                //     <div class="col-xl-4 col-lg-5">
                //         <div class="card shadow mb-4">
                //             <div
                //                 class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                //                 <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                //                 <div class="dropdown no-arrow">
                //                     <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                //                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                //                         <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                //                     </a>
                //                     <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                //                         aria-labelledby="dropdownMenuLink">
                //                         <div class="dropdown-header">Dropdown Header:</div>
                //                         <a class="dropdown-item" href="#">Action</a>
                //                         <a class="dropdown-item" href="#">Another action</a>
                //                         <div class="dropdown-divider"></div>
                //                         <a class="dropdown-item" href="#">Something else here</a>
                //                     </div>
                //                 </div>
                //             </div>
                //             <div class="card-body">
                //                 <div class="chart-pie pt-4 pb-2">
                //                     <canvas id="myPieChart"></canvas>
                //                 </div>
                //                 <div class="mt-4 text-center small">
                //                     <span class="mr-2">
                //                         <i class="fas fa-circle text-primary"></i> Direct
                //                     </span>
                //                     <span class="mr-2">
                //                         <i class="fas fa-circle text-success"></i> Social
                //                     </span>
                //                     <span class="mr-2">
                //                         <i class="fas fa-circle text-info"></i> Referral
                //                     </span>
                //                 </div>
                //             </div>
                //         </div>
                //     </div>
                // </div>

                // <div class="row">
                //     <div class="col-lg-6 mb-4">
                //         <div class="card shadow mb-4">
                //             <div class="card-header py-3">
                //                 <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                //             </div>
                //             <div class="card-body">
                //                 <h4 class="small font-weight-bold">Server Migration <span
                //                         class="float-right">20%</span></h4>
                //                 <div class="progress mb-4">
                //                     <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                //                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                //                 </div>
                //                 <h4 class="small font-weight-bold">Sales Tracking <span
                //                         class="float-right">40%</span></h4>
                //                 <div class="progress mb-4">
                //                     <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                //                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                //                 </div>
                //                 <h4 class="small font-weight-bold">Customer Database <span
                //                         class="float-right">60%</span></h4>
                //                 <div class="progress mb-4">
                //                     <div class="progress-bar" role="progressbar" style="width: 60%"
                //                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                //                 </div>
                //                 <h4 class="small font-weight-bold">Payout Details <span
                //                         class="float-right">80%</span></h4>
                //                 <div class="progress mb-4">
                //                     <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                //                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                //                 </div>
                //                 <h4 class="small font-weight-bold">Account Setup <span
                //                         class="float-right">Complete!</span></h4>
                //                 <div class="progress">
                //                     <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                //                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                //                 </div>
                //             </div>
                //         </div>

                //         <div class="row">
                //             <div class="col-lg-6 mb-4">
                //                 <div class="card bg-primary text-white shadow">
                //                     <div class="card-body">
                //                         Primary
                //                         <div class="text-white-50 small">#4e73df</div>
                //                     </div>
                //                 </div>
                //             </div>
                //             <div class="col-lg-6 mb-4">
                //                 <div class="card bg-success text-white shadow">
                //                     <div class="card-body">
                //                         Success
                //                         <div class="text-white-50 small">#1cc88a</div>
                //                     </div>
                //                 </div>
                //             </div>
                //             <div class="col-lg-6 mb-4">
                //                 <div class="card bg-info text-white shadow">
                //                     <div class="card-body">
                //                         Info
                //                         <div class="text-white-50 small">#36b9cc</div>
                //                     </div>
                //                 </div>
                //             </div>
                //             <div class="col-lg-6 mb-4">
                //                 <div class="card bg-warning text-white shadow">
                //                     <div class="card-body">
                //                         Warning
                //                         <div class="text-white-50 small">#f6c23e</div>
                //                     </div>
                //                 </div>
                //             </div>
                //             <div class="col-lg-6 mb-4">
                //                 <div class="card bg-danger text-white shadow">
                //                     <div class="card-body">
                //                         Danger
                //                         <div class="text-white-50 small">#e74a3b</div>
                //                     </div>
                //                 </div>
                //             </div>
                //             <div class="col-lg-6 mb-4">
                //                 <div class="card bg-secondary text-white shadow">
                //                     <div class="card-body">
                //                         Secondary
                //                         <div class="text-white-50 small">#858796</div>
                //                     </div>
                //                 </div>
                //             </div>
                //             <div class="col-lg-6 mb-4">
                //                 <div class="card bg-light text-black shadow">
                //                     <div class="card-body">
                //                         Light
                //                         <div class="text-black-50 small">#f8f9fc</div>
                //                     </div>
                //                 </div>
                //             </div>
                //             <div class="col-lg-6 mb-4">
                //                 <div class="card bg-dark text-white shadow">
                //                     <div class="card-body">
                //                         Dark
                //                         <div class="text-white-50 small">#5a5c69</div>
                //                     </div>
                //                 </div>
                //             </div>
                //         </div>
                //     </div>
                //     <div class="col-lg-6 mb-4">
                //         <div class="card shadow mb-4">
                //             <div class="card-header py-3">
                //                 <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                //             </div>
                //             <div class="card-body">
                //                 <div class="text-center">
                //                     <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                //                         src="img/undraw_posting_photo.svg" alt="">
                //                 </div>
                //                 <p>Add some quality, svg illustrations to your project courtesy of <a
                //                         target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                //                     constantly updated collection of beautiful svg images that you can use
                //                     completely free and without attribution!</p>
                //                 <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                //                     unDraw &rarr;</a>
                //             </div>
                //         </div>

                //         <div class="card shadow mb-4">
                //             <div class="card-header py-3">
                //                 <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                //             </div>
                //             <div class="card-body">
                //                 <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                //                     CSS bloat and poor page performance. Custom CSS classes are used to create
                //                     custom components and custom utility classes.</p>
                //                 <p class="mb-0">Before working with this theme, you should become familiar with the
                //                     Bootstrap framework, especially the utility classes.</p>
                //             </div>
                //         </div>
                //     </div>
                // </div>
            
            ?> 

    </div>
</div>


<!-- Members Section -->


<div id="members-section" style="display: none;" data-onload="app.get_cust">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">All Customers </h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">All Customers</h6>
                <button class="btn btn-primary" data-toggle="modal" data-target="#memberModal" data-mode="add">
                    <i class="fas fa-plus"></i>
                    <span>Add Customer</span>
                </button>
              <!--   <button onclick="app.get_cust();" class="btn btn-primary" >
                    <i class="fas fa-plus"></i>
                    <span>Show Customer</span>
                </button> -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="memberTable" width="100%" cellspacing="0">
                        <thead>
                            <tr style="margin: 5px;color: rgb(249,11,11);">
                                <!--<th>Customer ID</th>-->
                                <th>Cust Name</th>
                                <!--<th>Address1</th>-->
                                <!--<th>Address2</th>-->
                                <th>Area</th>
                                <!--<th>City</th>-->
                                <!--<th>Pincode</th>-->
                                <th>SEALS EXECUTIVE</th>
                                <!--<th>GST No</th>-->
                                <th></th>
                            </tr>
                        </thead>
                       
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- item Section -->


<div id="item-section" style="display: none;" data-onload="app.get_item">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">All Items</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">All Items</h6>

               <!--  <button class="btn btn-primary" data-toggle="modal" data-target="#newItemCategoryModal" data-mode="add">
                    <i class="fas fa-plus"></i>
                    <span>ADD CATEGORY</span>
                </button> -->

                <button class="btn btn-primary" data-toggle="modal" data-target="#newitemModal" data-mode="add">
                    <i class="fas fa-plus"></i>
                    <span>ADD ITEM</span>
                </button>
            </div>

<!-- <div class="row">
    <div class="col"><input id="" type="text" class="border rounded border-primary shadow-lg" style="margin: 10px;" placeholder="ITEM CATEGORY" required />
        <button  onclick="app.add_item_cat(this);" class="btn btn-primary" type="button">Add Item CATEGORY </button></div>
</div> -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="itemTable" width="100%" cellspacing="0">
                        <thead>
                            <tr style="margin: 5px;color: rgb(249,11,11);">
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Item cat</th>
                                <th></th>
                            </tr>
                        </thead>
                     
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- Order-section -->
<div id="order-section" style="display: none;" data-onload="app.get_order">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">All Order </h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">All Item</h6>
                <button class="btn btn-primary" data-toggle="modal" data-target="#orderModal" data-mode="add">
                    <i class="fas fa-plus"></i>
                    <span>Add Order</span>
                </button>
               <!--    <button onclick="app.get_order();" class="btn btn-primary" >
                    <i class="fas fa-plus"></i>
                    <span>Show Order</span>
                </button> -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="OrderTable" width="100%" cellspacing="0">
                        <thead>
                            <tr style="margin: 5px;color: rgb(249,11,11);">
                                <th width="10%">Order ID</th>
                                <!--<th>Customer ID</th>-->
                                <th>Customer Name</th>
                                <th width="15%">Order Date</th>
                                <!-- <th>Number of Order</th> -->
                                <th width="15%"></th>
                            </tr>
                        </thead>
                     
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
       
</div>



<!-- rep-section -->
<div id="rep-section" style="display: none;" data-onload="app.get_rep">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Representative</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
                <button class="btn btn-primary" data-toggle="modal" data-target="#newrepModal" data-mode="add">
                    <i class="fas fa-plus"></i>
                    <span>Add Representative</span>
                </button>
               <!--    <button onclick="app.get_order();" class="btn btn-primary" >
                    <i class="fas fa-plus"></i>
                    <span>Show Order</span>
                </button> -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="repTable" width="100%" cellspacing="0">
                        <thead>
                            <tr style="margin: 5px;color: rgb(249,11,11);"s>
                                <th>REP Name</th>
                                <th>Rep Phone</th>
                              
                                <th></th>
                              
                            </tr>
                        </thead>
                       
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <script type="text/javascript">
        
          // self.loadMemberData();
    
    </script>
</div>













<!-- cat Section -->
<div id="itemcat-section" style="display: none;" data-onload="app.get_cat">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">item cat</h1>
        <div class="card shadow mb-4">
           

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
                <button class="btn btn-primary" data-toggle="modal" data-target="#catitemModal" data-mode="add">
                    <i class="fas fa-plus"></i>
                    <span>Add item catT</span>
                </button>
              
            </div>

            <div class="card-body">
            <table class="table table-bordered" id="catTable" width="100%" cellspacing="0">
                        <thead>
                            <tr style="margin: 5px;color: rgb(249,11,11);"s>
                                <th>item cat Name</th>
                                <th>item cat Number</th>
                              
                                <th></th>
                              
                            </tr>
                        </thead>
                       
                        <tbody>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>


<!-- Anniversary Section -->
<div id="anniversaries-section" style="display: none;" data-onload="app.loadAnniversaries">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Anniversaries</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All</h6>
            </div>
            <div class="card-body">
                <?php include("dashboard_table.php"); ?>
            </div>
        </div>
    </div>
</div>

<!-- Contacts Section -->
<div id="contacts-section" style="display: none;" data-onload="app.loadContacts">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Contacts</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All</h6>
            </div>
            <div class="card-body">
                <?php include("contacts_table.php"); ?>
            </div>
        </div>
    </div>
</div>

<!-- SMS Section -->
<div id="sms-section" style="display: none;" data-onload="app.loadSmsSection">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">SMS Notifications</h1>
        <div class="row">
            <div class="col col-sm-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bulk SMS</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="contacts">Recipients (Separated by commas)</label>
                                        <button type="button" class="float-right btn" data-toggle="modal" data-target="#contactsModal">Contacts</button>
                                        <textarea class="form-control" id="contacts" rows="3" name="contacts"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="message">Message (Note: &lt;name&gt; will be replaced by actual name)</label>
                                        <textarea class="form-control" id="message" rows="5" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" onclick="app.clearForm(this);">Clear</button>
                                <button class="btn btn-primary" type="button" onclick="app.sendSMS();">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">SMS Configurations</h6>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <button id="birthdayMsgConfig" class="nav-link active" onclick="app.handleTab(this, 'sms', 'birthday');">Birthday Message</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" onclick="app.handleTab(this, 'sms', 'anniversary');">Anniversary Message</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" onclick="app.showSettings(this, 'sms');">Settings</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="communicationBody" class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Email Section -->
<div id="email-section" style="display: none;" data-onload="app.loadEmailSection">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Email Notifications</h1>
        <div class="row">
            <div class="col col-sm-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bulk Email</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="contacts">Recipients (Separated by commas)</label>
                                        <button type="button" class="float-right btn" data-toggle="modal" data-target="#contactsModal">Contacts</button>
                                        <textarea class="form-control" id="contacts" rows="3" name="contacts"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="subject">Subject</label>
                                        <input type="text" id="subject" class="form-control" name="subject" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="message">Message (Note: &lt;name&gt; will be replaced by actual name)</label>
                                        <textarea class="form-control" id="message" rows="5" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" onclick="app.clearForm(this);">Clear</button>
                                <button class="btn btn-primary" type="button" onclick="app.sendEmail();">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Email Configurations</h6>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <button id="birthdayMailConfig" class="nav-link active" onclick="app.handleTab(this, 'email', 'birthday');">Birthday Mail</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" onclick="app.handleTab(this, 'email', 'anniversary');">Anniversary Mail</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" onclick="app.showSettings(this, 'email');">Settings</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="communicationBody" class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- test Section -->


<div id="test-section" style="display: none;" data-onload="app.get_session">
    <div class="container-fluid">
        <h1 onclick="app.get_session();" class="h3 mb-2 text-gray-800">Contacts</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All</h6>
            </div>
            <div class="card-body">
   <button onclick="app.get_session();">
       
       fff
   </button>





<select id='e3'class="js-example-disabled-results">
  <option value="one">First</option>
  <option value="three">Third</option>
  <option value="one">First</option>
  <option value="three">Third</option>
</select>














   

             </div>



            </div>
        </div>
    </div>
</div>
