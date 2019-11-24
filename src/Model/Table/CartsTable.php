<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\Network\Session;
use Cake\Core\Configure;

class CartsTable extends Table {

	public function initialize(array $config)
{
    parent::initialize($config);

    $this->setTable('carts');      
}

	
	/*
	 * add a product to cart
	 */
	public function addProduct($productId) {
		$allProducts = $this->readProduct();
		if (null!=$allProducts) {
			if (array_key_exists($productId, $allProducts)) {
				$allProducts[$productId]++;
			} else {
				$allProducts[$productId] = 1;
			}
		} else {
			$allProducts[$productId] = 1;
		}
		
		$this->saveProduct($allProducts);
	}
	
	/*
	 * get total count of products
	 */
	public function getCount() {
		$allProducts = $this->readProduct();
		
		if (count($allProducts)<1) {
			return 0;
		}
		
		$count = 0;
		foreach ($allProducts as $product) {
			$count=$count+$product;
		}
		
		return $count;
	}

	/*
	* save data to session
	*/
	public function saveProduct($data) {
		$session = new Session();
		return $session->write('cart',$data);
	}

	/*
	* read cart data from session
	*/
	public function readProduct() {
		$session = new Session();
		return $session->read('cart');
	}

}