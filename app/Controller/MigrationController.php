<?php
	class MigrationController extends AppController{
		

		public function index()
		{
			$this->setFlash('Migration Data');
			$this->set('title',__('Migration Data'));
			$migrations = $this->Migration->find('all');
			$this->set('migrations',$migrations);
		}

		public function member()
		{
			$this->setFlash('Migration Data (Member)');
			$this->set('title',__('Migration Data (Member)'));
			$migrations = $this->Migration->find('all');
			$this->set('migrations',$migrations);
		}

		public function transaction()
		{
			$this->setFlash('Migration Data (Transaction)');
			$this->set('title',__('Migration Data (Transaction)'));
			$migrations = $this->Migration->find('all');
			$this->set('migrations',$migrations);
		}

		public function transactionitem()
		{
			$this->setFlash('Migration Data (Transaction Item)');
			$this->set('title',__('Migration Data (Transaction Item)'));
			$migrations = $this->Migration->find('all');
			$this->set('migrations',$migrations);
		}





		public function q1(){
			
			$this->setFlash('Question: Migration of data to multiple DB table');
				
			
// 			$this->set('title',__('Question: Please change Pop Up to mouse over (soft click)'));
		}
		
		public function q1_instruction(){

			$this->setFlash('Question: Migration of data to multiple DB table');
				
			
			
// 			$this->set('title',__('Question: Please change Pop Up to mouse over (soft click)'));
		}

	


		
	}