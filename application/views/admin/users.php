<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Таблица пользователей</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Таблица пользователей</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Пользователи</h4>                               
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sabyrov</td>
                                        <td>Beksultan</td>
                                        <td>bekasabyrov77@gmail.com</td>
                                        <td><button type="button" class="btn btn-success">Update</button>
                                            <button type="button" class="btn btn-danger">Delete</button> </td>
                                            </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Saparov</td>
                                        <td>Kutman</td>
                                        <td>Kutman007@gmail.com</td>
                                        <td><button type="button" class="btn btn-success d-none d-lg-block m-l-5">Update</button><br>
                                            <button type="button" class="btn btn-danger d-none d-lg-block m-l-5">Delete</button> </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sanghani</td>
                                        <td>Gusikowski</td>
                                        <td>@Govinda</td>
                                        <td><span class="label label-warning">developer</span> </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Roshan</td>
                                        <td>Rogahn</td>
                                        <td>@Hritik</td>
                                        <td><span class="label label-success">supporter</span> </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Joshi</td>
                                        <td>Hickle</td>
                                        <td>@Maruti</td>
                                        <td><span class="label label-info">member</span> </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Nigam</td>
                                        <td>Eichmann</td>
                                        <td>@Sonu</td>
                                        <td><span class="label label-success">supporter</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>