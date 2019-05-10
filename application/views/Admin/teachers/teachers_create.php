
<title>Müəllimlər</title>
<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>



<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">
            <a href="<?php echo base_url('himalaY_muellimler') ?>" class="btn btn-info btn-md">
                <span class="glyphicon glyphicon-plus-sign"></span> Bütün Müəllimlər
            </a>
            <br>
            <br>
            <div class="col-md-8">
                <form action="<?php echo base_url('') ?>" method="POST" enctype="multipart/form-data">

                    <label for="">Ad</label>
                    <input type="text" class="form-control" name="teacher_name"><br>

                    <label for="">Soyad</label>
                    <input type="text" class="form-control" name="teacher_surname"><br>

                    <label for="">E-adress</label>
                    <input type="text" class="form-control" name="teacher_email"><br>

                    <label for="">Telefon</label>
                    <input type="text" class="form-control" name="teacher_number"><br>

                    <label for="">Dərs</label>
                    <input type="text" class="form-control" name="teacher_lesson"><br>

                    <label for="">İxtisas</label>
                    <select name="teacher_specialty" id="">
                        <?php  ?>
                            <option value="<?php  ?>"><?php  ?></option>
                        <?php ?>
                    </select>
                    <br>

                    <label for="">Haqqında</label>
                    <textarea style="resize: none" class="form-control ckeditor" name="teacher_about" id="" cols="30" rows="10" placeholder=""></textarea><br>

                    <label for="">Şəkil</label>
                    <input type="file" class="form-control" name="teacher_photo"><br>

                    <input type="submit" value="Əlavə et" class="btn btn-info">


                </form>
            </div>


        </div>
    </div>
</div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>