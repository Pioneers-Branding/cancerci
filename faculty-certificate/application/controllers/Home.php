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
            $condition = array('acc_name' => $_POST['acc_name'], 'certificate_type' => 'Faculty');
            $get_data = $this->main_model->select_data_where('conference_certificate', $condition);
            if(!empty($get_data)){
                $register_name = ucfirst($get_data[0]->acc_name);
                
                $pdf_name = 'faculty-certificate';
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
                            'R' => 'ShelleyAllegro BT.ttf',
                            'useOTL' => 0xFF,
                        ]
                    ],
                    'default_font' => 'frutiger'
                ]);
                $pagecontent = $mpdf->SetSourceFile('././assets/pdf/'.$pdf_name.'.pdf');
                $tplIdx = $mpdf->ImportPage($pagecontent);
                $size = $mpdf->getTemplateSize($tplIdx);
                $mpdf->AddPage('L');
                $mpdf->useTemplate($tplIdx, null, null, 297, 210, FALSE);
                
                $mpdf->SetXY(0, 112);
                $mpdf->WriteHTML('<table width="100%"><tr><th align="center"><p style="font-size:35px; color:rgb(36,64,143);">'.$register_name.'</p></th></tr></table>');
                $mpdf->Output($register_name.'.pdf', 'D');
                redirect(base_url());
            } else{
                $this->load->view('not-found');
            }
        }
    }

    public function get_ajax_name() {
        $search_keyword = $_POST['search_keyword'];
        $query = "SELECT acc_name FROM `conference_certificate` WHERE `acc_name` LIKE '%".$search_keyword."%' GROUP BY acc_name";
        $users = $this->main_model->where_query($query);

        if(!empty($users)){
            echo '<ul id="country-list">';
            foreach ($users as $key => $value) { 
                echo '<li onClick="selectCountry(\''.$value->acc_name.'\')">'.$value->acc_name.'</li>';
            } 
            echo '</ul>';
        }
    }
}