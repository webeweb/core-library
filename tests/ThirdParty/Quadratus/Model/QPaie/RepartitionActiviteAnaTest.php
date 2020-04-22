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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RepartitionActiviteAna;

/**
 * Repartition activite ana test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RepartitionActiviteAnaTest extends AbstractTestCase {

    /**
     * Tests the setCentre() method.
     *
     * @return void
     */
    public function testSetCentre() {

        $obj = new RepartitionActiviteAna();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Tests the setNature() method.
     *
     * @return void
     */
    public function testSetNature() {

        $obj = new RepartitionActiviteAna();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new RepartitionActiviteAna();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setTauxVentilation() method.
     *
     * @return void
     */
    public function testSetTauxVentilation() {

        $obj = new RepartitionActiviteAna();

        $obj->setTauxVentilation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxVentilation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new RepartitionActiviteAna();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTauxVentilation());
    }
}
