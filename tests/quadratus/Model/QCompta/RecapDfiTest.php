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

use WBW\Library\Quadratus\Model\QCompta\RecapDfi;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Recap dfi test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class RecapDfiTest extends AbstractTestCase {

    /**
     * Tests setAnneeDed()
     *
     * @return void
     */
    public function testSetAnneeDed(): void {

        $obj = new RecapDfi();

        $obj->setAnneeDed(10);
        $this->assertEquals(10, $obj->getAnneeDed());
    }

    /**
     * Tests setAnneeUtilisation()
     *
     * @return void
     */
    public function testSetAnneeUtilisation(): void {

        $obj = new RecapDfi();

        $obj->setAnneeUtilisation(10);
        $this->assertEquals(10, $obj->getAnneeUtilisation());
    }

    /**
     * Tests setImmobilisations()
     *
     * @return void
     */
    public function testSetImmobilisations(): void {

        $obj = new RecapDfi();

        $obj->setImmobilisations(10.092018);
        $this->assertEquals(10.092018, $obj->getImmobilisations());
    }

    /**
     * Tests setMttAnnee()
     *
     * @return void
     */
    public function testSetMttAnnee(): void {

        $obj = new RecapDfi();

        $obj->setMttAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getMttAnnee());
    }

    /**
     * Tests setPartsSociales()
     *
     * @return void
     */
    public function testSetPartsSociales(): void {

        $obj = new RecapDfi();

        $obj->setPartsSociales(10.092018);
        $this->assertEquals(10.092018, $obj->getPartsSociales());
    }

    /**
     * Tests setReintAnticipee()
     *
     * @return void
     */
    public function testSetReintAnticipee(): void {

        $obj = new RecapDfi();

        $obj->setReintAnticipee(10.092018);
        $this->assertEquals(10.092018, $obj->getReintAnticipee());
    }

    /**
     * Tests setStocks()
     *
     * @return void
     */
    public function testSetStocks(): void {

        $obj = new RecapDfi();

        $obj->setStocks(10.092018);
        $this->assertEquals(10.092018, $obj->getStocks());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
