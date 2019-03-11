<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DSNLieuTravail;

/**
 * D s n lieu travail model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DSNLieuTravailTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DSNLieuTravail();

        $this->assertNull($obj->getBTQ());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCodeDistribution());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeNAF());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getComplementVoie());
        $this->assertNull($obj->getID());
        $this->assertNull($obj->getNatureJuridique());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getRaisonSociale());
    }

    /**
     * Tests the setBTQ() method.
     *
     * @return void
     */
    public function testSetBTQ() {

        $obj = new DSNLieuTravail();

        $obj->setBTQ("bTQ");
        $this->assertEquals("bTQ", $obj->getBTQ());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new DSNLieuTravail();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCodeDistribution() method.
     *
     * @return void
     */
    public function testSetCodeDistribution() {

        $obj = new DSNLieuTravail();

        $obj->setCodeDistribution("codeDistribution");
        $this->assertEquals("codeDistribution", $obj->getCodeDistribution());
    }

    /**
     * Tests the setCodeInsee() method.
     *
     * @return void
     */
    public function testSetCodeInsee() {

        $obj = new DSNLieuTravail();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Tests the setCodeNAF() method.
     *
     * @return void
     */
    public function testSetCodeNAF() {

        $obj = new DSNLieuTravail();

        $obj->setCodeNAF("codeNAF");
        $this->assertEquals("codeNAF", $obj->getCodeNAF());
    }

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays() {

        $obj = new DSNLieuTravail();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new DSNLieuTravail();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new DSNLieuTravail();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setComplementVoie() method.
     *
     * @return void
     */
    public function testSetComplementVoie() {

        $obj = new DSNLieuTravail();

        $obj->setComplementVoie("complementVoie");
        $this->assertEquals("complementVoie", $obj->getComplementVoie());
    }

    /**
     * Tests the setID() method.
     *
     * @return void
     */
    public function testSetID() {

        $obj = new DSNLieuTravail();

        $obj->setID("iD");
        $this->assertEquals("iD", $obj->getID());
    }

    /**
     * Tests the setNatureJuridique() method.
     *
     * @return void
     */
    public function testSetNatureJuridique() {

        $obj = new DSNLieuTravail();

        $obj->setNatureJuridique("natureJuridique");
        $this->assertEquals("natureJuridique", $obj->getNatureJuridique());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new DSNLieuTravail();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new DSNLieuTravail();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setRaisonSociale() method.
     *
     * @return void
     */
    public function testSetRaisonSociale() {

        $obj = new DSNLieuTravail();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }
}
