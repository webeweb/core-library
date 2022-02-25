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

use WBW\Library\Quadratus\Model\QGI\FichesConfidentialitesControles;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fiches confidentialites controles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class FichesConfidentialitesControlesTest extends AbstractTestCase {

    /**
     * Tests setAgence()
     *
     * @return void
     */
    public function testSetAgence(): void {

        $obj = new FichesConfidentialitesControles();

        $obj->setAgence("agence");
        $this->assertEquals("agence", $obj->getAgence());
    }

    /**
     * Tests setAutorise()
     *
     * @return void
     */
    public function testSetAutorise(): void {

        $obj = new FichesConfidentialitesControles();

        $obj->setAutorise(true);
        $this->assertEquals(true, $obj->getAutorise());
    }

    /**
     * Tests setCodeColl()
     *
     * @return void
     */
    public function testSetCodeColl(): void {

        $obj = new FichesConfidentialitesControles();

        $obj->setCodeColl("codeColl");
        $this->assertEquals("codeColl", $obj->getCodeColl());
    }

    /**
     * Tests setDossier()
     *
     * @return void
     */
    public function testSetDossier(): void {

        $obj = new FichesConfidentialitesControles();

        $obj->setDossier("dossier");
        $this->assertEquals("dossier", $obj->getDossier());
    }

    /**
     * Tests setMotControle()
     *
     * @return void
     */
    public function testSetMotControle(): void {

        $obj = new FichesConfidentialitesControles();

        $obj->setMotControle("motControle");
        $this->assertEquals("motControle", $obj->getMotControle());
    }

    /**
     * Tests setMotDePasse()
     *
     * @return void
     */
    public function testSetMotDePasse(): void {

        $obj = new FichesConfidentialitesControles();

        $obj->setMotDePasse("motDePasse");
        $this->assertEquals("motDePasse", $obj->getMotDePasse());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new FichesConfidentialitesControles();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FichesConfidentialitesControles();

        $this->assertNull($obj->getAgence());
        $this->assertNull($obj->getAutorise());
        $this->assertNull($obj->getCodeColl());
        $this->assertNull($obj->getDossier());
        $this->assertNull($obj->getMotControle());
        $this->assertNull($obj->getMotDePasse());
        $this->assertNull($obj->getType());
    }
}
