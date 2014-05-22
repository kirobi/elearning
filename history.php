<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map</a></li>
                        <li><a href="#"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us</a></li>
                        <li class="nav-header">About US</li>
                        <li><a href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission</a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision</a></li>
                        <li  class="active"><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History</a></li>

                    </ul>
                </div>

            </div>

            <div class="span9">


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Learners College History</strong>
                </div>


                <p>
                <div class="hero-unit-2">

                    Learners College started as a community project in 1972 then known as Learners Institute, opening doors to its first students in 1978. LIT rapidly emerged as a leading institution in the country in the training of Certified Public Accountants.

It was upgraded to University status in 2007, and renamed Learners University College of Technology , a constituent college of Jomo Kenyatta University of Agriculture and Technology .

This institution operated as a constituent college for five years until 14th December, 2012 when it was upgraded to full university status after being granted a charter and renamed Dedan Kimathi University of Technology (DKUT). The grand ceremony of granting the charter was presided over by the president of the republic of Kenya, His Excellency Mwai Kibaki.

The Government appointed renowned educationist, scholar and education administrator Prof. S.O Keya as the first Chancellor. In addition the Government appointed a University Council composed of people with diverse experiences in various fields.

The chairman of the Council is Dr.Dulacha Galgallo Barako. Other members are Eng. John Kisenga, Mrs. Mercy Mwatua, Mr.Justus Mutiga, Mrs. Sophia Yiega, Mr. Irshad Ibrahim, The Vice Chancellor, Prof. P. N. Kioni, The Permanent Secretary Ministry of Finance, and The Permanent Secretary Ministry of Higher Education, Science and Technology.

DKUT is already implementing an ambitious physical facilities development programme to support the realization of her Vision and Mission. The University has in place a magnificient Resource Centre, which is a multi-purpose facility whose two phases are complete now. It comprises Lecture theatres, Library, Laborotaries and offices for both administrative and academic staff.

In line with her vision of being a premier technology university excelling in quality Education, Research and Technology transfer, DKUT has put up expansive and well equipped Engineering workshops and supporting Physics and Chemistry laboratories.

Subsequent phases of development comprise two academic blocks, one to house ICT labs and lecture rooms . In addition, the university has constructed a spacious and magnificent dining facility and diverse sporting fields for her students.

The management of the school envisages that this institution will emerge as a unique technological University with a major impact on national development when it implements most of her development plans embedded in her vision whose blueprint is vision 2030.
                </div>
                </p>


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


