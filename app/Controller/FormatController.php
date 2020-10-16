<?php
	class FormatController extends AppController{
		
		public function q1(){
			$this->setFlash('Question: Please change Pop Up to mouse over (soft click)');
		}
		
		public function q1_detail(){

			$this->setFlash('Question: Please change Pop Up to mouse over (soft click)');

		}

		public function add_data()
		{
			$data = $this->request->data['Type']['type'];
			$this->setFlash($data);
			Debugger::dump($data);
			$this->set(compact('data'));
		}
}