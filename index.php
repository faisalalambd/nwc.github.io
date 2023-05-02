<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("admin/config.php");
//error_reporting(0); 
?>




<!-- ############################## Big Banner ############################## -->
<section class="header-slider-area">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            $sql = "SELECT * FROM bigBanner order by id desc";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="item active">
                        <div class="single-slide-item slide-1" style="background-image:url(admin/assets/image/<?php echo $row['image'] ?>); position: initial;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6"></div><!-- /.col-->
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="single-slide-item-content">
                                            <h2><?php echo $row['title'] ?></h2>
                                            <p><?php echo $row['paragraph'] ?></p>
                                            <button type="button" class="slide-btn">
                                                book now
                                            </button>
                                            <button type="button" class="slide-btn">
                                                chat with doctor
                                            </button>
                                        </div><!-- /.single-slide-item-content-->
                                    </div><!-- /.col-->
                                </div><!-- /.row-->
                            </div><!-- /.container-->
                        </div><!-- /.single-slide-item-->
                    </div><!-- /.item .active-->
            <?php }
            } ?>
        </div><!-- /.carousel-inner-->

        <!-- Controls -->

    </div><!-- /.carousel-->

</section>



<!-- ############################## As Seen On ############################## -->
<section class="clients" style="background-color: #ccc;">
    <div class="container">
        <div class="section-header text-center">
            <h4 style="color: #E87F7E; font-size: 0.9rem; text-transform: uppercase; ">As Seen On</h4>
        </div>
        <div class="clients-area" style="padding: 0;">
            <div class="owl-carousel owl-theme" id="client">
                <?php
                $sql = "SELECT * FROM asSeenOn order by id desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="item">
                            <a href="#">
                                <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="brand-image" />
                            </a>
                        </div>
                        <!--/.item-->
                <?php }
                } ?>
            </div>
            <!--/.owl-carousel-->
        </div>
        <!--/.clients-area-->
    </div>
    <!--/.container-->

</section>



<!-- ############################## Our Story ############################## -->
<section class="about-us">
    <div class="container">
        <div class="about-us-content">
            <?php
            $sql = "SELECT * FROM  ourStory order by id desc";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-about-us">
                                <div class="about-us-img">
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="about images">
                                </div>
                                <!--/.about-us-img-->
                            </div>
                            <!--/.single-about-us-->
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6">
                            <div class="single-about-us">
                                <div class="about-us-txt">
                                    <h4 style="color: #E87F7E; font-size: 0.9rem; text-transform: uppercase; ">Our Story</h4>
                                    <h2 style="color: #1E3D64; font-size: 2.4em;"><?php echo $row['title'] ?></h2>
                                    <p><?php echo $row['paragraph'] ?></p>
                                    <div class="project-btn">
                                        <a href="#" class="project-view">learn more</a>
                                    </div>
                                </div>
                                <!--/.about-us-txt-->
                            </div>
                            <!--/.single-about-us-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
            <?php }
            } ?>
        </div>
        <!--/.about-us-content-->
    </div>
    <!--/.container-->

</section>



