<?php

namespace Services;
use \Phalcon\Di\Injectable as Injector;

class CarService extends Injector{
	public function getData(){
		$data = $this->db->query("SELECT * FROM `cars`");
		$data->setFetchMode(\Phalcon\Db::FETCH_ASSOC);
		$results = $data->fetchAll();
		return $results;
	}
}