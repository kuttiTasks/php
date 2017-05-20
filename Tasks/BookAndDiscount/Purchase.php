<?php
namespace KuttiTasks\PHP\BookAndDiscount;

class Purchase {

	protected static $bookArr = [];

	private static function bookset() {
		$bookArr = self::$bookArr;
		$i       = 0;
		$max     = max($bookArr);
		while ($i < $max) {
			foreach ($bookArr as $key => $book) {
				if ($book == 0) continue;
				$set1[$i][$key] = 1;
				$bookArr[$key] = $book - 1;
			}

			$booksetCount[] = count($set1[$i]);
			$i++;
		}

		return self::discount($booksetCount, Books::$priceOfEach);
	}

	private static function discount($booksetCount = [], $originalPrice) {
		$countDiscount = Books::$discountPercentage;
		foreach ($booksetCount as $count) {
			static $finalPrice = 0;
			$totalPrice = ($originalPrice * $count) - ($originalPrice * $count * $countDiscount[$count]) / 100;
			$finalPrice += $totalPrice;
		}
		return $finalPrice;
	}

	//ex ['v1'=>2, 'v2'=>2, 'v3'=>1, 'v4'=>1, 'v5'=>1];
	public static function getDiscount($booksArray)
	{
		self::$bookArr = $booksArray;

		return self::bookset();
	}

}


?>