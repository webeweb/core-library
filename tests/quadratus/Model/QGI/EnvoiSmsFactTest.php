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

use WBW\Library\Quadratus\Model\QGI\EnvoiSmsFact;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Envoi sms fact test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class EnvoiSmsFactTest extends AbstractTestCase {

    /**
     * Tests setCodeAction()
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new EnvoiSmsFact();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new EnvoiSmsFact();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setMsgClient()
     *
     * @return void
     */
    public function testSetMsgClient(): void {

        $obj = new EnvoiSmsFact();

        $obj->setMsgClient("msgClient");
        $this->assertEquals("msgClient", $obj->getMsgClient());
    }

    /**
     * Tests setMsgRepresentant()
     *
     * @return void
     */
    public function testSetMsgRepresentant(): void {

        $obj = new EnvoiSmsFact();

        $obj->setMsgRepresentant("msgRepresentant");
        $this->assertEquals("msgRepresentant", $obj->getMsgRepresentant());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EnvoiSmsFact();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getMsgClient());
        $this->assertNull($obj->getMsgRepresentant());
    }
}
