<?php
require APPROOT.'/views/admincontrol/header.php';


?>



<div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <form action ="<?php echo URLROOT; ?>/adminInside/newskills" method="POST">

                            <span>Yetenek Adı İçin Yeni Adres Giriniz</span>


                            <input  class="form-control" type="text" name="skills_name" value="" >
                            <br>
                            <span class="invalidFeedBack">
                    <?php echo $data['skills_name_error']; ?>
                </span>






                            <span>Yetenek Yüzdesi İçin Yeni Bir Değer Giriniz</span>


                            <input  class="form-control" type="text" name="skills_score" value="" >
                            <br>
                            <span class="invalidFeedBack">
                    <?php echo $data['skills_score_error']; ?>
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
<?php
require APPROOT.'/views/admincontrol/footer.php';


?>
