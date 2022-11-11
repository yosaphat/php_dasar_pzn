<?php 

$values = array(10,9,8,5.5);
var_dump($values); 

$names = ["yosaphat", "ananda", "mikola"];
var_dump($names);

var_dump($names[1]);

$names[0] = "ricky";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "nanda";
var_dump($names);

$yosa = array(
	"id" => "yosaphat",
	"name" => "yosaphat ananda",
	"age" => 24,
	"address" => array(
		"city" => "Kediri",
		"country" => "Indonesia")
);

var_dump($yosa);


	$satya = [
	"id" => "satya",
	"name" => "lazarus satya",
	"age" => 20,
	"address" => [
		"city" => "malang",
		"country" => "Indonesia"]
	];

var_dump($satya);

var_dump($satya["address"]["country"]);