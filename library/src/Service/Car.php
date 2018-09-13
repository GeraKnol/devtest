<?php 

namespace Service;

class Car 
{   
    /**
     * @var string
     */
    protected $current_brand;
    
    /**
     * Loop through Car Brands
     * 
     * @param array $brands
     * @return array $models
     */
	public function loopThroughCarBrands($brands){
	    $models = [];
	    if(!empty($brands)) {
	        foreach($brands as $_i=>$_v) {
	            $this->current_brand = $_i;
	            $models = array_merge($models,$this->getCarBrandsWithString($_v['models']));
	        }
	    }
	    return $models;
	}
	
	/**
	 * Return array with car brand and model including the text 3
	 *  
	 * @param array $models
	 * @return array $return
	 */
	public function getCarBrandsWithString($models){
	    $return = [];
	    foreach($models as $_i=>$_v) {
	        if(strstr($_v,'3')){
	            $return[] = $this->current_brand.' - '.$_v;
	        }
	    }
	    return $return;
	}
}