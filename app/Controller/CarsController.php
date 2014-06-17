<?php
/**
 * 
 */
class CarsController extends AppController {
	var $name = "cars";
	
	public function view_car()
	{
		$this->layout = "layoutcar";
		$data = $this->Car->find("all");
		$this->set("test", $data);
	}
}
