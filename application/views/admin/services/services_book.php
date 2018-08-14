<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <br>
        <h3 style="text-align: center">Travel packet</h3>
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary open-modal" data-modalka_id="#modal_add_services">Добавить</button>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">

            <?php foreach ($data as $row):
                if($row->img_name){
                    $image=base_url()."assets/upload/thumb/cat_two/".$row->img_name;
                }
                else{
                    $image=base_url()."assets/upload/no-image.jpg";
                }
                ?>
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <center class="m-t-30"><img src="<?=$image?>" width="300" class="img-thumbnail"/>
                                <h4 class="card-title m-t-10"><?=$row->title?></h4>
                                <h6 class="card-subtitle"><?=$row->description?></h6>
                                <button id="edit_cat<?= $row->id;?>" data-id="<?=$row->id?>" data-img="<?=$row->img_name?>"
                                        data-title="<?=$row->title?>"
                                        data-desc="<?=$row->description?>"
                                        data-title1="<?=$row->en_title?>"
                                        data-desc1="<?=$row->en_desc?>"
                                        data-title2="<?=$row->chi_title?>"
                                        data-desc2="<?=$row->chi_desc?>"
                                        type="button" class="edit btn btn-success open-modal" data-modalka_id="#modal_edit">Update</button>
                                <button data-id="<?=$row->id?>"
                                        data-img="<?=$row->img_name?>"
                                        data-url_delete="/admin/del_view"
                                        type="button" class="delete_serv_res btn btn-danger">Delete</button>
                            </center>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>

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

<!-- modal -->
<!-- modalka для добавление -->
<div class="modals" id="modal_add_services">
    <div class="maska close-modal" data-modalka_id="#modal_add_services"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_add_services">
            <i class="material-icons">close</i>
        </span>
        <div class="content">
            <h3 style="width: 95%; margin: 0 auto">Добавления</h3><br>
            <form id="forma_add_uslugi" class="w3-container"  action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p style="font-size: 18px">Поле для Русского языка</p>
                <p><label style="float: left;">Title</label>
                    <input id="add_title" class="w3-input w3-border form-control" name="title" type="text">
                </p>
                <p><label style="float: left">Описание</label>
                    <textarea id="add_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>
                <div id="serv_cont_new_inp">

                </div>
                <input id="add_img" class="w3-button w3-white form-control" type="file" name="img_add" style="float: left;">
                <br>
                <br>
                <br>
                <input type="hidden" id="cat_id" name="cat_id" value="<?= $sub_cat_id;?>">
                <button id="add_service_lang" class="btn btn-success" data-lang="Английского языка">Добавить поле для следующего языка</button>
                <input id="add_uslugi" data-url_insert="/admin/insert_view" class="w3-button w3-indigo" type="submit" value="Добавить" style="float:right;">
            </form>
        </div>
    </div>
</div>
<!-- modalka для редактирование -->
<div class="modals" id="modal_edit">
    <div class="maska close-modal" data-modalka_id="#modal_edit"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_edit">
            <i class="material-icons">close</i>
        </span>
        <div class="content">
            <h3 style="width: 95%; margin: 0 auto">Редактирования</h3><br>
            <form id="forma_update" class="w3-container" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p style="font-size: 18px">Поле для Русского языка</p>
                <p><label style="float: left;">Заголовок</label>
                    <input id="update_title" class="w3-input w3-border form-control" name="title" type="text" >
                </p>
                <p><label style="float: left">Описание</label>
                    <textarea id="update_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>
                <div id="serv_cont_new_inp_edit">

                </div>
                <input id="update_id" class="form-control" type="hidden" name="id" >
                <input id="update_img" type="file" name="img_add" style="float: left;">
                <input id="update_img_name" class="w3-button w3-white form-control" type="hidden" name="img_name" style="float: left;">
                <br>
                <br>
                <br>
                <button id="add_pole_edit_serv_lang" class="btn btn-success" data-lang="Английского языка">Редактировать следующего поле языка</button>
                <input id="update_cat_two" class="w3-button w3-indigo" data-url_update="/admin/upd_view" type="submit" value="Изменить" style="float:right;">
            </form>
        </div>
    </div>
</div>



<input type="hidden" id="base_url" value="<?= base_url('/admin/vip_view/'.$sub_cat_id);?>" style="width: 100%">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/dist/js/script_serv_reserve.js"></script>
