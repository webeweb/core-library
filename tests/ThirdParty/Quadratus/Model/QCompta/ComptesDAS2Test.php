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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ComptesDAS2;

/**
 * Comptes d a s2 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ComptesDAS2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ComptesDAS2();

        $this->assertNull($obj->getAvantageNature());
        $this->assertNull($obj->getIndemniteRbt());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getNature1());
        $this->assertNull($obj->getNature2());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getRetenueSource());
        $this->assertNull($obj->getTVADA());
        $this->assertNull($obj->getTypeAN());
        $this->assertNull($obj->getTypeIR());
        $this->assertNull($obj->getTypeRS());
    }

    /**
     * Tests the setAvantageNature() method.
     *
     * @return void
     */
    public function testSetAvantageNature() {

        $obj = new ComptesDAS2();

        $obj->setAvantageNature(10.092018);
        $this->assertEquals(10.092018, $obj->getAvantageNature());
    }

    /**
     * Tests the setIndemniteRbt() method.
     *
     * @return void
     */
    public function testSetIndemniteRbt() {

        $obj = new ComptesDAS2();

        $obj->setIndemniteRbt(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemniteRbt());
    }

    /**
     * Tests the setMontant1() method.
     *
     * @return void
     */
    public function testSetMontant1() {

        $obj = new ComptesDAS2();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests the setMontant2() method.
     *
     * @return void
     */
    public function testSetMontant2() {

        $obj = new ComptesDAS2();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests the setNature1() method.
     *
     * @return void
     */
    public function testSetNature1() {

        $obj = new ComptesDAS2();

        $obj->setNature1("nature1");
        $this->assertEquals("nature1", $obj->getNature1());
    }

    /**
     * Tests the setNature2() method.
     *
     * @return void
     */
    public function testSetNature2() {

        $obj = new ComptesDAS2();

        $obj->setNature2("nature2");
        $this->assertEquals("nature2", $obj->getNature2());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new ComptesDAS2();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setRetenueSource() method.
     *
     * @return void
     */
    public function testSetRetenueSource() {

        $obj = new ComptesDAS2();

        $obj->setRetenueSource(10.092018);
        $this->assertEquals(10.092018, $obj->getRetenueSource());
    }

    /**
     * Tests the setTVADA() method.
     *
     * @return void
     */
    public function testSetTVADA() {

        $obj = new ComptesDAS2();

        $obj->setTVADA(10.092018);
        $this->assertEquals(10.092018, $obj->getTVADA());
    }

    /**
     * Tests the setTypeAN() method.
     *
     * @return void
     */
    public function testSetTypeAN() {

        $obj = new ComptesDAS2();

        $obj->setTypeAN("typeAN");
        $this->assertEquals("typeAN", $obj->getTypeAN());
    }

    /**
     * Tests the setTypeIR() method.
     *
     * @return void
     */
    public function testSetTypeIR() {

        $obj = new ComptesDAS2();

        $obj->setTypeIR("typeIR");
        $this->assertEquals("typeIR", $obj->getTypeIR());
    }

    /**
     * Tests the setTypeRS() method.
     *
     * @return void
     */
    public function testSetTypeRS() {

        $obj = new ComptesDAS2();

        $obj->setTypeRS("typeRS");
        $this->assertEquals("typeRS", $obj->getTypeRS());
    }
}
