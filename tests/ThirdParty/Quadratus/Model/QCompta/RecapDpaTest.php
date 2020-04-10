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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\RecapDpa;

/**
 * Recap dpa test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class RecapDpaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new RecapDpa();

        $this->assertNull($obj->getAleasClimat());
        $this->assertNull($obj->getAleasEco());
        $this->assertNull($obj->getAnneeDed());
        $this->assertNull($obj->getAnneeUtilisation());
        $this->assertNull($obj->getAutres());
        $this->assertNull($obj->getFranchDommages());
        $this->assertNull($obj->getMttAnnee());
        $this->assertNull($obj->getPrimesFranch());
    }

    /**
     * Tests the setAleasClimat() method.
     *
     * @return void
     */
    public function testSetAleasClimat() {

        $obj = new RecapDpa();

        $obj->setAleasClimat(10.092018);
        $this->assertEquals(10.092018, $obj->getAleasClimat());
    }

    /**
     * Tests the setAleasEco() method.
     *
     * @return void
     */
    public function testSetAleasEco() {

        $obj = new RecapDpa();

        $obj->setAleasEco(10.092018);
        $this->assertEquals(10.092018, $obj->getAleasEco());
    }

    /**
     * Tests the setAnneeDed() method.
     *
     * @return void
     */
    public function testSetAnneeDed() {

        $obj = new RecapDpa();

        $obj->setAnneeDed(10);
        $this->assertEquals(10, $obj->getAnneeDed());
    }

    /**
     * Tests the setAnneeUtilisation() method.
     *
     * @return void
     */
    public function testSetAnneeUtilisation() {

        $obj = new RecapDpa();

        $obj->setAnneeUtilisation(10);
        $this->assertEquals(10, $obj->getAnneeUtilisation());
    }

    /**
     * Tests the setAutres() method.
     *
     * @return void
     */
    public function testSetAutres() {

        $obj = new RecapDpa();

        $obj->setAutres(10.092018);
        $this->assertEquals(10.092018, $obj->getAutres());
    }

    /**
     * Tests the setFranchDommages() method.
     *
     * @return void
     */
    public function testSetFranchDommages() {

        $obj = new RecapDpa();

        $obj->setFranchDommages(10.092018);
        $this->assertEquals(10.092018, $obj->getFranchDommages());
    }

    /**
     * Tests the setMttAnnee() method.
     *
     * @return void
     */
    public function testSetMttAnnee() {

        $obj = new RecapDpa();

        $obj->setMttAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getMttAnnee());
    }

    /**
     * Tests the setPrimesFranch() method.
     *
     * @return void
     */
    public function testSetPrimesFranch() {

        $obj = new RecapDpa();

        $obj->setPrimesFranch(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimesFranch());
    }
}
