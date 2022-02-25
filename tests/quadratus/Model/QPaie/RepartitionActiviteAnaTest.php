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

use WBW\Library\Quadratus\Model\QPaie\RepartitionActiviteAna;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Repartition activite ana test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RepartitionActiviteAnaTest extends AbstractTestCase {

    /**
     * Tests setCentre()
     *
     * @return void
     */
    public function testSetCentre(): void {

        $obj = new RepartitionActiviteAna();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Tests setNature()
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new RepartitionActiviteAna();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new RepartitionActiviteAna();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setTauxVentilation()
     *
     * @return void
     */
    public function testSetTauxVentilation(): void {

        $obj = new RepartitionActiviteAna();

        $obj->setTauxVentilation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxVentilation());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepartitionActiviteAna();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTauxVentilation());
    }
}
