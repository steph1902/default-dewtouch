<?php

class FileUploadController extends AppController {
	public function index() 
	{
		$this->set('title', __('File Upload Answer'));

		if(!empty($this->request->data))
		{
			$uploaded_file = $this->request->data['FileUpload']['file'];
			if($this->request->data['FileUpload']['file'])
			{
				$this->Post->import($uploaded_file);
			}
		}
		else
		{
			$uploaded_file  = '';
		}
		
		$file_uploads = $this->FileUpload->find('all');
		$this->set(compact('file_uploads'));
	}

	
}