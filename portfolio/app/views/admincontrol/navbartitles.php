<?php
require APPROOT.'/views/admincontrol/header.php';


?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <form action ="<?php echo URLROOT; ?>/adminInside/navbarTitles" method="POST">

                <span>İlk başlığı Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="firstTitle" value="<?php echo $data['post']->firsttitle ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['firstTitleError']; ?>
                </span>    



                <span>2.Başlığı  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="secondTitle" value="<?php echo $data['post']->secondtitle ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['secondTitleError']; ?>
                </span>    




                <span>3.Başlığı  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="thirdTitle" value="<?php echo $data['post']->thirdtitle ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['thirdTitleError']; ?>
                </span>     



                <span>4.Başlığı  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="fourthTitle" value="<?php echo $data['post']->fourthtitle ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['fourthTitleError']; ?>
                </span>    



                <span>5.Başlığı  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="fifthTitle" value="<?php echo $data['post']->fifthtitle ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['fifthTitleError']; ?>
                </span>    




                <button type="submit" class="btn-primary" id="submit">GÖNDER</button>

            </form>
        </div>
    </div>

</div>

</div>

</div>
<!-- /.container-fluid -->

</div>


<!-- End of Main Content -->

<?php
require APPROOT.'/views/admincontrol/footer.php';


?>
