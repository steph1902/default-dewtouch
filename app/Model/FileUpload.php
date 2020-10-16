<?php

class FileUpload extends AppModel {


    public function import($uploaded_file)
	{
		$uploaded_file = $this->request>data['FileUpload']['file'];
		if(!empty($uploaded_file['tmp_name']))
		{
			$type = explode('.', $uploaded_file['type']);
			if($type[0] == 'csv')
			{
				$filename = TMP . 'uploads' . DS . $uploaded_file;
				$handle = fopen($filename, "r");
				$header = fgetcsv($handle);
					
				$return = array(
					'messages' => array(),
					'errors' => array(),
				);

				while (($row = fgetcsv($handle)) !== FALSE) 
				{
					
					$this->create();
				}
			}
		}
		fclose($handle);
		return $return;

	}
}