<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\SubventionsLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Subventions lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class SubventionsLignesTest extends AbstractTestCase {

    /**
     * Tests setAnnee()
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new SubventionsLignes();

        $obj->setAnnee("annee");
        $this->assertEquals("annee", $obj->getAnnee());
    }

    /**
     * Tests setMontantRestant()
     *
     * @return void
     */
    public function testSetMontantRestant(): void {

        $obj = new SubventionsLignes();

        $obj->setMontantRestant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantRestant());
    }

    /**
     * Tests setMontantVir()
     *
     * @return void
     */
    public function testSetMontantVir(): void {

        $obj = new SubventionsLignes();

        $obj->setMontantVir(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantVir());
    }

    /**
     * Tests setNumContrat()
     *
     * @return void
     */
    public function testSetNumContrat(): void {

        $obj = new SubventionsLignes();

        $obj->setNumContrat("numContrat");
        $this->assertEquals("numContrat", $obj->getNumContrat());
    }

    /**
     * Tests setNumCptSubvention()
     *
     * @return void
     */
    public function testSetNumCptSubvention(): void {

        $obj = new SubventionsLignes();

        $obj->setNumCptSubvention("numCptSubvention");
        $this->assertEquals("numCptSubvention", $obj->getNumCptSubvention());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new SubventionsLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SubventionsLignes();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getMontantRestant());
        $this->assertNull($obj->getMontantVir());
        $this->assertNull($obj->getNumContrat());
        $this->assertNull($obj->getNumCptSubvention());
        $this->assertNull($obj->getNumLigne());
    }
}
