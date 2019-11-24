<?php


namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Core\Configure;

class CartsController extends AppController {

	public function beforeFilter(Event $event)
{
    // allow all action
    $this->Auth->allow();
}
	
	public function add() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Carts->addProduct($this->request->data['product_id']);
		}
        echo $this->Carts->getCount();
        $this->redirect(['controller'=>'carts', 'action' => 'view']);
	}
	
	// public function view() {
    //     $this->loadModel('Product');
    
    //     $carts = $this->Carts->readProduct();
    //     $products = array();
    //     if (null!=$carts) {
    //         foreach ($carts as $productId => $count) {
    //             $product = $this
    //             ->Product->get($productId);
    //             $product['count'] = $count;
    //             $products[]=$product;
    //         }
    //     }
    //     $this->set(compact('products'));
    // }

    public function view() {
        $this->loadModel('Products');
    
        $carts = $this->Carts->readProduct();
        $products = array();
        if (null!=$carts) {
            foreach ($carts as $productId => $count) {
                $product = $this->Products->get($productId);
                $product['count'] = $count;
                $products[]=$product;
            }
        }
        $this->set(compact('products'));
    }
    

		
	public function update() {
		if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				$cart = array();
				foreach ($this->request->data['Cart']['count'] as $index=>$count) {
					if ($count>0) {
						$productId = $this->request->data['Cart']['product_id'][$index];
						$cart[$productId] = $count;
					}
				}
				$this->Carts->saveProduct($cart);
			}
		}
		$this->redirect(array('action'=>'view'));
    }
    
    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        // The add and tags actions are always allowed to logged in users.
        if (in_array($action, ['add', 'view'])) {
            return true;
        }
    
        // All other actions require a slug.
        $slug = $this->request->getParam('pass.0');
        if (!$slug) {
            return false;
        }
    
        // Check that the article belongs to the current user.
        $cart = $this->Carts->findBySlug($slug)->first();
    
        return $cart->user_id === $user['id'];
    }
	
}