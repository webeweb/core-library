<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\TypeEvenements;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Type evenements model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class TypeEvenementsTest extends AbstractFrameworkTestCase {

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

    /**
     * Tests the setAvecEtat() method.
     *
     * @return void
     */
    public function testSetAvecEtat() {

        $obj = new TypeEvenements();

        $obj->setAvecEtat(true);
        $this->assertEquals(true, $obj->getAvecEtat());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new TypeEvenements();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setEtatCouleur1() method.
     *
     * @return void
     */
    public function testSetEtatCouleur1() {

        $obj = new TypeEvenements();

        $obj->setEtatCouleur1(10);
        $this->assertEquals(10, $obj->getEtatCouleur1());
    }

    /**
     * Tests the setEtatCouleur2() method.
     *
     * @return void
     */
    public function testSetEtatCouleur2() {

        $obj = new TypeEvenements();

        $obj->setEtatCouleur2(10);
        $this->assertEquals(10, $obj->getEtatCouleur2());
    }

    /**
     * Tests the setEtatCouleur3() method.
     *
     * @return void
     */
    public function testSetEtatCouleur3() {

        $obj = new TypeEvenements();

        $obj->setEtatCouleur3(10);
        $this->assertEquals(10, $obj->getEtatCouleur3());
    }

    /**
     * Tests the setEtatPriorite1() method.
     *
     * @return void
     */
    public function testSetEtatPriorite1() {

        $obj = new TypeEvenements();

        $obj->setEtatPriorite1("etatPriorite1");
        $this->assertEquals("etatPriorite1", $obj->getEtatPriorite1());
    }

    /**
     * Tests the setEtatPriorite2() method.
     *
     * @return void
     */
    public function testSetEtatPriorite2() {

        $obj = new TypeEvenements();

        $obj->setEtatPriorite2("etatPriorite2");
        $this->assertEquals("etatPriorite2", $obj->getEtatPriorite2());
    }

    /**
     * Tests the setEtatPriorite3() method.
     *
     * @return void
     */
    public function testSetEtatPriorite3() {

        $obj = new TypeEvenements();

        $obj->setEtatPriorite3("etatPriorite3");
        $this->assertEquals("etatPriorite3", $obj->getEtatPriorite3());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new TypeEvenements();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelle1() method.
     *
     * @return void
     */
    public function testSetLibelle1() {

        $obj = new TypeEvenements();

        $obj->setLibelle1("libelle1");
        $this->assertEquals("libelle1", $obj->getLibelle1());
    }

    /**
     * Tests the setLibelle2() method.
     *
     * @return void
     */
    public function testSetLibelle2() {

        $obj = new TypeEvenements();

        $obj->setLibelle2("libelle2");
        $this->assertEquals("libelle2", $obj->getLibelle2());
    }

    /**
     * Tests the setLibelle3() method.
     *
     * @return void
     */
    public function testSetLibelle3() {

        $obj = new TypeEvenements();

        $obj->setLibelle3("libelle3");
        $this->assertEquals("libelle3", $obj->getLibelle3());
    }

    /**
     * Tests the setLibelleEtat() method.
     *
     * @return void
     */
    public function testSetLibelleEtat() {

        $obj = new TypeEvenements();

        $obj->setLibelleEtat("libelleEtat");
        $this->assertEquals("libelleEtat", $obj->getLibelleEtat());
    }

    /**
     * Tests the setPosFlag() method.
     *
     * @return void
     */
    public function testSetPosFlag() {

        $obj = new TypeEvenements();

        $obj->setPosFlag("posFlag");
        $this->assertEquals("posFlag", $obj->getPosFlag());
    }

}
