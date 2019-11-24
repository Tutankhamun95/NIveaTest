<?php
// src/Controller/ProductsController.php

namespace App\Controller;

class ProductsController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $products = $this->Paginator->paginate($this->Products->find());
        $this->set(compact('products'));
    }

    public function view($slug = null)
    {
        $product = $this->Products->findBySlug($slug)->firstOrFail();
        $this->set(compact('product'));
    }

    public function add()
    {
        $contestant = $this->Contestants->newEntity();
        if ($this->request->is('post')) {
            $contestant = $this->Contestants->patchEntity($contestant, $this->request->getData());

            // Changed: Set the user_id from the session.
            $contestant->user_id = $this->Auth->user('id');

            if ($this->Contestants->save($article)) {
                $this->Flash->success(__('Your name has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your name.'));
        }
        $this->set('contestant', $contestant);
    }
}