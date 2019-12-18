<?php
namespace Mcpuishor\SuperTraits;
use Carbon\Carbon;

trait DateFormatted {

    public function getUpdatedAtAttribute($value) {
       return Carbon::parse($value)
       		->diffForHumans();
       		// ->format($this->newDateFormat);
    }

    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)
        	->diffForHumans();
        	// ->format($this->newDateFormat);
    }
}