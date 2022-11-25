<?php
class Course {

	public $categ;
	public $id;
	public $name;
	public $hours;
	public $order;

	public function __construct(string $id, string $name, int $categ, int $hours, int $order){
		$this->id	= $id;
		$this->name	= $name;
		$this->categ = $categ;
		$this->hours = $hours;
		$this->order = $order;
	}
}