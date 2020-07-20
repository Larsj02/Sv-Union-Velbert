<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sv Union Velbert</title>

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Eintrag Erstellen</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Vollständiger Name</label>
                                    <input class="input--style-4" type="text" name="full_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Adresse</label>
                                    <input class="input--style-4" type="text" name="adress">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Spiel</label>
                                    <input class="input--style-4" type="text" name="spiel_name">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Telefonnummer</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Senden</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php
$currentDateTime = date('d.m.Y H:i:s');
$file_name = "data\Data.txt";
              
if(isset($_POST['full_name']))
{
$data=$_POST['full_name'] . ", ";
$fp = fopen($file_name, 'a');
fwrite($fp, $data);
fclose($fp);
}
if(isset($_POST['adress']))
{
$data=$_POST['adress'] . ", ";
$fp = fopen($file_name, 'a');
fwrite($fp, $data);
fclose($fp);
}
if(isset($_POST['spiel_name']))
{
$data=$_POST['spiel_name'] . ", ";
$fp = fopen($file_name, 'a');
fwrite($fp, $data);
fclose($fp);
}
if(isset($_POST['phone']))
{
$data=$_POST['phone'] . ", ";
$fp = fopen($file_name, 'a');
fwrite($fp, $data);
fclose($fp);
}
$data=$currentDateTime . "\n";
$fp = fopen($file_name, 'a');
fwrite($fp, $data);
fclose($fp);
?>