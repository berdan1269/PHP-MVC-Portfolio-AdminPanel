<?php
require APPROOT.'/views/admincontrol/header.php';


?>


<!-- Content Row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <form action ="<?php echo URLROOT; ?>/adminInside/socialMedia" method="POST">

                <span>Facebook Adresini Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="facebook" value="<?php echo $data['post']->facebook ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['facebookError']; ?>
                </span>    






                <span>İnstagram Adresini Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="instagram" value="<?php echo $data['post']->instagram ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['instagramError']; ?>
                </span>    




                <span>Linkedin Adresini Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="linkedin" value="<?php echo $data['post']->linkedin ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['linkedinError']; ?>
                </span>     

                <button type="submit" class="btn-primary" id="submit">GÖNDER</button>

            </form>
        </div>
    </div>

</div>








</div>
</div>

</div>
<!-- /.container-fluid -->

</div>


<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
    <?php
    require APPROOT.'/views/admincontrol/footer.php';


    ?>
