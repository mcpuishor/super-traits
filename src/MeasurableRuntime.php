<?php
namespace Mcpuishor\SuperTraits;

trait MeasurableRuntime {
	
 	protected $MeasurableRuntimeStartTime;

 	protected function startMeasureRuntime()
 	{
 		 $this->MeasurableRuntimeStartTime = microtime(true); 
 	}

    protected function measureRuntime()
    {
	    return round(microtime(true) - $this->MeasurableRuntimeStartTime , 4);
    }

}