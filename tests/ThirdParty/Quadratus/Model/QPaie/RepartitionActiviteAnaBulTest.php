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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RepartitionActiviteAnaBul;

/**
 * Repartition activite ana bul test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RepartitionActiviteAnaBulTest extends AbstractTestCase {

    /**
     * Tests the setCentre() method.
     *
     * @return void
     */
    public function testSetCentre() {

        $obj = new RepartitionActiviteAnaBul();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new RepartitionActiviteAnaBul();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNature() method.
     *
     * @return void
     */
    public function testSetNature() {

        $obj = new RepartitionActiviteAnaBul();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new RepartitionActiviteAnaBul();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new RepartitionActiviteAnaBul();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setTauxVentilation() method.
     *
     * @return void
     */
    public function testSetTauxVentilation() {

        $obj = new RepartitionActiviteAnaBul();

        $obj->setTauxVentilation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxVentilation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new RepartitionActiviteAnaBul();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTauxVentilation());
    }
}
