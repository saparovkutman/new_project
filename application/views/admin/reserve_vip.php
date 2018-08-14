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
                        <h4 class="text-themecolor">Таблица бронирования</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Бронирование</li>
                            </ol>                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- News -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Бронирование</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>                             
                                            <th>Имя клиента</th>
                                            <th>Комнаты</th> 
                                            <th>Дата</th>
                                            <th>Время</th>
                                            <th>Сумма</th>
                                            <th>Тип чипа</th>
                                            <th>Тип отзыва</th>
                                            <th>Номер телефона</th>
                                            <th>Специальные требования</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;
                                    foreach ($data as $category): ?>
                                        <tr>
                                            <td class="text-center"><?= $i?></td>
                                            <td class="txt-oflo"><?php echo $category->client_name ?></td>
                                            <td class="txt-oflo"><?php echo $category->vip_booking ?></td>
                                            <td class="txt-oflo"><?php echo $category->date ?></td>
                                            <td class="txt-oflo"><?php echo $category->time ?></td>
                                            <td class="txt-oflo"><?php echo $category->total ?></td>
                                            <td class="txt-oflo"><?php echo $category->type_of_chip ?></td>
                                            <td class="txt-oflo"><?php echo $category->review_type ?></td>
                                            <td class="txt-oflo"><?php echo $category->number_phone ?></td>
                                            <td class="txt-oflo"><?php echo $category->requirements ?></td>
                                            <td>  <button type="button" class="btn btn-danger delete_cat" data-id="<?php echo $category->id?>">Delete</button></td>
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
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            // DELETE
            $(".delete_cat").on('click', function(){
                var cat_id = $(this).data('id');

                $.ajax({
                    method: "POST",
                    url: "/admin/reservecontroller/delete_vip",
                    data: {'id': cat_id},
                }).done(function(){
                    window.location="/admin/reserve_vip";
                });
            });
        </script>
       