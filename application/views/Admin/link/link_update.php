<title>Linklər</title>
<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>

    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
        <div class="row">

            <div class="right">


                <br>
                <br>

                <div class="col-md-8">

                    <form action="<?php echo base_url('') ?>" method="POST">
                        <label for="">Link Başlıq</label>
                        <input type="text" class="form-control" name="link_title" value="<?php ?>">

                        <label for="">Link URL</label>
                        <textarea name="link_url" class="ckeditor" id="" cols="30" rows="10">

                            <?php  ?>

                    </textarea>
                        <br>
                        <input type="submit" class="btn btn-info" value="Əlavə et">
                    </form>

                </div>



            </div>
        </div>
    </div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>