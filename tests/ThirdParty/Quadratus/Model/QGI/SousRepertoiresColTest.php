<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\SousRepertoiresCol;

/**
 * Sous repertoires col test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class SousRepertoiresColTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new SousRepertoiresCol();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom() {

        $obj = new SousRepertoiresCol();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNumSousRep() method.
     *
     * @return void
     */
    public function testSetNumSousRep() {

        $obj = new SousRepertoiresCol();

        $obj->setNumSousRep(10);
        $this->assertEquals(10, $obj->getNumSousRep());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new SousRepertoiresCol();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumSousRep());
    }
}
