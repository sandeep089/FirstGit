<?php

/**
 * @author Sandeep yadav <sandeep.123yad@gmail.com>
 * @package A general demo class OOP's concept
 */
class Demo {

	/**
	 * constructor
	 */

	public function __construct()
	{
		//some constructor method
	}

	public function getMyWorkDone()
	{
		/**
		 * This method is just a test method
		 */
		$some_random_number = rand(10, 50);
		return $some_random_number;
	}
}

$demo_object = new Demo();

$random_value = $demo_object->getMyWorkDone();

print($random_value);