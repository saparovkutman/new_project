
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
                        <h4 class="text-themecolor">Profile</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7" style="margin:0 auto">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="javascript:void(0)" id="form_user_upd">                          
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Login</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="example_login" id="example-email" value="<?php echo $data[0]->login?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="example_email" value="<?php echo $data[0]->email?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">New password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="" name="example_pass" class="form-control form-control-line">
                                            <input type="hidden" class="form-control form-control-line" name="example_id" value="<?php echo $data[0]->id?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" id="user_upd">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('#user_upd').on('click',function(){
    var form_add= $("#form_user_upd")[0];
    var vse_polya_add= new FormData(form_add);
    $.ajax({
        method: "POST",
        url: "/admin/auth/update_admin",
        data: vse_polya_add,
        contentType: false,
        processData: false,
    }).done(function(){
        // console.log();
//        window.location="/admin/profile";
        $('#modal_add').hide();
        $("#forma_add")[0].reset();
    });
});
</script>
        