<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

class ProductsController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session', 'Paginator');
    public $paginate = array(
        'limit' => 10
    );

    public function index() {
		print_r("Hello");
        $this->Product->recursive = -1;
        $this->set('products', $this->paginate());
		print_r("Bye");
    }

    public function view($id) {
		print_r("Hello123");
        if (!($product = $this->Product->findById($id))) {
            throw new NotFoundException(__('Product not found'));
        }
        $this->set(compact('product'));
		print_r("Hello456");
    }

}
