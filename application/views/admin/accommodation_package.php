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
                                <th>Date</th>
                                <th>Name</th>
                                <th>Family name</th>
                                <th>Type of document</th>
                                <th>Document number</th>
                                <th>Contact number</th>
                                <th>Notes</th>
                                <th>Additional guests</th>
                                <th>Payment method</th>
                                <th>Package price</th>
                                <th>Additional price</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=1;
                            foreach ($data as $category): ?>
                                <tr>
                                    <td class="text-center"><?= $i?></td>
                                    <td class="txt-oflo"><?php echo $category->date ?></td>
                                    <td class="txt-oflo"><?php echo $category->name ?></td>
                                    <td class="txt-oflo"><?php echo $category->family_name ?></td>
                                    <td class="txt-oflo"><?php echo $category->type_of_document ?></td>
                                    <td class="txt-oflo"><?php echo $category->document_number ?></td>
                                    <td class="txt-oflo"><?php echo $category->contact_number ?></td>
                                    <td class="txt-oflo"><?php echo $category->notes ?></td>
                                    <td class="txt-oflo"><?php echo $category->additional_guests ?></td>
                                    <td class="txt-oflo"><?php echo $category->payment_method ?></td>
                                    <td class="txt-oflo"><?php echo $category->package_price ?></td>
                                    <td class="txt-oflo"><?php echo $category->additional_price ?></td>
                                    <td class="txt-oflo"><?php echo $category->total ?></td>
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
            url: "/admin/reservecontroller/delete_accommodation_package",
            data: {'id': cat_id},
        }).done(function(){
            window.location="/admin/accommodation";
        });
    });
</script>
       