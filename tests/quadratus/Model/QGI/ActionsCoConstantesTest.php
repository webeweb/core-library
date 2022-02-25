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

use WBW\Library\Quadratus\Model\QGI\ActionsCoConstantes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Actions co constantes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ActionsCoConstantesTest extends AbstractTestCase {

    /**
     * Tests setLieuEdition()
     *
     * @return void
     */
    public function testSetLieuEdition(): void {

        $obj = new ActionsCoConstantes();

        $obj->setLieuEdition("lieuEdition");
        $this->assertEquals("lieuEdition", $obj->getLieuEdition());
    }

    /**
     * Tests setNumDeclaration()
     *
     * @return void
     */
    public function testSetNumDeclaration(): void {

        $obj = new ActionsCoConstantes();

        $obj->setNumDeclaration("numDeclaration");
        $this->assertEquals("numDeclaration", $obj->getNumDeclaration());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ActionsCoConstantes();

        $this->assertNull($obj->getLieuEdition());
        $this->assertNull($obj->getNumDeclaration());
    }
}
