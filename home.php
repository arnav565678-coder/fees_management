<?php include 'db_connect.php';?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>FEES MANAGEMENT SYSTEM</title>

    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidebar {padding-top: 15px;}
            .sidebar a {font-size: 18px;}
        }
    </style>


</head>
<body>
<?php include 'side/nav_bar.html';
include 'side/side_bar.html';
include 'side/carousel.html';

?>









<link rel="stylesheet" type="text/css" href="dbms.css" />

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
    <div class="iconcontainer">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="iconbox">
                    <div class="iconbox-icon">
                        <span class="glyphicon glyphicon-book"></span>
                    </div>
                    <div class="featureinfo">
                        <h4 class="text-center">ABOUT</h4>
                        <p>
                           HCHS has accomplished another landmark in terms of bestowing pastoral care to pupils aiming at their holistic development. Here, we strive to provide an education that meets the needs of all children. Discipline and value-based education are the core areas of individual’s development which permeate the whole campus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="iconbox">
                    <div class="iconbox-icon">
                        <span class="glyphicon glyphicon-tasks"></span>
                    </div>
                    <div class="featureinfo">
                        <h4 class="text-center">ACADEMICS</h4>
                        <p>
                            Academics is the backbone of any good institution. They shape the young citizens for the future of country.Online tests are conducted to enhance the knowledge.Distribution of newspaper everyday, yearly Manorma, The Week to keep the students up to date with current affairs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="iconbox">
                    <div class="iconbox-icon">
                        <span class="glyphicon glyphicon-comment"></span>
                    </div>
                    <div class="featureinfo">
                        <h4 class="text-center">MESSAGE</h4>
                        <p>
                            It is not the strongest or the most intelligent who will survive but the one who can best manage change.The more things change, the more they remain the same.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="iconbox">
                    <div class="iconbox-icon">
                        <span class="glyphicon glyphicon-user"></span>
                    </div>
                    <div class="featureinfo">
                        <h4 class="text-center">VISION</h4>
                        <p>
                            HCHS aims to turn the young blank slates into global citizens and leaders of tomorrow and enrich them with vocational skills and take the school to never reached heights before
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>