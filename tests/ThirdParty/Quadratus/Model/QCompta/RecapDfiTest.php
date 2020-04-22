<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\RecapDfi;

/**
 * Recap dfi test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class RecapDfiTest extends AbstractTestCase {

    /**
     * Tests the setAnneeDed() method.
     *
     * @return void
     */
    public function testSetAnneeDed() {

        $obj = new RecapDfi();

        $obj->setAnneeDed(10);
        $this->assertEquals(10, $obj->getAnneeDed());
    }

    /**
     * Tests the setAnneeUtilisation() method.
     *
     * @return void
     */
    public function testSetAnneeUtilisation() {

        $obj = new RecapDfi();

        $obj->setAnneeUtilisation(10);
        $this->assertEquals(10, $obj->getAnneeUtilisation());
    }

    /**
     * Tests the setImmobilisations() method.
     *
     * @return void
     */
    public function testSetImmobilisations() {

        $obj = new RecapDfi();

        $obj->setImmobilisations(10.092018);
        $this->assertEquals(10.092018, $obj->getImmobilisations());
    }

    /**
     * Tests the setMttAnnee() method.
     *
     * @return void
     */
    public function testSetMttAnnee() {

        $obj = new RecapDfi();

        $obj->setMttAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getMttAnnee());
    }

    /**
     * Tests the setPartsSociales() method.
     *
     * @return void
     */
    public function testSetPartsSociales() {

        $obj = new RecapDfi();

        $obj->setPartsSociales(10.092018);
        $this->assertEquals(10.092018, $obj->getPartsSociales());
    }

    /**
     * Tests the setReintAnticipee() method.
     *
     * @return void
     */
    public function testSetReintAnticipee() {

        $obj = new RecapDfi();

        $obj->setReintAnticipee(10.092018);
        $this->assertEquals(10.092018, $obj->getReintAnticipee());
    }

    /**
     * Tests the setStocks() method.
     *
     * @return void
     */
    public function testSetStocks() {

        $obj = new RecapDfi();

        $obj->setStocks(10.092018);
        $this->assertEquals(10.092018, $obj->getStocks());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new RecapDfi();

        $this->assertNull($obj->getAnneeDed());
        $this->assertNull($obj->getAnneeUtilisation());
        $this->assertNull($obj->getImmobilisations());
        $this->assertNull($obj->getMttAnnee());
        $this->assertNull($obj->getPartsSociales());
        $this->assertNull($obj->getReintAnticipee());
        $this->assertNull($obj->getStocks());
    }
}
