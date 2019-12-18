<?php
namespace Mcpuishor\SuperTraits;

trait Summarizable {
	protected $SummarizedCounts;

 	protected function initCount($item)
 	{
 		$this->SummarizedCounts[$item]["created"] = 0;
 		$this->SummarizedCounts[$item]["updated"] = 0;	
 	}

	protected function countChanges($object, $name) {
        if (!isset($this->SummarizedCounts[$name])){
            $this->initCount($name);
        }
        if ($object->wasRecentlyCreated) {
            $this->SummarizedCounts[$name]["created"]++;
        }
        if ($object->wasChanged()) {
            $this->SummarizedCounts[$name]["updated"]++;
        }
    }

    protected function displaySummary()
    {        
        echo "\n----------- Summary ---------\n";
        if ($this->SummarizedCounts && is_array($this->SummarizedCounts)) {
            foreach ($this->SummarizedCounts as $key => $count) {
                printf("%s created : %u\n", ucwords(str_plural($key)), $count["created"]);
                printf("%s updated : %u\n", ucwords(str_plural($key)), $count["updated"]);
            }
        }
         echo "-----------------------------\n";
    } 

}