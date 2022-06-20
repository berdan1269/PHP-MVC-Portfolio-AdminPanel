<?php
require APPROOT.'/views/admincontrol/header.php';


?>

<!-- End of Topbar -->

<!-- Begin Page Content -->

<!-- Content Row -->



<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <form action ="<?php echo URLROOT; ?>/adminInside/firstTitleInside" method="POST">

                <span>İlk başlığı Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="firstTitle" value="<?php echo $data['post']->firsttitle ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['firstTitleError']; ?>



                </span>    



                <span>1.İçeriği Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="firstContent" value="<?php echo $data['post']->firstcontent ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['firstContentError']; ?>
                </span>    




                <span>2.Başlığı  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="secondTitle" value="<?php echo $data['post']->secondtitle ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['secondTitleError']; ?>
                </span>     



                <span>2.içeriği  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="secondContent" value="<?php echo $data['post']->secondcontent ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['secondContentError']; ?>
                </span>    



                <span>Doğum gününü Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="birthday" value="<?php echo $data['post']->birthday ?>" >
                <br>
                
                  <span>Site Adını Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="website" value="<?php echo $data['post']->website ?>" >
                <br>

                  <span> Telefon Numarasını Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="phone" value="<?php echo $data['post']->phone ?>" >
                <br>

                  <span>Şehiri  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="city" value="<?php echo $data['post']->city ?>" >
                <br>

                  <span>Yaşı Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="age" value="<?php echo $data['post']->age ?>" >
                <br>

                  <span>Dereceyi  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="degree" value="<?php echo $data['post']->degree ?>" >
                <br>

                  <span>Email adresini  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="emailone" value="<?php echo $data['post']->emailone ?>" >
                <br>

                  <span>Freelance çalışmayı Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="freelance" value="<?php echo $data['post']->freelance ?>" >
                <br>

                  <span>3.içeriği  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="thirdContent" value="<?php echo $data['post']->thirdcontent ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['thirdContentError']; ?>
                </span>    

                  <span>3.Başlığı  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="thirdTitle" value="<?php echo $data['post']->thirdtitle ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['thirdTitleError']; ?>
                </span>    

                  <span>4.içeriği  Düzenlemek İçin Yeni Adres Giriniz</span>


                <input  class="form-control" type="text" name="fourthContent" value="<?php echo $data['post']->fourthcontent ?>" >
                <br>
                <span class="invalidFeedBack">
                    <?php echo $data['fourthContentError']; ?>
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

<div></div>
<!-- End of Main Content -->



    <?php
    require APPROOT.'/views/admincontrol/footer.php';


    ?>
