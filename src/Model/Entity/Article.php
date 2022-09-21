<?php

namespace App\Model\Entity;

class Article extends \Cake\ORM\Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];

}
