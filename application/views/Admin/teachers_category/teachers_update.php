<title>Müəllimlər</title>
<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>




<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">
            <a href="<?php echo base_url('') ?>" class="btn btn-info btn-md">
                <span class="glyphicon glyphicon-plus-sign"></span> Bütün Müəllimlər
            </a>
            <br>
            <br>
            <div class="col-md-8">
                <form action="<?php echo base_url('') ?>" method="POST" enctype="multipart/form-data">

                    <label for="">Ad</label>
                    <input value="<?php echo $teacher["teacher_name"] ?>" type="text" class="form-control" name="teacher_name"><br>

                    <label for="">Soyad</label>
                    <input value="<?php echo $teacher["teacher_surname"] ?>" type="text" class="form-control" name="teacher_surname"><br>

                    <label for="">Dərəcə</label>
                    <input value="<?php echo $teacher["teacher_position"] ?>" type="text" class="form-control" name="teacher_position"><br>



                    <label for="">Kafedra</label>
                    <select name="teacher_specialty" id="" class="form-control" style="height: 40px">
                        <option value="<?php echo $teacher["department_category"]?>"><?php echo $teacher["department_category"] ?></option>
                        <?php foreach ($categories as $category){ ?>

                            <?php if ($teacher["department_category"] != $category["category_name"]){?>
                                <option value="<?php echo $category["category_name"]?>"><?php echo $category["category_name"] ?></option>
                            <?php }?>

                        <?php }?>

                    </select>
                    <br>

                    <label for="">Haqqında</label>
                    <textarea style="resize: none" class="form-control ckeditor" name="teacher_about" id="" cols="30" rows="10" placeholder=""></textarea><br>

                    <label for="">Şəkil</label>
                    <input type="file" class="form-control" name="teacher_photo"><br>

                    <input type="submit" value="Əlavə et" class="btn btn-info">



                </form>
            </div>
            <div class="col-md-4">
                <img style="width: 400px;height: inherit;" src="<?php echo base_url(''); ?>" alt="">

            </div>


        </div>
    </div>
</div>

<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>