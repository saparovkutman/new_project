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
                        
                        <h4 class="text-themecolor">Blank Page</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>                           
                        </div>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary open-modal" data-modalka_id="#modal_add">Add</button>
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
                                        <th>Тип Пакета</th>
                                        <th>Цена</th>
                                        <th>Пакет текст 1</th>
                                        <th>Пакет текст 2</th>
                                        <th>Пакет текст 3</th>
                                        <th>Загаловок заказа</th>
                                        <th>Загаловок Билета</th>
                                        <th>Тип Билета</th>
                                        <th>Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($data as $result):
                                    $i=1;?>
                                    <tr>
                                        <td><?= $i++;?></td>
                                        <td><?= $result->type_package?></td>
                                        <td><?= $result->price?></td>
                                        <td><?= $result->package_includes_one?></td>
                                        <td><?= $result->package_includes_two?></td>
                                        <td><?= $result->package_includes_three?></td>
                                        <td><?= $result->book_now_text?></td>
                                        <td><?= $result->ticket_text?></td>
                                        <td><?= $result->ticket_type?></td>
                                        <td><button id="sub_id<?= $result->id?>" type="button" class="btn btn-success open-modal edit-subcat"
                                                    data-modalka_id="#modal_edit"
                                                    data-sub_id="<?= $result->id?>"
                                                    data-type_package="<?= $result->type_package?>"
                                                    data-type_package1="<?= $result->en_type_package?>"
                                                    data-type_package2="<?= $result->chi_type_package?>"
                                                    data-price="<?= $result->price?>"
                                                    data-package_includes_one="<?= $result->package_includes_one?>"
                                                    data-package_includes_one1="<?= $result->en_package_includes_one?>"
                                                    data-package_includes_one2="<?= $result->chi_package_includes_one?>"
                                                    data-package_includes_two="<?= $result->package_includes_two?>"
                                                    data-package_includes_two1="<?= $result->en_package_includes_two?>"
                                                    data-package_includes_two2="<?= $result->chi_package_includes_two?>"
                                                    data-package_includes_three="<?= $result->package_includes_three?>"
                                                    data-package_includes_three1="<?= $result->en_package_includes_three?>"
                                                    data-package_includes_three2="<?= $result->chi_package_includes_three?>"
                                                    data-book_now_text="<?= $result->book_now_text?>"
                                                    data-book_now_text1="<?= $result->en_book_now_text?>"
                                                    data-book_now_text2="<?= $result->chi_book_now_text?>"
                                                    data-ticket_text="<?= $result->ticket_text?>"
                                                    data-ticket_text1="<?= $result->en_ticket_text?>"
                                                    data-ticket_text2="<?= $result->chi_ticket_text?>"
                                                    data-ticket_type="<?= $result->ticket_type?>"
                                                    data-ticket_type1="<?= $result->en_ticket_type?>"
                                                    data-ticket_type2="<?= $result->chi_ticket_type?>"
                                            >Update</button>
                                    <button type="button" class="btn btn-danger sub_catOne_delete" data-sub_cat_id="<?php echo $result->id?>">Delete</button>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        
<div class="modals" id="modal_add">
    <div class="maska close-modal" data-modalka_id="#modal_add"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_add">
            <i class="material-icons">close</i>
        </span>
        <div class="content">
            <h3 style="width: 95%; margin: 0 auto">Добавления</h3><br>
            <form id="sub_catOne_forma_add" class="w3-container"  action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p style="font-size: 18px">Поле для Русского языка</p>
                <p>
                    <label style="float: left;">Тип Пакета</label>
                    <input class="w3-input w3-border form-control" name="type_package" type="text">
                </p>
                <p>
                    <label style="float: left">Цена Пакета</label>
                    <input class="w3-input w3-border form-control" name="price" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета тексе 1</label>
                    <input class="w3-input w3-border form-control" name="package_includes_one" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета текс 2</label>
                    <input class="w3-input w3-border form-control" name="package_includes_two" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета текс 3</label>
                    <input class="w3-input w3-border form-control" name="package_includes_three" type="text">
                </p>
                <p>
                    <label style="float: left">Загаловок заказа</label>
                    <input class="w3-input w3-border form-control" name="book_now_text" type="text">
                </p>
                <p>
                    <label style="float: left">Загаловок заказа</label>
                    <input class="w3-input w3-border form-control" name="ticket_text" type="text">
                </p>
                <p>
                    <label style="float: left">Тип Билета</label>
                    <input class="w3-input w3-border form-control" name="ticket_type" type="text">
                </p>
                <br>
                <div id="cont_subcat_new_inp">

                </div>
                <input id="cat_one_id" class="w3-input w3-border form-control" name="packet_id" type="hidden" value="<?php echo $cat_one_id;?>">
                <br>
                <br>

                <button id="add_pole_subcat_lang" class="btn btn-success" data-lang="Английского языка">Добавить поле для следующего языка</button>
                <input id="add_sub_cat_one" class="w3-button w3-indigo" type="submit" value="button" style="float:right;">
            </form>
        </div>
    </div>
</div>

<div class="modals" id="modal_edit">
    <div class="maska close-modal" data-modalka_id="#modal_edit"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_edit">
            <i class="material-icons">close</i>
        </span>
        <div class="content">
            <h3 style="width: 95%; margin: 0 auto">Редактирования</h3><br>
            <form id="sub_catOne_forma_edit" class="w3-container"  action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p style="font-size: 18px">Поле для Русского языка</p>
                <p>
                    <label style="float: left;">Тип Пакета</label>
                    <input id="type_package" class="w3-input w3-border form-control" name="type_package" type="text">
                </p>
                <p>
                    <label style="float: left">Цена Пакета</label>
                    <input id="price" class="w3-input w3-border form-control" name="price" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета тексе 1</label>
                    <input id="package_includes_one" class="w3-input w3-border form-control" name="package_includes_one" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета текс 2</label>
                    <input id="package_includes_two" class="w3-input w3-border form-control" name="package_includes_two" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета текс 3</label>
                    <input id="package_includes_three" class="w3-input w3-border form-control" name="package_includes_three" type="text">
                </p>
                <p>
                    <label style="float: left">Загаловок заказа</label>
                    <input id="book_now_text" class="w3-input w3-border form-control" name="book_now_text" type="text">
                </p>
                <p>
                    <label style="float: left">Загаловок заказа</label>
                    <input id="ticket_text" class="w3-input w3-border form-control" name="ticket_text" type="text">
                </p>
                <p>
                    <label style="float: left">Тип Билета</label>
                    <input id="ticket_type" class="w3-input w3-border form-control" name="ticket_type" type="text">
                </p>
                <br>
                <div id="cont_subcat_new_edit">

                </div>
                <input id="sub_id" class="w3-input w3-border form-control" name="sub_id" type="hidden">
                

                <br>
                <br>
                <button id="add_pole_subcat_lang_edit" class="btn btn-success" data-lang="Английского языка">Добавить поле для следующего языка</button>
                <input id="edit_sub_cat_one" class="w3-button w3-indigo" type="submit" value="button" style="float:right;">
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/dist/js/script_sub_cat_one.js"></script>