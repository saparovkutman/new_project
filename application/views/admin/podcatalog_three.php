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
                <h4 class="text-themecolor">Подкаталог 3</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Подкаталог 3</li>
                    </ol>
                </div><br>
                <button type="button" class="btn btn-primary open-modal"  data-modalka_id="#modal_add">Add</button>
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Total rooms</th>
                                    <th>Occupied</th>
                                    <th>Idle</th>
                                    <th>Image</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=1;
                                foreach ($data as $category):
                                    if($category->image_name){
                                        $image=base_url()."assets/upload/images/cat_three/".$category->image_name;
                                    }
                                    else{
                                        $image=base_url()."assets/upload/no-image.jpg";
                                    }
                                    ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $category->title ?></td>
                                    <td><?php echo $category->description ?></td>
                                    <td><?php echo $category->total_rooms ?></td>
                                    <td><?php echo $category->occupied ?></td>
                                    <td><?php echo $category->idle ?></td>
                                    <td><img src="<?php echo $image ?>" style="width: 100px; height: 100px;" class="img-thumbnail"></td>
                                    <td> <button id="edit_cat<?= $category->id;?>" type="button" class="btn btn-success open-modal edit_cat" data-modalka_id="#modal_edit"
                                                 data-img="<?php echo $category->image_name ?>"
                                                 data-id="<?php echo $category->id ?>"
                                                 data-title="<?php echo $category->title ?>"
                                                 data-description="<?php echo $category->description ?>"
                                                 data-total_rooms="<?php echo $category->total_rooms ?>"
                                                 data-occupied="<?php echo $category->occupied ?>"
                                                 data-idle="<?php echo $category->idle ?>"
                                                 data-title1="<?php echo $category->en_title ?>"
                                                 data-description1="<?php echo $category->en_desc ?>"
                                                 data-title2="<?php echo $category->chi_title ?>"
                                                 data-description2="<?php echo $category->chi_desc ?>"
                                        >Update</button>
                                        <button type="button" class="btn btn-danger delete_cat" data-id="<?php echo $category->id?>" data-img="<?php echo $category->image_name?>">Delete</button>
                                </tr>
                                <?php
                                $i++;
                                endforeach;?>
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


<!-- Modal add -->
<div class="modals" id="modal_add">
    <div class="maska close-modal" data-modalka_id="#modal_add"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_add">
            <i class="material-icons">close</i>
        </span>
        <div class="content">
            <h3 style="width: 95%; margin: 0 auto">Добавления</h3><br>
            <form id="forma_add" class="w3-container"  action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p style="font-size: 18px">Поле для Русского языка</p>
                <p><label style="float: left;">Название </label>
                    <input id="add_title" class="w3-input w3-border form-control" name="title" type="text">
                </p>
                <p><label style="float: left">Описание</label>
                    <textarea id="add_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>
                <p><label style="float: left;">Общее количество номеров</label>
                    <input id="add_total_rooms" class="w3-input w3-border form-control" name="total_rooms" type="text">
                </p>
                <p><label style="float: left;">Занятых</label>
                    <input id="add_occupied" class="w3-input w3-border form-control" name="occupied" type="text">
                </p>
                <p><label style="float: left;">Свободных</label>
                    <input id="add_idle" class="w3-input w3-border form-control" name="idle" type="text">
                </p>
                <div id="cont_new_inp">

                </div>
                <input id="add_img" type="file" name="img_cattree" style="float: left;">
                <br>
                <br>
                <br>
                <input id="add_subcat_id" class="form-control" type="hidden" name="cat_three_id" value="<?php echo $cat_id ?>">
                <button id="add_pole_cat_lang" class="btn btn-success" data-lang="Английского языка">Добавить поле для следующего языка</button>
                <input id="add_three" class="w3-button w3-indigo" type="submit" value="button" style="float:right;">
            </form>
        </div>
    </div>
</div>
<!-- Modal edit -->
<div class="modals" id="modal_edit">
    <div class="maska close-modal" data-modalka_id="#modal_edit"></div>
    <div class="modal_content" >
        <span class="close_modal close-modal" data-modalka_id="#modal_edit">
            <i class="material-icons">close</i>
        </span>
        <div class="content">
            <h3 style="width: 95%; margin: 0 auto">Редактирования</h3><br>
            <form id="forma_update" class="w3-container" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p style="font-size: 18px">Поле для Русского языка</p>
                <p><label style="float: left;">Название </label>
                    <input id="update_title" class="w3-input w3-border form-control" name="title" type="text">
                </p>
                <p><label style="float: left">Описание</label>
                    <textarea id="update_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>

                <p><label style="float: left;">Общее количество номеров</label>
                    <input id="update_total_rooms" class="w3-input w3-border form-control" name="total_rooms" type="text">
                </p>
                <p><label style="float: left;">Занятых</label>
                    <input id="update_occupied" class="w3-input w3-border form-control" name="occupied" type="text">
                </p>
                <p><label style="float: left;">Свободных</label>
                    <input id="update_idle" class="w3-input w3-border form-control" name="idle" type="text">
                </p>
                <div id="cont_new_inp_edit">

                </div>
                <input id="update_img" class="w3-input w3-border form-control" name="img_name" type="hidden">
                <input id="update_id" class="form-control" type="hidden" name="id" >
                <input id="update_img_name" class="w3-button w3-white form-control" type="file" name="img_cattree" style="float: left;">
                <br><br>
                <button id="add_pole_edit_cat_lang" class="btn btn-success" data-lang="Английского языка">Редактировать следующего поле языка</button>
                <input id="update_cat_three" class="w3-button w3-indigo" type="submit" value="button" style="float:right;">
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/dist/js/script_sub_cat_tree.js"></script>
<script>
    $(document).ready(function(){




        // MODALS_UPDATE





        // DELETE
        $(".delete_cat").on('click', function(){
            var cat_id = $(this).data('id');
            var cat_img = $(this).data('img');
            $.ajax({
                method: "POST",
                url: "/admin/requestCatThree/delete_subcat_three",
                data: {'id': cat_id, 'img':cat_img},
            }).done(function(){
                window.location="/admin/podcatalog_three/<?php echo $cat_id ?>";
            });
        });
    });
</script>