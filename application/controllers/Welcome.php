<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
                $this->data['pagebody'] = 'home';
                
                $this->data['character'] = 'stickman.png';
                $this->data['weapon'] = 'sword_iron.png';
                $this->data['helmet'] = 'helmet_light_iron.png';
                
		$this->render(); 
	}
        
        public function update() {
            
            $choice = $this->input->post();
            if($choice) {
                echo $choice['Set'];
            }
        }

}
