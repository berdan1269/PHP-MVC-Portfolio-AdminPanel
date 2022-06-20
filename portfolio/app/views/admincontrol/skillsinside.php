<?php
require APPROOT.'/views/admincontrol/header.php';


?>

<!-- End of Topbar -->

            <!-- Begin Page Content -->

            <!-- Content Row -->


            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">


                        <?php foreach ($data['post'] as $post): ?>
                            <form action="<?php echo URLROOT . "/adminInside/skillsUpdate/" . $post->id ?> "
                                  method="POST">

                                <span>Yetenekleri düzenlemek için yazınız.</span>


                                <input class="form-control" type="text" name="skills_name"
                                       value="<?php echo $post->skills_name; ?>">
                                <br>
                                <span class="invalidFeedBack">
                    <?php echo $data['skills_name_error']; ?>

                            <input class="form-control" type="text" name="skills_score"
                                   value="<?php echo $post->skills_score; ?>">
                            <span class="invalidFeedBack">
                    <?php echo $data['skills_score_error']; ?>

                                <br>


                        <button type="submit" class="btn-block btn-primary" id="submit">Yeteneği Güncelle</button>
                            <br>

                </span>
                            </form>

                            <button onclick="window.location.href='<?php echo URLROOT . "/adminInside/deleteskill/".$post->id ?> '  "
                                    type="submit" class="btn-danger btn-block" id="submit">Yeteneği sil
                            </button>

                            <br>
                            <br>
                        <?php endforeach; ?>


                    </div>

                </div>


                <button onclick="window.location.href='<?php echo URLROOT . "/adminInside/newskills " ?> '  "
                        type="submit" class="btn-success btn-block btn-lg" id="submit">Yeni bir yetenek ekle
                </button>


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
