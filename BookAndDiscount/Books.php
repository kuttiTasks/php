<?php
ini_set('display_errors', true);

class Books {
	public static $list = [
		'ps_v1' => 'Ponniyin Selven Vol1',
		'ps_v2' => 'Ponniyin Selven Vol2',
		'ps_v3' => 'Ponniyin Selven Vol3',
		'ps_v4' => 'Ponniyin Selven Vol4',
		'ps_v5' => 'Ponniyin Selven Vol5',
	];

	public static $priceOfEach = 200;

	public static $discountPercentage = [
		5 => 50,
		4 => 40,
		3 => 20,
		2 => 10,
		1 => 0,
		0 => 0
	];
}

