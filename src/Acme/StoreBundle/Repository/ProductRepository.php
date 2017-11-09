<?php

namespace Acme\StoreBundle\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ODM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends DocumentRepository
{
	public function findAll() {
		return $this->createQueryBuilder()
			->sort("name", "ASC")
			->getQuery()
			->execute();	
	}

	public function save($product) {
		
	}
}
