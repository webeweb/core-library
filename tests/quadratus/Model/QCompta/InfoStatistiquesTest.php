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

use WBW\Library\Quadratus\Model\QCompta\InfoStatistiques;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Info statistiques test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class InfoStatistiquesTest extends AbstractTestCase {

    /**
     * Tests setAFacturerHorsEx()
     *
     * @return void
     */
    public function testSetAFacturerHorsEx(): void {

        $obj = new InfoStatistiques();

        $obj->setAFacturerHorsEx(10);
        $this->assertEquals(10, $obj->getAFacturerHorsEx());
    }

    /**
     * Tests setAFacturerSurEx()
     *
     * @return void
     */
    public function testSetAFacturerSurEx(): void {

        $obj = new InfoStatistiques();

        $obj->setAFacturerSurEx(10);
        $this->assertEquals(10, $obj->getAFacturerSurEx());
    }

    /**
     * Tests setCodeElement()
     *
     * @return void
     */
    public function testSetCodeElement(): void {

        $obj = new InfoStatistiques();

        $obj->setCodeElement(10);
        $this->assertEquals(10, $obj->getCodeElement());
    }

    /**
     * Tests setCompteurHorsEx()
     *
     * @return void
     */
    public function testSetCompteurHorsEx(): void {

        $obj = new InfoStatistiques();

        $obj->setCompteurHorsEx(10);
        $this->assertEquals(10, $obj->getCompteurHorsEx());
    }

    /**
     * Tests setCompteurSurEx()
     *
     * @return void
     */
    public function testSetCompteurSurEx(): void {

        $obj = new InfoStatistiques();

        $obj->setCompteurSurEx(10);
        $this->assertEquals(10, $obj->getCompteurSurEx());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new InfoStatistiques();

        $this->assertNull($obj->getAFacturerHorsEx());
        $this->assertNull($obj->getAFacturerSurEx());
        $this->assertNull($obj->getCodeElement());
        $this->assertNull($obj->getCompteurHorsEx());
        $this->assertNull($obj->getCompteurSurEx());
    }
}
