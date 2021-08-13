<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\DsnLieuTravail;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dsn lieu travail test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DsnLieuTravailTest extends AbstractTestCase {

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new DsnLieuTravail();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new DsnLieuTravail();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCodeDistribution() method.
     *
     * @return void
     */
    public function testSetCodeDistribution(): void {

        $obj = new DsnLieuTravail();

        $obj->setCodeDistribution("codeDistribution");
        $this->assertEquals("codeDistribution", $obj->getCodeDistribution());
    }

    /**
     * Tests the setCodeInsee() method.
     *
     * @return void
     */
    public function testSetCodeInsee(): void {

        $obj = new DsnLieuTravail();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Tests the setCodeNaf() method.
     *
     * @return void
     */
    public function testSetCodeNaf(): void {

        $obj = new DsnLieuTravail();

        $obj->setCodeNaf("codeNaf");
        $this->assertEquals("codeNaf", $obj->getCodeNaf());
    }

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays(): void {

        $obj = new DsnLieuTravail();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new DsnLieuTravail();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new DsnLieuTravail();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setComplementVoie() method.
     *
     * @return void
     */
    public function testSetComplementVoie(): void {

        $obj = new DsnLieuTravail();

        $obj->setComplementVoie("complementVoie");
        $this->assertEquals("complementVoie", $obj->getComplementVoie());
    }

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new DsnLieuTravail();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Tests the setNatureJuridique() method.
     *
     * @return void
     */
    public function testSetNatureJuridique(): void {

        $obj = new DsnLieuTravail();

        $obj->setNatureJuridique("natureJuridique");
        $this->assertEquals("natureJuridique", $obj->getNatureJuridique());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new DsnLieuTravail();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new DsnLieuTravail();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setRaisonSociale() method.
     *
     * @return void
     */
    public function testSetRaisonSociale(): void {

        $obj = new DsnLieuTravail();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DsnLieuTravail();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCodeDistribution());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getComplementVoie());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getNatureJuridique());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getRaisonSociale());
    }
}
