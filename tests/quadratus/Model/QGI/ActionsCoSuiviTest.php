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

use WBW\Library\Quadratus\Model\QGI\ActionsCoSuivi;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Actions co suivi test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ActionsCoSuiviTest extends AbstractTestCase {

    /**
     * Tests setCodeAction()
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new ActionsCoSuivi();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ActionsCoSuivi();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeManif()
     *
     * @return void
     */
    public function testSetCodeManif(): void {

        $obj = new ActionsCoSuivi();

        $obj->setCodeManif("codeManif");
        $this->assertEquals("codeManif", $obj->getCodeManif());
    }

    /**
     * Tests setConfirmes()
     *
     * @return void
     */
    public function testSetConfirmes(): void {

        $obj = new ActionsCoSuivi();

        $obj->setConfirmes(10);
        $this->assertEquals(10, $obj->getConfirmes());
    }

    /**
     * Tests setContrat()
     *
     * @return void
     */
    public function testSetContrat(): void {

        $obj = new ActionsCoSuivi();

        $obj->setContrat(10);
        $this->assertEquals(10, $obj->getContrat());
    }

    /**
     * Tests setInscrits()
     *
     * @return void
     */
    public function testSetInscrits(): void {

        $obj = new ActionsCoSuivi();

        $obj->setInscrits(10);
        $this->assertEquals(10, $obj->getInscrits());
    }

    /**
     * Tests setNumInterlocuteur()
     *
     * @return void
     */
    public function testSetNumInterlocuteur(): void {

        $obj = new ActionsCoSuivi();

        $obj->setNumInterlocuteur(10);
        $this->assertEquals(10, $obj->getNumInterlocuteur());
    }

    /**
     * Tests setNumSeance()
     *
     * @return void
     */
    public function testSetNumSeance(): void {

        $obj = new ActionsCoSuivi();

        $obj->setNumSeance(10);
        $this->assertEquals(10, $obj->getNumSeance());
    }

    /**
     * Tests setPresents()
     *
     * @return void
     */
    public function testSetPresents(): void {

        $obj = new ActionsCoSuivi();

        $obj->setPresents(10);
        $this->assertEquals(10, $obj->getPresents());
    }

    /**
     * Tests setPriseRdv()
     *
     * @return void
     */
    public function testSetPriseRdv(): void {

        $obj = new ActionsCoSuivi();

        $obj->setPriseRdv(10);
        $this->assertEquals(10, $obj->getPriseRdv());
    }

    /**
     * Tests setTypeInvite()
     *
     * @return void
     */
    public function testSetTypeInvite(): void {

        $obj = new ActionsCoSuivi();

        $obj->setTypeInvite("typeInvite");
        $this->assertEquals("typeInvite", $obj->getTypeInvite());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
