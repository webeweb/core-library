<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Prospects;

/**
 * Prospects test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ProspectsTest extends AbstractTestCase {

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Prospects();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Prospects();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Prospects();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodeProspect() method.
     *
     * @return void
     */
    public function testSetCodeProspect(): void {

        $obj = new Prospects();

        $obj->setCodeProspect("codeProspect");
        $this->assertEquals("codeProspect", $obj->getCodeProspect());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Prospects();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new Prospects();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNomSuite() method.
     *
     * @return void
     */
    public function testSetNomSuite(): void {

        $obj = new Prospects();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests the setNomSuite2() method.
     *
     * @return void
     */
    public function testSetNomSuite2(): void {

        $obj = new Prospects();

        $obj->setNomSuite2("nomSuite2");
        $this->assertEquals("nomSuite2", $obj->getNomSuite2());
    }

    /**
     * Tests the setNomSuite3() method.
     *
     * @return void
     */
    public function testSetNomSuite3(): void {

        $obj = new Prospects();

        $obj->setNomSuite3("nomSuite3");
        $this->assertEquals("nomSuite3", $obj->getNomSuite3());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Prospects();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Prospects();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Prospects();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeProspect());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomSuite2());
        $this->assertNull($obj->getNomSuite3());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
    }
}
