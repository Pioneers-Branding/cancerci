<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Feedback Form</title>
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
                <form method="POST" class="feedback-form" id="feedback-form" action="<?= base_url().'feedback'; ?>">
                    <h1>ACC & CCI 2020</h1>
                    <h3 style="margin-bottom: 0px">Feedback form</h3><hr>
                    <div class="form-group-1" style="position: relative;">
                        <label class="form-label">Your Name <span style="color: #d93025">*</span></label>
                        <input type="text" name="acc_name" id="acc_name" autocomplete="off" required/>
                        <div id="suggesstion-box"></div>
                    </div>
                    <div class="form-group-1">
                        <label class="form-label">Your City </label>
                        <input type="text" name="acc_city" id="acc_city" />
                    </div>
                    <div class="form-group-1">
                        <label class="form-label">Your Mobile No. </label>
                        <input type="text" name="acc_mobile_no" id="acc_mobile_no" />
                    </div>
                    <div class="form-group-1">
                        <label class="form-label">Your Email ID </label>
                        <input type="text" name="acc_email" id="acc_email"/>
                    </div>
                    <div class="form-group-1">
                        <label class="form-label">1. How satisfied were you with registration process?</label>
                        <p>
                            <input id="que_1_1" type="radio" name="acc_que_1" value="Extremely Dissatisfied"/>
                            <label for="que_1_1">Extremely Dissatisfied</label>
                        </p>
                        <p>
                            <input id="que_1_2" type="radio" name="acc_que_1" value="Dissatisfied" />
                            <label for="que_1_2">Dissatisfied</label>
                        </p>
                        <p>
                            <input id="que_1_3" type="radio" name="acc_que_1" value="Satisfied" />
                            <label for="que_1_3">Satisfied</label>
                        </p>
                        <p>
                            <input id="que_1_4" type="radio" name="acc_que_1" value="Extremely Satisfied" />
                            <label for="que_1_4">Extremely Satisfied</label>
                        </p>
                    </div><br>
                    <div class="form-group-1">
                        <label class="form-label">2. How satisfied were you with the conference facilities?</label>
                        <p>
                            <input id="que_2_1" type="radio" name="acc_que_2" value="Extremely Dissatisfied"/>
                            <label for="que_2_1">Extremely Dissatisfied</label>
                        </p>
                        <p>
                            <input id="que_2_2" type="radio" name="acc_que_2" value="Dissatisfied" />
                            <label for="que_2_2">Dissatisfied</label>
                        </p>
                        <p>
                            <input id="que_2_3" type="radio" name="acc_que_2" value="Satisfied" />
                            <label for="que_2_3">Satisfied</label>
                        </p>
                        <p>
                            <input id="que_2_4" type="radio" name="acc_que_2" value="Extremely Satisfied" />
                            <label for="que_2_4">Extremely Satisfied</label>
                        </p>
                    </div><br>
                    <div class="form-group-1">
                        <label class="form-label">3. How was it structured ? <br> <small>Eg: Thursday to Sunday, Hall A & Hall B, site specific topics? Summary at the end of each session etc</small>  </label>
                        <textarea class="textarea" type="text" name="acc_que_3" id="que_3"></textarea>
                    </div>
                    <div class="form-group-1">
                        <label class="form-label">4. Did you like the idea of having Panel discussions, MDT discussion and debates in each site ?</label>
                        <p>
                            <input id="que_4_1" type="radio" name="acc_que_4" value="Yes"/>
                            <label for="que_4_1">Yes</label>
                        </p>
                        <p>
                            <input id="que_4_2" type="radio" name="acc_que_4" value="No" />
                            <label for="que_4_2">No</label>
                        </p>
                    </div><br>
                    <div class="form-group-1">
                        <label class="form-label">5. The scientific Content of conference was appropriate and informative? </label>
                        <p>
                            <input id="que_5_1" type="radio" name="acc_que_5" value="Strongly Disagree" />
                            <label for="que_5_1">Strongly Disagree</label>
                        </p>
                        <p>
                            <input id="que_5_2" type="radio" name="acc_que_5" value="Disagree" />
                            <label for="que_5_2">Disagree</label>
                        </p>
                        <p>
                            <input id="que_5_3" type="radio" name="acc_que_5" value="Agree" />
                            <label for="que_5_3">Agree</label>
                        </p>
                        <p>
                            <input id="que_5_4" type="radio" name="acc_que_5" value="Strongly Agree" />
                            <label for="que_5_4">Strongly Agree</label>
                        </p>
                    </div><br>
                    <div class="form-group-1">
                        <label class="form-label">6. How Satisfied were you with the speaker selection? </label>
                        <p>
                            <input id="que_6_1" type="radio" name="acc_que_6" value="Extremely Dissatisfied"/>
                            <label for="que_6_1">Extremely Dissatisfied</label></p>
                        <p>
                            <input id="que_6_2" type="radio" name="acc_que_6" value="Dissatisfied" />
                            <label for="que_6_2">Dissatisfied</label>
                        </p>
                        <p>
                            <input id="que_6_3" type="radio" name="acc_que_6" value="Satisfied" />
                            <label for="que_6_3">Satisfied</label>
                        </p>
                        <p>
                            <input id="que_6_4" type="radio" name="acc_que_6" value="Extremely Satisfied" />
                            <label for="que_6_4">Extremely Satisfied</label></p>
                    </div><br>
                    <div class="form-group-1">
                        <label class="form-label">7. Which speaker were you most impressed ? </label>
                        <div class="form-group-1">
                            <textarea class="textarea" type="text" name="acc_que_7" id="que_7"></textarea>
                        </div>
                    </div>
                    <div class="form-group-1">
                        <label class="form-label">8. How likely you would recommend this conference to a friend or colleague? </label><br>
                        <span class="rad-btn"><input id="que_8_1" type="radio" name="acc_que_8" value="1" /><label for="que_8_1">1</label></span>
                        <span class="rad-btn"><input id="que_8_2" type="radio" name="acc_que_8" value="2" /><label for="que_8_2">2</label></span>
                        <span class="rad-btn"><input id="que_8_3" type="radio" name="acc_que_8" value="3" /><label for="que_8_3">3</label></span>
                        <span class="rad-btn"><input id="que_8_4" type="radio" name="acc_que_8" value="4" /><label for="que_8_4">4</label></span>
                        <span class="rad-btn"><input id="que_8_5" type="radio" name="acc_que_8" value="5" /><label for="que_8_5">5</label></span>
                        <span class="rad-btn"><input id="que_8_6" type="radio" name="acc_que_8" value="6" /><label for="que_8_6">6</label></span>
                        <span class="rad-btn"><input id="que_8_7" type="radio" name="acc_que_8" value="7" /><label for="que_8_7">7</label></span>
                        <span class="rad-btn"><input id="que_8_8" type="radio" name="acc_que_8" value="8" /><label for="que_8_8">8</label></span>
                        <span class="rad-btn"><input id="que_8_9" type="radio" name="acc_que_8" value="9" /><label for="que_8_9">9</label></span>
                        <span class="rad-btn"><input id="que_8_10" type="radio" name="acc_que_8" value="10" /><label for="que_8_10">10</label></span>
                    </div><br>
                    <div class="form-group-1">
                        <label class="form-label">Any suggestions that you would like to make to make it even better ? </label>
                        <textarea class="textarea" type="text" name="acc_que_9" id="que_9"></textarea>
                    </div>
                    <div class="form-group-1">
                        <label class="form-label">Give your over all experience</label>
                        <textarea class="textarea" type="text" name="acc_que_10" id="que_10"></textarea>
                    </div>
                    <div class="form-submit">
                        <input type="submit" name="submit" id="submit" class="submit" value="Submit Your Feedback"/>
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
