<?php
class interfaceRequest implements IRequestVerses{
	private $core;
	function __construct (PoemCore $core){
		$this->core = $core;
	}
	public function Request() :string {
			return $this->core->getPoem();
	}
}