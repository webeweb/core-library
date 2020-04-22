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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ActionsCoSuivi;

/**
 * Actions co suivi test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoSuiviTest extends AbstractTestCase {

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction() {

        $obj = new ActionsCoSuivi();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new ActionsCoSuivi();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeManif() method.
     *
     * @return void
     */
    public function testSetCodeManif() {

        $obj = new ActionsCoSuivi();

        $obj->setCodeManif("codeManif");
        $this->assertEquals("codeManif", $obj->getCodeManif());
    }

    /**
     * Tests the setConfirmes() method.
     *
     * @return void
     */
    public function testSetConfirmes() {

        $obj = new ActionsCoSuivi();

        $obj->setConfirmes(10);
        $this->assertEquals(10, $obj->getConfirmes());
    }

    /**
     * Tests the setContrat() method.
     *
     * @return void
     */
    public function testSetContrat() {

        $obj = new ActionsCoSuivi();

        $obj->setContrat(10);
        $this->assertEquals(10, $obj->getContrat());
    }

    /**
     * Tests the setInscrits() method.
     *
     * @return void
     */
    public function testSetInscrits() {

        $obj = new ActionsCoSuivi();

        $obj->setInscrits(10);
        $this->assertEquals(10, $obj->getInscrits());
    }

    /**
     * Tests the setNumInterlocuteur() method.
     *
     * @return void
     */
    public function testSetNumInterlocuteur() {

        $obj = new ActionsCoSuivi();

        $obj->setNumInterlocuteur(10);
        $this->assertEquals(10, $obj->getNumInterlocuteur());
    }

    /**
     * Tests the setNumSeance() method.
     *
     * @return void
     */
    public function testSetNumSeance() {

        $obj = new ActionsCoSuivi();

        $obj->setNumSeance(10);
        $this->assertEquals(10, $obj->getNumSeance());
    }

    /**
     * Tests the setPresents() method.
     *
     * @return void
     */
    public function testSetPresents() {

        $obj = new ActionsCoSuivi();

        $obj->setPresents(10);
        $this->assertEquals(10, $obj->getPresents());
    }

    /**
     * Tests the setPriseRdv() method.
     *
     * @return void
     */
    public function testSetPriseRdv() {

        $obj = new ActionsCoSuivi();

        $obj->setPriseRdv(10);
        $this->assertEquals(10, $obj->getPriseRdv());
    }

    /**
     * Tests the setTypeInvite() method.
     *
     * @return void
     */
    public function testSetTypeInvite() {

        $obj = new ActionsCoSuivi();

        $obj->setTypeInvite("typeInvite");
        $this->assertEquals("typeInvite", $obj->getTypeInvite());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ActionsCoSuivi();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeManif());
        $this->assertNull($obj->getConfirmes());
        $this->assertNull($obj->getContrat());
        $this->assertNull($obj->getInscrits());
        $this->assertNull($obj->getNumInterlocuteur());
        $this->assertNull($obj->getNumSeance());
        $this->assertNull($obj->getPresents());
        $this->assertNull($obj->getPriseRdv());
        $this->assertNull($obj->getTypeInvite());
    }
}
