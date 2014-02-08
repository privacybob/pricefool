<?php
class DbTest extends CTestCase
{  
     public function testConnection()
     {
	      //test the connection to the database
	 	  $this->assertNotEquals(NULL, Yii::app()->db);
		
     } 
}