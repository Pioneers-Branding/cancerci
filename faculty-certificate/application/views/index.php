<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Faculty Participation Certificate</title>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <style>
            @import url(http://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);
            * {
                margin: 0; padding: 0; font-family: roboto;
            }
            .cont { width: 195px; max-width: 195px; } 
            div.stars { display: inline-block; }       
            hr { margin: 10px 0px 40px 0px; border: none; border-bottom: 2px solid rgba(0, 0, 0, .3); }
            div.title { font-size: 2em; }        
            h1 span { font-weight: 300; color: #Fd4; }        
            .form-label { color: #111; font-size: 14px; font-weight: 500; }
        </style>
        <link href="<?= base_url(); ?>assets/css/sticky.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="main">
            <img src="http://miceideas.in/images/mi-logo.png" style=" background: rgba(255,255,255,0.8); width: 180px; position: fixed; bottom: 10px; right: 10px; padding: 10px; border-radius: 5px; box-shadow: 0px 0px 0px 5px rgba(255,255,255,0.2); ">
            <div class="container">
                <img src="http://cancerci.org/certificate-and-feedback/assets/images/header.png" class="img-responsive">
                <form method="POST" class="feedback-form" id="feedback-form" action="<?= base_url().'download'; ?>">
                    <h1>ACC & CCI 2020</h1>
                    <h3 style="margin-bottom: 0px">Faculty Participation Certificate</h3><hr>
                    <div class="form-group-1" style="position: relative;">
                        <label class="form-label">Your Name <span style="color: #d93025">*</span></label>
                        <input type="text" name="acc_name" id="acc_name" autocomplete="off" required/>
                        <div id="suggesstion-box"></div>
                    </div>
                    <div class="form-group-1">
                        <label class="form-label">Your Mobile No. </label>
                        <input type="text" name="acc_mobile_no" id="acc_mobile_no" />
                    </div>
                    <div class="form-group-1">
                        <label class="form-label">Your Email ID </label>
                        <input type="text" name="acc_email" id="acc_email"/>
                    </div>
                    <div class="form-submit">
                        <input type="submit" name="submit" id="submit" class="submit" value="Download Your Certificate"/>
                    </div>
                </form>
                <img src="http://cancerci.org/certificate-and-feedback/assets/images/footer.png" alt="Page Header" class="img-responsive" style="top: 7px; position: relative; ">
            </div>
        </div>
        <style>
            .mb-1{ margin-bottom: 10px; display: block; }
            input[type='radio'] {

                width: 15px;

                height: 15px;

                border-radius: 15px;

                top: 0px;

                left: 0px;

                position: relative;

                background-color: #d1d3d1;

                content: '';

                display: inline-block;

                visibility: visible;

                border: aliceblue;

                margin: 7px;

            }



            input[type='radio']:checked:after {

                width: 14px;

                height: 14px;

                border-radius: 15px;

                top: -1px;

                left: 0px;

                position: relative;

                background-color: #676db2;

                content: '';

                display: inline-block;

                visibility: visible;

            }

            span.rad-btn {

                display: inline;

                position: relative;

            }

            span.rad-btn input {

                visibility: hidden !important;

                height: 0px !important;

                width: 0px !important;

                z-index: 1;

                position: absolute;

            }

            span.rad-btn label {

                display: inline-block;

                background: #333;

                color: #fff;

                padding: 7px;

                text-align: center;

                width: 20px;

                z-index: 999;

                cursor: pointer;

            }

            span.rad-btn input[type='radio']:checked ~ label {

                background: #676db2;

            }

            span.rad-btn input[type='radio']:checked:after{

                display: none;

            }
            #country-list {
                float: left;
                list-style: none;
                margin-top: -32px;
                padding: 0;
                width: 100%;
                position: absolute;
                border:1px solid #bbb9b9;
            }
            #country-list li {
                padding: 7px 5px;
                background: #f0f0f0;
                border-bottom: #bbb9b9 1px solid;
                display: block;
                cursor: pointer;
                color: #000 !important;
            }
        </style>
        <script src="<?= base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/js/main.js" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                $("#acc_name").keyup(function(){
                    $.ajax({
                    type: "POST",
                    url: "<?= base_url().'get-ajax-name'; ?>",
                    data: 'search_keyword='+$(this).val(),
                    success: function(data){
                        $("#suggesstion-box").show();
                        $("#suggesstion-box").html(data);
                    }
                    });
                });
            });
            function selectCountry(val) {
                $("#acc_name").val(val);
                $("#suggesstion-box").hide();
            }
        </script>
    </body>
</html>