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

use WBW\Library\Quadratus\Model\QGI\DroitsAccesIntervenantsCollab;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Droits acces intervenants collab test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class DroitsAccesIntervenantsCollabTest extends AbstractTestCase {

    /**
     * Test setAccesLibre()
     *
     * @return void
     */
    public function testSetAccesLibre(): void {

        $obj = new DroitsAccesIntervenantsCollab();

        $obj->setAccesLibre(true);
        $this->assertTrue($obj->getAccesLibre());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new DroitsAccesIntervenantsCollab();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setTypeIntervenant()
     *
     * @return void
     */
    public function testSetTypeIntervenant(): void {

        $obj = new DroitsAccesIntervenantsCollab();

        $obj->setTypeIntervenant("typeIntervenant");
        $this->assertEquals("typeIntervenant", $obj->getTypeIntervenant());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DroitsAccesIntervenantsCollab();

        $this->assertNull($obj->getAccesLibre());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getTypeIntervenant());
    }
}
