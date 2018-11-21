<?php
class PoemCore {
	private $poemAdapter;

	function __construct(IObtainPoem $poemAdapter = null){
		if($poemAdapter == null){
				$this->PoemAdapter = new ReadHCPoem();
		}else{
			$this->poemAdapter = $poemAdapter;
		}
	}
	function getPoem(){
		return $this->poemAdapter->request();
	}
}