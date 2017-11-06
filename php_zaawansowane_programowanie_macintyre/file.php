<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Tutorial
 *
 * @author lukiqs
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Add extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
    }
    
    public function index(){
        $this->load->helper('url');
        $this->load->model('user');
        
        if($this->auth->isLogged()){            
           if($this->user->acctiveUser($this->auth->isLogged())){
               $this->load->view('menu',$this->menuConfig());
               $this->load->view('add',$this->addConfig());
           }
           else{
               header('Location: '.base_url().'index.php/settings');
           }
        }
        else{
            header('Location: '.base_url());
        }        
    }
    ///////////////////////////////////////////////////////////////////////
    private function addConfig(){
        $result[0]['PATH']=base_url();
        return $result;
    }
    private function menuConfig($t = null){
        $DataMenu['bg'] = $t; 
        $DataMenu['base_url'] = base_url();
            
        return $DataMenu;        
    }
}