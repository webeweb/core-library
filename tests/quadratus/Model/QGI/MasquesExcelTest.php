<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\MasquesExcel;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Masques excel test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class MasquesExcelTest extends AbstractTestCase {

    /**
     * Tests setModele()
     *
     * @return void
     */
    public function testSetModele(): void {

        $obj = new MasquesExcel();

        $obj->setModele("modele");
        $this->assertEquals("modele", $obj->getModele());
    }

    /**
     * Tests setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new MasquesExcel();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests setTypeMasque()
     *
     * @return void
     */
    public function testSetTypeMasque(): void {

        $obj = new MasquesExcel();

        $obj->setTypeMasque("typeMasque");
        $this->assertEquals("typeMasque", $obj->getTypeMasque());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new MasquesExcel();

        $this->assertNull($obj->getModele());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTypeMasque());
    }
}
