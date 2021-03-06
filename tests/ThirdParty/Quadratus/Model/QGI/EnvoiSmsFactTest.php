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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\EnvoiSmsFact;

/**
 * Envoi sms fact test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class EnvoiSmsFactTest extends AbstractTestCase {

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new EnvoiSmsFact();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new EnvoiSmsFact();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setMsgClient() method.
     *
     * @return void
     */
    public function testSetMsgClient(): void {

        $obj = new EnvoiSmsFact();

        $obj->setMsgClient("msgClient");
        $this->assertEquals("msgClient", $obj->getMsgClient());
    }

    /**
     * Tests the setMsgRepresentant() method.
     *
     * @return void
     */
    public function testSetMsgRepresentant(): void {

        $obj = new EnvoiSmsFact();

        $obj->setMsgRepresentant("msgRepresentant");
        $this->assertEquals("msgRepresentant", $obj->getMsgRepresentant());
    }

    /**
     * Tests the __construct() method.
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
