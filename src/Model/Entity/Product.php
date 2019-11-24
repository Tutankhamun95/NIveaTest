<?php
// src/Model/Entity/Article.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Product extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'name' => false,
        'price' => false,
        'image' => false,
        'slug' => false,
    ];
}