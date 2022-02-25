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

use WBW\Library\Quadratus\Model\QGI\AgendaCollabGroup;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Agenda collab group test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AgendaCollabGroupTest extends AbstractTestCase {

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new AgendaCollabGroup();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeGroupe()
     *
     * @return void
     */
    public function testSetCodeGroupe(): void {

        $obj = new AgendaCollabGroup();

        $obj->setCodeGroupe("codeGroupe");
        $this->assertEquals("codeGroupe", $obj->getCodeGroupe());
    }

    /**
     * Tests setNumLig()
     *
     * @return void
     */
    public function testSetNumLig(): void {

        $obj = new AgendaCollabGroup();

        $obj->setNumLig(10);
        $this->assertEquals(10, $obj->getNumLig());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AgendaCollabGroup();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeGroupe());
        $this->assertNull($obj->getNumLig());
    }
}
