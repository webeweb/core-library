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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RepartitionActivite;

/**
 * Repartition activite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RepartitionActiviteTest extends AbstractTestCase {

    /**
     * Tests the setCodeService() method.
     *
     * @return void
     */
    public function testSetCodeService(): void {

        $obj = new RepartitionActivite();

        $obj->setCodeService("codeService");
        $this->assertEquals("codeService", $obj->getCodeService());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new RepartitionActivite();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setTauxVentilation() method.
     *
     * @return void
     */
    public function testSetTauxVentilation(): void {

        $obj = new RepartitionActivite();

        $obj->setTauxVentilation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxVentilation());
    }

    /**
     * Tests the __construct() method.
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
