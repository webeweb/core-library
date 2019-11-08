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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ActionsCoInvites;

/**
 * Actions co invites test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoInvitesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction() {

        $obj = new ActionsCoInvites();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new ActionsCoInvites();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeColl() method.
     *
     * @return void
     */
    public function testSetCodeColl() {

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
    public function testSetDateAjout() {

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
    public function testSetNomInterlocuteur() {

        $obj = new ActionsCoInvites();

        $obj->setNomInterlocuteur("nomInterlocuteur");
        $this->assertEquals("nomInterlocuteur", $obj->getNomInterlocuteur());
    }

    /**
     * Tests the setNumInterlocuteur() method.
     *
     * @return void
     */
    public function testSetNumInterlocuteur() {

        $obj = new ActionsCoInvites();

        $obj->setNumInterlocuteur(10);
        $this->assertEquals(10, $obj->getNumInterlocuteur());
    }

    /**
     * Tests the setRetourNeg() method.
     *
     * @return void
     */
    public function testSetRetourNeg() {

        $obj = new ActionsCoInvites();

        $obj->setRetourNeg(true);
        $this->assertEquals(true, $obj->getRetourNeg());
    }

    /**
     * Tests the setTypeInvitation() method.
     *
     * @return void
     */
    public function testSetTypeInvitation() {

        $obj = new ActionsCoInvites();

        $obj->setTypeInvitation(10);
        $this->assertEquals(10, $obj->getTypeInvitation());
    }

    /**
     * Tests the setTypeInvite() method.
     *
     * @return void
     */
    public function testSetTypeInvite() {

        $obj = new ActionsCoInvites();

        $obj->setTypeInvite("typeInvite");
        $this->assertEquals("typeInvite", $obj->getTypeInvite());
    }
}
