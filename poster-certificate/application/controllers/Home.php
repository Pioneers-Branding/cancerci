<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('main_model');        
    }

    public function index() {
        $this->load->view('index');
    }

    public function download() {
        if($_POST["submit"]){
            unset($_POST["submit"]);

            $condition = array('register_name' => $_POST['register_name'], 'poster_id' => $_POST['poster_id']);
            $get_data = $this->main_model->select_data_where('poster_certificate', $condition);
            if(!empty($get_data)){
                $register_name = ucfirst($get_data[0]->register_name);

                $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
                $fontDirs = $defaultConfig['fontDir'];

                $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
                $fontData = $defaultFontConfig['fontdata'];

                $mpdf = new \Mpdf\Mpdf([
                    'fontDir' => array_merge($fontDirs, [
                        base_url().'assets/custom/font/directory/',
                    ]),
                    'fontdata' => $fontData + [
                        'ShelleyAllegro' => [
                            'I' => 'ShelleyAllegro BT.ttf',
                        ]
                    ],
                    'default_font' => 'frutiger'
                ]);
                $pagecontent = $mpdf->SetSourceFile('././assets/pdf/poster-certificate.pdf');
                $tplIdx = $mpdf->ImportPage($pagecontent);
                $size = $mpdf->getTemplateSize($tplIdx);
                $mpdf->AddPage('L');
                $mpdf->useTemplate($tplIdx, null, null, 297, 210, FALSE);
                
                $mpdf->SetXY(0, 116);
                $mpdf->WriteHTML('<table width="100%"><tr><th align="center"><b style="font-size:25px; color:rgb(36,64,143); font-family:ShelleyAllegro BT">'.$register_name.'</b></th></tr></table>');
                
                $mpdf->SetXY(0, 150);
                $mpdf->WriteHTML('<center><table width="85%" style="margin:0px auto;"><tr><td align="center"><span style="color:rgb(36,64,143); ">'.$get_data[0]->poster_title.'</td></tr></table></center>');

                $mpdf->Output($register_name.'.pdf', 'D');
                redirect(base_url());
            } else{
                $this->load->view('not-found');
            }
        }
    }

    public function get_ajax_name() {
        $search_keyword = $_POST['search_keyword'];
        $query = "SELECT register_name FROM `poster_certificate` WHERE `register_name` LIKE '%".$search_keyword."%' GROUP BY register_name;";
        $users = $this->main_model->where_query($query);

        if(!empty($users)){
            echo '<ul id="country-list">';
            foreach ($users as $key => $value) { 
                echo '<li onClick="selectCountry(\''.$value->register_name.'\')">'.$value->register_name.'</li>';
            } 
            echo '</ul>';
        }
    }
}