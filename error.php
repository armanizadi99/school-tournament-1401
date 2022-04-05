<?php
function error($errorText, $gobackURL) {
$htmlError="
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content='Free form creator'>
    <meta name='keywords' content='form, free form, form creator, create form'>
    <meta name='author' content='Hamidreza Izadi & Ali Bolouki'>
    <!--Title bar-->
    <link rel='shortcut icon' href='images/title-bar.png'/>
    <title>Unix Form | Error</title>
    <!--CSS3-->
    <link rel='stylesheet' type='text/css' href='style-error.css'/>
    <!--Bootstrap4-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' integrity='sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l' crossorigin='anonymous'>
    <!--Fonts-->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200;400&display=swap' rel='stylesheet'>
</head>
<body>
    <main>
        <div class='container-fluid'>
            <div class='row'>
                <div id='text-con' class='col-12'>
                    <h1 class='col-10 text-md-right text-center'>Oh!... An <span class='text-danger'>error</span> has occurred;</h1>
                    <p class='col-10 text-md-right text-center'>$errorText <a href=$gobackURL>Go back</a> </p>
                </div>
            </div>
        </div>
    </main>
    <!--Bootstrap4-->
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns' crossorigin='anonymous'></script>
</body>
</html>";
return $htmlError;
}
?>