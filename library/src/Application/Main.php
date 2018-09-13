<?php 

namespace Application;

use Service\Car as CarService;

class Main 
{
    /**
     * @var array
     */
	protected $data;
	
    /**
     * @param array $data
     */
	public function __construct(array $data)
	{
	    $this->setData($data);
	    $this->carService = new CarService;
	}

    /**
     * @param array $data
     */
	public function setData(array $data)
	{
		$this->data = $data;
	}

    /**
     * echo filtered car models.
     */
	public function showFilteredCarModels()
	{
	    $models = $this->carService->loopThroughCarBrands($this->data['cars']['brands']);
	    foreach($models as $_m) {
	        echo $_m."<br/>\r\n";
	    };
	}
	
}