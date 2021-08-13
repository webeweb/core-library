<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\ActionsCoInvites;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Actions co invites test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ActionsCoInvitesTest extends AbstractTestCase {

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new ActionsCoInvites();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ActionsCoInvites();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeColl() method.
     *
     * @return void
     */
    public function testSetCodeColl(): void {

        $obj = new ActionsCoInvites();

        $obj->setCodeColl("codeColl");
        $this->assertEquals("codeColl", $obj->getCodeColl());
    }

    /**
     * Tests the setDateAjout() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAjout(): void {

        // Set a Date/time mock.
        $dateAjout = new DateTime("2018-09-10");

        $obj = new ActionsCoInvites();

        $obj->setDateAjout($dateAjout);
        $this->assertSame($dateAjout, $obj->getDateAjout());
    }

    /**
     * Tests the setNomInterlocuteur() method.
     *
     * @return void
     */
    public function testSetNomInterlocuteur(): void {

        $obj = new ActionsCoInvites();

        $obj->setNomInterlocuteur("nomInterlocuteur");
        $this->assertEquals("nomInterlocuteur", $obj->getNomInterlocuteur());
    }

    /**
     * Tests the setNumInterlocuteur() method.
     *
     * @return void
     */
    public function testSetNumInterlocuteur(): void {

        $obj = new ActionsCoInvites();

        $obj->setNumInterlocuteur(10);
        $this->assertEquals(10, $obj->getNumInterlocuteur());
    }

    /**
     * Tests the setRetourNeg() method.
     *
     * @return void
     */
    public function testSetRetourNeg(): void {

        $obj = new ActionsCoInvites();

        $obj->setRetourNeg(true);
        $this->assertEquals(true, $obj->getRetourNeg());
    }

    /**
     * Tests the setTypeInvitation() method.
     *
     * @return void
     */
    public function testSetTypeInvitation(): void {

        $obj = new ActionsCoInvites();

        $obj->setTypeInvitation(10);
        $this->assertEquals(10, $obj->getTypeInvitation());
    }

    /**
     * Tests the setTypeInvite() method.
     *
     * @return void
     */
    public function testSetTypeInvite(): void {

        $obj = new ActionsCoInvites();

        $obj->setTypeInvite("typeInvite");
        $this->assertEquals("typeInvite", $obj->getTypeInvite());
    }

    /**
     * Tests the __construct() method.
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
