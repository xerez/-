<?php
App::uses('AppController', 'Controller');

/**
*一覧表示・追加
**/
 
class SampleDatasController extends AppController {
	
	/**
	*一覧表示
	**/
	public function index(){
		$datas = $this->SampleData->find('all');
    	$this->set('datas',$datas);
    }

    /**
	*追加
	**/
    public function add() {
    // post時の処理
    	if ($this->request->is('post')) {
      		$this->SampleData->save($this->request->data);
    	}
	}
}