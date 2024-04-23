<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\ActionsCoInvites;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Actions co invites test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ActionsCoInvitesTest extends AbstractTestCase {

    /**
     * Test setCodeAction()
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new ActionsCoInvites();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ActionsCoInvites();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeColl()
     *
     * @return void
     */
    public function testSetCodeColl(): void {

        $obj = new ActionsCoInvites();

        $obj->setCodeColl("codeColl");
        $this->assertEquals("codeColl", $obj->getCodeColl());
    }

    /**
     * Test setDateAjout()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAjout(): void {

        // Set a Date/time mock.
        $dateAjout = new DateTime("2018-09-10");

        $obj = new ActionsCoInvites();

        $obj->setDateAjout($dateAjout);
        $this->assertSame($dateAjout, $obj->getDateAjout());
    }

    /**
     * Test setNomInterlocuteur()
     *
     * @return void
     */
    public function testSetNomInterlocuteur(): void {

        $obj = new ActionsCoInvites();

        $obj->setNomInterlocuteur("nomInterlocuteur");
        $this->assertEquals("nomInterlocuteur", $obj->getNomInterlocuteur());
    }

    /**
     * Test setNumInterlocuteur()
     *
     * @return void
     */
    public function testSetNumInterlocuteur(): void {

        $obj = new ActionsCoInvites();

        $obj->setNumInterlocuteur(10);
        $this->assertEquals(10, $obj->getNumInterlocuteur());
    }

    /**
     * Test setRetourNeg()
     *
     * @return void
     */
    public function testSetRetourNeg(): void {

        $obj = new ActionsCoInvites();

        $obj->setRetourNeg(true);
        $this->assertTrue($obj->getRetourNeg());
    }

    /**
     * Test setTypeInvitation()
     *
     * @return void
     */
    public function testSetTypeInvitation(): void {

        $obj = new ActionsCoInvites();

        $obj->setTypeInvitation(10);
        $this->assertEquals(10, $obj->getTypeInvitation());
    }

    /**
     * Test setTypeInvite()
     *
     * @return void
     */
    public function testSetTypeInvite(): void {

        $obj = new ActionsCoInvites();

        $obj->setTypeInvite("typeInvite");
        $this->assertEquals("typeInvite", $obj->getTypeInvite());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ActionsCoInvites();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeColl());
        $this->assertNull($obj->getDateAjout());
        $this->assertNull($obj->getNomInterlocuteur());
        $this->assertNull($obj->getNumInterlocuteur());
        $this->assertNull($obj->getRetourNeg());
        $this->assertNull($obj->getTypeInvitation());
        $this->assertNull($obj->getTypeInvite());
    }
}
