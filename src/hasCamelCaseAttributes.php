<?php
namespace Mcpuishor\SuperTraits;

trait hasCamelCaseAttributes {

  public function getAttribute($key)
  {
	if (array_key_exists($key, $this->relations) || method_exists($this, $key)) {
		return parent::getAttribute($key);
	} else {
		return parent::getAttribute(snake_case($key));
	}
  }

  public function setAttribute($key, $value)
  {
	return parent::setAttribute(snake_case($key), $value);
  }
}