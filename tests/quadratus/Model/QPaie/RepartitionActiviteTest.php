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

use WBW\Library\Quadratus\Model\QPaie\RepartitionActivite;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Repartition activite test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RepartitionActiviteTest extends AbstractTestCase {

    /**
     * Tests setCodeService()
     *
     * @return void
     */
    public function testSetCodeService(): void {

        $obj = new RepartitionActivite();

        $obj->setCodeService("codeService");
        $this->assertEquals("codeService", $obj->getCodeService());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new RepartitionActivite();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setTauxVentilation()
     *
     * @return void
     */
    public function testSetTauxVentilation(): void {

        $obj = new RepartitionActivite();

        $obj->setTauxVentilation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxVentilation());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepartitionActivite();

        $this->assertNull($obj->getCodeService());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTauxVentilation());
    }
}
