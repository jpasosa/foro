<?php


use Illuminate\Foundation\Testing\DatabaseTransactions;



class FeatureTestCase extends TestCase
{
	
	use DatabaseTransactions;


	function seeErrors( array $errors )
	{

		foreach ($errors as $column => $error)
		{
			foreach (array($error) AS $k => $message) {
				$this->seeInElement("#field_$column .help-block", $message);
			}
		}

	}



}