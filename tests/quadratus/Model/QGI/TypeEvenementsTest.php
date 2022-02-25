<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\TypeEvenements;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Type evenements test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TypeEvenementsTest extends AbstractTestCase {

    /**
     * Tests setAvecEtat()
     *
     * @return void
     */
    public function testSetAvecEtat(): void {

        $obj = new TypeEvenements();

        $obj->setAvecEtat(true);
        $this->assertEquals(true, $obj->getAvecEtat());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new TypeEvenements();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setEtatCouleur1()
     *
     * @return void
     */
    public function testSetEtatCouleur1(): void {

        $obj = new TypeEvenements();

        $obj->setEtatCouleur1(10);
        $this->assertEquals(10, $obj->getEtatCouleur1());
    }

    /**
     * Tests setEtatCouleur2()
     *
     * @return void
     */
    public function testSetEtatCouleur2(): void {

        $obj = new TypeEvenements();

        $obj->setEtatCouleur2(10);
        $this->assertEquals(10, $obj->getEtatCouleur2());
    }

    /**
     * Tests setEtatCouleur3()
     *
     * @return void
     */
    public function testSetEtatCouleur3(): void {

        $obj = new TypeEvenements();

        $obj->setEtatCouleur3(10);
        $this->assertEquals(10, $obj->getEtatCouleur3());
    }

    /**
     * Tests setEtatPriorite1()
     *
     * @return void
     */
    public function testSetEtatPriorite1(): void {

        $obj = new TypeEvenements();

        $obj->setEtatPriorite1("etatPriorite1");
        $this->assertEquals("etatPriorite1", $obj->getEtatPriorite1());
    }

    /**
     * Tests setEtatPriorite2()
     *
     * @return void
     */
    public function testSetEtatPriorite2(): void {

        $obj = new TypeEvenements();

        $obj->setEtatPriorite2("etatPriorite2");
        $this->assertEquals("etatPriorite2", $obj->getEtatPriorite2());
    }

    /**
     * Tests setEtatPriorite3()
     *
     * @return void
     */
    public function testSetEtatPriorite3(): void {

        $obj = new TypeEvenements();

        $obj->setEtatPriorite3("etatPriorite3");
        $this->assertEquals("etatPriorite3", $obj->getEtatPriorite3());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new TypeEvenements();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLibelle1()
     *
     * @return void
     */
    public function testSetLibelle1(): void {

        $obj = new TypeEvenements();

        $obj->setLibelle1("libelle1");
        $this->assertEquals("libelle1", $obj->getLibelle1());
    }

    /**
     * Tests setLibelle2()
     *
     * @return void
     */
    public function testSetLibelle2(): void {

        $obj = new TypeEvenements();

        $obj->setLibelle2("libelle2");
        $this->assertEquals("libelle2", $obj->getLibelle2());
    }

    /**
     * Tests setLibelle3()
     *
     * @return void
     */
    public function testSetLibelle3(): void {

        $obj = new TypeEvenements();

        $obj->setLibelle3("libelle3");
        $this->assertEquals("libelle3", $obj->getLibelle3());
    }

    /**
     * Tests setLibelleEtat()
     *
     * @return void
     */
    public function testSetLibelleEtat(): void {

        $obj = new TypeEvenements();

        $obj->setLibelleEtat("libelleEtat");
        $this->assertEquals("libelleEtat", $obj->getLibelleEtat());
    }

    /**
     * Tests setPosFlag()
     *
     * @return void
     */
    public function testSetPosFlag(): void {

        $obj = new TypeEvenements();

        $obj->setPosFlag("posFlag");
        $this->assertEquals("posFlag", $obj->getPosFlag());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
