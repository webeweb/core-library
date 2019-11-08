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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaGroupesCompos;

/**
 * Agenda groupes compos test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaGroupesComposTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AgendaGroupesCompos();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeGroupe());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new AgendaGroupesCompos();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeGroupe() method.
     *
     * @return void
     */
    public function testSetCodeGroupe() {

        $obj = new AgendaGroupesCompos();

        $obj->setCodeGroupe("codeGroupe");
        $this->assertEquals("codeGroupe", $obj->getCodeGroupe());
    }
}
