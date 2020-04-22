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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaGroupesCompos2;

/**
 * Agenda groupes compos2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaGroupesCompos2Test extends AbstractTestCase {

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new AgendaGroupesCompos2();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeGroupe() method.
     *
     * @return void
     */
    public function testSetCodeGroupe() {

        $obj = new AgendaGroupesCompos2();

        $obj->setCodeGroupe("codeGroupe");
        $this->assertEquals("codeGroupe", $obj->getCodeGroupe());
    }

    /**
     * Tests the setNumLig() method.
     *
     * @return void
     */
    public function testSetNumLig() {

        $obj = new AgendaGroupesCompos2();

        $obj->setNumLig(10);
        $this->assertEquals(10, $obj->getNumLig());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new AgendaGroupesCompos2();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeGroupe());
        $this->assertNull($obj->getNumLig());
    }
}