<!-- ############################## All In One Service ############################## -->
<section class="we-do" style="padding-bottom: 5rem;">
    <div class="container">
        <div class="we-do-details">

            <?php
            $sql = "SELECT * FROM  allInOne WHERE id=1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>

                    <div class="section-header text-center">
                        <h4 style="color: #E87F7E; font-size: 0.9rem; text-transform: uppercase;">All In One Service</h4>
                        <h2 style="color: #1E3D64; font-size: 2.4em;"><?php echo $row['title'] ?></h2>
                        <p><?php echo $row['paragraph'] ?></p>
                    </div>

            <?php }
            } ?>

            <div class="we-do-carousel">
                <div class="row">
                    <div class="col-sm-3 col-lg-3 col-md-3 col-xs-12">
                        <div class="single-we-do-box text-center">

                            <?php
                            $sql = "SELECT * FROM  allInOneService WHERE id<4";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                            ?>

                                    <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                                        <div class="we-do-description">
                                            <div class="we-do-info">
                                                <div class="we-do-topics">
                                                    <h2 style="font-size: 1.7em; color: #1E3D64;">0<?php echo $row['id'] ?></h2>
                                                    <h3 style="font-size: 1.7em; color: #1E3D64;"><?php echo $row['title'] ?></h3>
                                                </div>
                                            </div>
                                            <div class="we-do-comment">
                                                <p><?php echo $row['paragraph'] ?></p>
                                            </div>
                                            <h2>
                                                <a href="#" style="color: #E87F7E; font-size: 16px;">
                                                    Learn More &#8594
                                                </a>
                                            </h2>
                                        </div>
                                        <!--/.we-do-description-->
                                    </div>

                            <?php }
                            } ?>

                        </div>
                        <!--/.single-we-do-box-->
                    </div>
                    <!--/.col-->

                    <?php
                    $sql = "SELECT * FROM  allInOne WHERE id=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                    ?>

                            <div class="col-sm-6 col-xs-12">
                                <div class="single-we-do-box text-center">
                                    <div class="we-do-description">
                                        <div class="we-do-info">
                                            <div class="we-do-img">
                                                <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="image of business" width="100%" />
                                            </div>
                                            <!--/.we-do-img-->

                                        </div>
                                        <!--/.we-do-info-->

                                    </div>
                                    <!--/.we-do-description-->
                                </div>
                                <!--/.single-we-do-box-->
                            </div>

                    <?php }
                    } ?>


                    <!--/.col-->
                    <div class="col-sm-3 col-lg-3 col-md-3 col-xs-12">
                        <div class="single-we-do-box text-center">

                            <?php
                            $sql = "SELECT * FROM  allInOneService WHERE id>3";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                            ?>

                                    <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                                        <div class="we-do-description">
                                            <div class="we-do-info">
                                                <div class="we-do-topics">
                                                    <h2 style="font-size: 1.7em; color: #1E3D64;">0<?php echo $row['id'] ?></h2>
                                                    <h3 style="font-size: 1.7em; color: #1E3D64;"><?php echo $row['title'] ?></h3>
                                                </div>
                                            </div>
                                            <div class="we-do-comment">
                                                <p><?php echo $row['paragraph'] ?></p>
                                            </div>
                                            <h2>
                                                <a href="#" style="color: #E87F7E; font-size: 16px;">
                                                    Learn More &#8594
                                                </a>
                                            </h2>
                                        </div>
                                        <!--/.we-do-description-->
                                    </div>

                            <?php }
                            } ?>


                        </div>
                        <!--/.single-we-do-box-->
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="project-btn">
                        <a href="service.php" class="project-view">view all services</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>



<!-- ############################## The Expert ############################## -->
<section class="team" style="background-color: #e8f4f4;">
    <div class="container">
        <div class="team-details" style="padding: 4rem 0;">
            <div class="section-header text-center">
                <h4 style="color: #E87F7E; font-size: 0.9rem; text-transform: uppercase;">The Expert</h4>
                <h2 style="color: #1E3D64; font-size: 2.4em;">Meet Our Specialist Leader</h2>
                <p>Maecenas imperdiet ac lacus ac convallis. In urna lorem, pellentesque id sagittis lacinia, <br> gravida massa, quisque ac vestibulum metus, vitae hendrerit.</p>
            </div>
            <div class="team-card" style="padding-top: 0;">
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel team-carousel">

                            <?php
                            $sql = "SELECT * FROM theExpert order by id ASC";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                            ?>

                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single-team-box" style="background-image:url(admin/assets/image/<?php echo $row['image'] ?>);">
                                            <div class="team-box-inner">
                                                <h3><?php echo $row['name'] ?></h3>
                                                <p class="team-meta"><?php echo $row['designation'] ?></p>
                                                <p class="team-meta"><?php echo $row['consultation'] ?></p>
                                                <p class="team-meta"><?php echo $row['experience'] ?></p>
                                            </div>
                                            <!--/.team-box-inner-->
                                        </div>
                                        <!--/.single-team-box-->
                                    </div>
                                    <!--.col-->

                            <?php }
                            } ?>

                        </div>
                        <!--/.team-carousel-->
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!--/.team-card-->
        </div>
        <!--/.team-details-->
    </div>
    <!--/.container-->
</section>



<!-- ############################## Featured Product ############################## -->
<section class="about-us">
    <div class="container">
        <div class="about-us-content">

            <?php
            $sql = "SELECT * FROM featuredProduct order by id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="single-about-us">
                                <div class="about-us-img">
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="about images">
                                </div>
                                <!--/.about-us-img-->
                            </div>
                            <!--/.single-about-us-->
                        </div>
                        <!--/.col-->
                        <div class="col-sm-4">
                            <div class="single-about-us">
                                <div class="about-us-txt">
                                    <h4 style="color: #E87F7E; font-size: 0.9rem; text-transform: uppercase; ">Featured Product</h4>
                                    <h2 style="color: #1E3D64; font-size: 2.4em;"><?php echo $row['title'] ?></h2>
                                    <p><?php echo $row['paragraph'] ?></p>
                                    <p><?php echo $row['description'] ?></p>
                                    <div class="project-btn">
                                        <a href="#" class="project-view">learn more</a>
                                    </div>
                                </div>
                                <!--/.about-us-txt-->
                            </div>
                            <!--/.single-about-us-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->

            <?php }
            } ?>

        </div>
        <!--/.about-us-content-->
    </div>
    <!--/.container-->

