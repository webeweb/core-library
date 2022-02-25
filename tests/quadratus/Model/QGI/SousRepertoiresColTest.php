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

use WBW\Library\Quadratus\Model\QGI\SousRepertoiresCol;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Sous repertoires col test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class SousRepertoiresColTest extends AbstractTestCase {

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new SousRepertoiresCol();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setNom()
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new SousRepertoiresCol();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests setNumSousRep()
     *
     * @return void
     */
    public function testSetNumSousRep(): void {

        $obj = new SousRepertoiresCol();

        $obj->setNumSousRep(10);
        $this->assertEquals(10, $obj->getNumSousRep());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SousRepertoiresCol();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumSousRep());
    }
}
