<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ACC & CCI 2020 Workshop Participation Certificate</title>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
        <style>
            @import url(http://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);
            * {
                margin: 0; padding: 0; font-family: roboto;
            }
            hr { margin: 10px 0px 40px 0px; border: none; border-bottom: 2px solid rgba(0, 0, 0, .3); }
            div.title { font-size: 2em; }        
            h1 span { font-weight: 300; color: #Fd4; }        
            .form-label { color: #111; font-size: 14px; font-weight: 500; }
        </style>
    </head>
    <body>
        <div class="main">
            <img src="http://miceideas.in/images/mi-logo.png" style=" background: rgba(255,255,255,0.8); width: 180px; position: fixed; bottom: 10px; right: 10px; padding: 10px; border-radius: 5px; box-shadow: 0px 0px 0px 5px rgba(255,255,255,0.2); ">
            <div class="container">
                <img src="http://cancerci.org/certificate-and-feedback/assets/images/header.png" class="img-responsive">
                <form method="POST" class="feedback-form" id="feedback-form" action="<?= base_url(); ?>download">
                    <h1>ACC & CCI 2020</h1>
                    <h3 style="margin-bottom: 0px">Workshop Participation Certificate</h3><hr>
                    <div class="form-group-1" style="position: relative;">
                        <label class="form-label">Your Name <span style="color: #d93025">*</span></label>
                        <input type="text" name="register_name" id="register_name" autocomplete="off" required/>
                        <div id="suggesstion-box"></div>                        
                    </div>
                    <div class="form-group-1" style="position: relative;">
                        <label class="form-label">Your Email ID </label>
                        <input type="text" name="register_email" id="register_email" />
                    </div>
                    <div class="form-group-1">
                        <label class="form-label">Your Registration ID </label>
                        <input type="text" name="registered_id" id="registered_id" />
                    </div>
                    <div class="form-group-1" style="position: relative;">
                        <label class="form-label mb-1">Select Your Workshop <span style="color: #d93025">*</span></label>
                        <img src="<?= base_url(); ?>assets/images/dropdown.png" style=" position: absolute; right: 5px; top: 45px;">
                        <select class="" required="" name="workshop_type">
                            <optgroup label="Conference Workshop">
                                <option value="radiation-oncology-workshop">Newer Avenues in Radiation Oncology Workshop</option>
                                <option value="surgical-oncology-workshop">Live Robotic Surgical Oncology Workshop</option>
                            </optgroup>
                        </select>
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
                $("#register_name").keyup(function(){
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
                $("#register_name").val(val);
                $("#suggesstion-box").hide();
            }
        </script>
    </body>
</html>
