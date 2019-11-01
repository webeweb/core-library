<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TypeEvenements;

/**
 * Type evenements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TypeEvenementsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TypeEvenements();

        $this->assertNull($obj->getAvecEtat());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getEtatCouleur1());
        $this->assertNull($obj->getEtatCouleur2());
        $this->assertNull($obj->getEtatCouleur3());
        $this->assertNull($obj->getEtatPriorite1());
        $this->assertNull($obj->getEtatPriorite2());
        $this->assertNull($obj->getEtatPriorite3());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelle1());
        $this->assertNull($obj->getLibelle2());
        $this->assertNull($obj->getLibelle3());
        $this->assertNull($obj->getLibelleEtat());
        $this->assertNull($obj->getPosFlag());
    }
}