</section>



<!-- ############################## Because Everyone Deserve ############################## -->
<section class="news" style="background-color: #e8f4f4; padding-top: 4rem;">
    <div class="container">
        <div class="news-details">
            <div class="section-header text-center" style="margin-bottom: 2rem;">
                <h4 style="color: #E87F7E; font-size: 0.9rem; text-transform: uppercase;">Because Everyone Deserve</h4>
                <h2 style="color: #1E3D64; font-size: 2.4em;">Good Quality Nature Skin Treatment</h2>
                <p>Maecenas imperdiet ac lacus ac convallis. In urna lorem, pellentesque id sagittis lacinia, <br> gravida massa, quisque ac vestibulum metus, vitae hendrerit.</p>
            </div>
            <!--/.section-header-->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">

                        <?php
                        $sql = "SELECT * FROM everyoneDeserve order by id ASC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                        ?>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="margin-top: 2rem;">
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                        <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="image" style="width: 100%;" />
                                    </div>
                                    <div class="col-9 col-sm-9 col-md-9 col-lg-9">
                                        <h3 style="color: #1E3D64; font-size: 1.6em;"><?php echo $row['name'] ?></h3>
                                        <h5><?php echo $row['paragraph'] ?></h5>
                                    </div>
                                </div>

                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
        <!--/news-details-->
    </div>
    <!--/.container-->
</section>



<!-- ############################## Our Procedures & Our Treatments ############################## -->
<div class="about-history">
    <div class="container">
        <div class="about-history-content">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                    <div class="single-about-history">

                        <div class="about-history-txt">

                            <h2 style="color: #1E3D64; font-size: 1.9em;">Our Procedures</h2>

                            <hr style="border: 1px solid #E87F7E;width: 15%; margin-top: -1rem;">

                            <div class="panel-group" id="accordion">

                                <?php
                                $sql = "SELECT * FROM ourProcedures order by id ASC";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                ?>


                                        <div class="panel panel-default" style="border: none;border-bottom: 1px solid #ccc;">

                                            <div class="panel-heading">
                                                <h3 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row['id'] ?>"><?php echo $row['title'] ?> <span style="right: 35px;position: absolute;">&#9660;</span></h3>
                                            </div>

                                            <div id="<?php echo $row['id'] ?>" class="panel-collapse collapse">
                                                <p style="padding: 1rem;"><?php echo $row['paragraph'] ?></p>
                                            </div>

                                        </div>

                                <?php }
                                } ?>


                            </div>

                        </div>

                    </div>

                </div>


                <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                    <div class="single-about-history">

                        <div class="about-history-txt">

                            <h2 style="color: #1E3D64; font-size: 1.9em;">Our Treatments</h2>

                            <hr style="border: 1px solid #E87F7E;width: 15%; margin-top: -1rem;">

                            <div class="panel-group" id="accordion">

                                <?php
                                $sql = "SELECT * FROM ourTreatments order by id ASC";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                ?>

                                        <div class="panel panel-default" style="border: none;border-bottom: 1px solid #ccc;">

                                            <div class="panel-heading">
                                                <h3 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#F<?php echo $row['id'] ?>"><?php echo $row['title'] ?> <span style="right: 35px;position: absolute;">&#9660;</span></h3>
                                            </div>

                                            <div id="F<?php echo $row['id'] ?>" class="panel-collapse collapse">
                                                <p style="padding: 1rem;"><?php echo $row['paragraph'] ?></p>
                                            </div>

                                        </div>

                                <?php }
                                } ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<div class="about-history" style="padding-top: 0;">
    <div class="container" style="width: 90rem;">

        <section id="new-project" class="new-project" style="padding: 2rem 0rem; background-color: #1e3d64;">
            <div class="container">
                <div class="new-project-details">
                    <div class="row">
                        <div class="col-md-10 col-sm-8">
                            <div class="single-new-project">
                                <h3 style="font-size: 2.4em;">Get Product Sample & Free <br> Consultation With Our Experts</h3>
                            </div>
                            <!-- /.single-new-project-->
                        </div>
                        <!-- /.col-->
                        <div class="col-md-2 col-sm-4">
                            <div class="single-new-project">
                                <a href="#" class="slide-btn" style="padding: 1rem 2rem; margin-top: 2rem;">sign up now</a>
                            </div>
                            <!-- /.single-new-project-->
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- /.row-->
                </div>
                <!-- /.new-project-details-->
            </div>
            <!-- /.container-->
        </section>

    </div>

</div>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>