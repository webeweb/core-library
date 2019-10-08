<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTVAFiliales;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Dec t v a filiales model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTVAFilialesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTVAFiliales();

        $this->assertNull($obj->getBTQ());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCptFiliale());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDetentionDirecte());
        $this->assertNull($obj->getDetentionIndirecte());
        $this->assertNull($obj->getFormeJuridique());
        $this->assertNull($obj->getLibDoss());
        $this->assertNull($obj->getNoDoss());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getVille());
    }

    /**
     * Tests the setBTQ() method.
     *
     * @return void
     */
    public function testSetBTQ() {

        $obj = new DecTVAFiliales();

        $obj->setBTQ("bTQ");
        $this->assertEquals("bTQ", $obj->getBTQ());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new DecTVAFiliales();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new DecTVAFiliales();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setCptFiliale() method.
     *
     * @return void
     */
    public function testSetCptFiliale() {

        $obj = new DecTVAFiliales();

        $obj->setCptFiliale("cptFiliale");
        $this->assertEquals("cptFiliale", $obj->getCptFiliale());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree() {

        $obj = new DecTVAFiliales();

        $obj->setDateEntree(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEntree());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie() {

        $obj = new DecTVAFiliales();

        $obj->setDateSortie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSortie());
    }

    /**
     * Tests the setDetentionDirecte() method.
     *
     * @return void
     */
    public function testSetDetentionDirecte() {

        $obj = new DecTVAFiliales();

        $obj->setDetentionDirecte(10.092018);
        $this->assertEquals(10.092018, $obj->getDetentionDirecte());
    }

    /**
     * Tests the setDetentionIndirecte() method.
     *
     * @return void
     */
    public function testSetDetentionIndirecte() {

        $obj = new DecTVAFiliales();

        $obj->setDetentionIndirecte(10.092018);
        $this->assertEquals(10.092018, $obj->getDetentionIndirecte());
    }

    /**
     * Tests the setFormeJuridique() method.
     *
     * @return void
     */
    public function testSetFormeJuridique() {

        $obj = new DecTVAFiliales();

        $obj->setFormeJuridique("formeJuridique");
        $this->assertEquals("formeJuridique", $obj->getFormeJuridique());
    }

    /**
     * Tests the setLibDoss() method.
     *
     * @return void
     */
    public function testSetLibDoss() {

        $obj = new DecTVAFiliales();

        $obj->setLibDoss("libDoss");
        $this->assertEquals("libDoss", $obj->getLibDoss());
    }

    /**
     * Tests the setNoDoss() method.
     *
     * @return void
     */
    public function testSetNoDoss() {

        $obj = new DecTVAFiliales();

        $obj->setNoDoss("noDoss");
        $this->assertEquals("noDoss", $obj->getNoDoss());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new DecTVAFiliales();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new DecTVAFiliales();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new DecTVAFiliales();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setSiren() method.
     *
     * @return void
     */
    public function testSetSiren() {

        $obj = new DecTVAFiliales();

        $obj->setSiren("siren");
        $this->assertEquals("siren", $obj->getSiren());
    }

    /**
     * Tests the setVille() method.
     *
     * @return void
     */
    public function testSetVille() {

        $obj = new DecTVAFiliales();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }
}
