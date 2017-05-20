<?php

class DiscountTest extends PHPUnit_Framework_TestCase
{

	/**
	 * @dataProvider booksListAndFinalPriceProvider
	 */
	public function testHello($booksList, $expectedPrice)
	{
		$actualPrice = \KuttiTasks\PHP\BookAndDiscount\Purchase::getDiscount($booksList);
		$this->assertEquals($expectedPrice, $actualPrice);
	}

	public function booksListAndFinalPriceProvider()
	{
		return [
			'scenario1' => [
				'booksList'  => ['v1' => 1, 'v2' => 1, 'v3' =>1, 'v4' => 1, 'v5' => 1] ,
				'finalPrice' => 500
			],
		];
	}

}