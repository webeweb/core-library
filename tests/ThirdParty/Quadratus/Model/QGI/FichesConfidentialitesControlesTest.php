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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\FichesConfidentialitesControles;

/**
 * Fiches confidentialites controles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class FichesConfidentialitesControlesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FichesConfidentialitesControles();

        $this->assertNull($obj->getAgence());
        $this->assertNull($obj->getAutorise());
        $this->assertNull($obj->getCodeColl());
        $this->assertNull($obj->getDossier());
        $this->assertNull($obj->getMotControle());
        $this->assertNull($obj->getMotDePasse());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setAgence() method.
     *
     * @return void
     */
    public function testSetAgence() {

        $obj = new FichesConfidentialitesControles();

        $obj->setAgence("agence");
        $this->assertEquals("agence", $obj->getAgence());
    }

    /**
     * Tests the setAutorise() method.
     *
     * @return void
     */
    public function testSetAutorise() {

        $obj = new FichesConfidentialitesControles();

        $obj->setAutorise(true);
        $this->assertEquals(true, $obj->getAutorise());
    }

    /**
     * Tests the setCodeColl() method.
     *
     * @return void
     */
    public function testSetCodeColl() {

        $obj = new FichesConfidentialitesControles();

        $obj->setCodeColl("codeColl");
        $this->assertEquals("codeColl", $obj->getCodeColl());
    }

    /**
     * Tests the setDossier() method.
     *
     * @return void
     */
    public function testSetDossier() {

        $obj = new FichesConfidentialitesControles();

        $obj->setDossier("dossier");
        $this->assertEquals("dossier", $obj->getDossier());
    }

    /**
     * Tests the setMotControle() method.
     *
     * @return void
     */
    public function testSetMotControle() {

        $obj = new FichesConfidentialitesControles();

        $obj->setMotControle("motControle");
        $this->assertEquals("motControle", $obj->getMotControle());
    }

    /**
     * Tests the setMotDePasse() method.
     *
     * @return void
     */
    public function testSetMotDePasse() {

        $obj = new FichesConfidentialitesControles();

        $obj->setMotDePasse("motDePasse");
        $this->assertEquals("motDePasse", $obj->getMotDePasse());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new FichesConfidentialitesControles();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }
}
