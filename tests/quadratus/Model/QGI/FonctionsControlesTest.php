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

use WBW\Library\Quadratus\Model\QGI\FonctionsControles;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fonctions controles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class FonctionsControlesTest extends AbstractTestCase {

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new FonctionsControles();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setMotControle()
     *
     * @return void
     */
    public function testSetMotControle(): void {

        $obj = new FonctionsControles();

        $obj->setMotControle("motControle");
        $this->assertEquals("motControle", $obj->getMotControle());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new FonctionsControles();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FonctionsControles();

        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMotControle());
        $this->assertNull($obj->getType());
    }
}
