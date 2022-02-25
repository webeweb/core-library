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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\ActionsCo;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Actions co test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ActionsCoTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new ActionsCo();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setDateCreation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new ActionsCo();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests setDateFinVie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinVie(): void {

        // Set a Date/time mock.
        $dateFinVie = new DateTime("2018-09-10");

        $obj = new ActionsCo();

        $obj->setDateFinVie($dateFinVie);
        $this->assertSame($dateFinVie, $obj->getDateFinVie());
    }

    /**
     * Tests setDateModification()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new ActionsCo();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ActionsCo();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLibelleMemo()
     *
     * @return void
     */
    public function testSetLibelleMemo(): void {

        $obj = new ActionsCo();

        $obj->setLibelleMemo("libelleMemo");
        $this->assertEquals("libelleMemo", $obj->getLibelleMemo());
    }

    /**
     * Tests setOpConfirmation()
     *
     * @return void
     */
    public function testSetOpConfirmation(): void {

        $obj = new ActionsCo();

        $obj->setOpConfirmation(true);
        $this->assertEquals(true, $obj->getOpConfirmation());
    }

    /**
     * Tests setOpContratSigne()
     *
     * @return void
     */
    public function testSetOpContratSigne(): void {

        $obj = new ActionsCo();

        $obj->setOpContratSigne(true);
        $this->assertEquals(true, $obj->getOpContratSigne());
    }

    /**
     * Tests setOpExplication()
     *
     * @return void
     */
    public function testSetOpExplication(): void {

        $obj = new ActionsCo();

        $obj->setOpExplication(true);
        $this->assertEquals(true, $obj->getOpExplication());
    }

    /**
     * Tests setOpInvitationIndiv()
     *
     * @return void
     */
    public function testSetOpInvitationIndiv(): void {

        $obj = new ActionsCo();

        $obj->setOpInvitationIndiv(true);
        $this->assertEquals(true, $obj->getOpInvitationIndiv());
    }

    /**
     * Tests setOpInvitationMasse()
     *
     * @return void
     */
    public function testSetOpInvitationMasse(): void {

        $obj = new ActionsCo();

        $obj->setOpInvitationMasse(true);
        $this->assertEquals(true, $obj->getOpInvitationMasse());
    }

    /**
     * Tests setOpPresence()
     *
     * @return void
     */
    public function testSetOpPresence(): void {

        $obj = new ActionsCo();

        $obj->setOpPresence(true);
        $this->assertEquals(true, $obj->getOpPresence());
    }

    /**
     * Tests setOpPriseRdv()
     *
     * @return void
     */
    public function testSetOpPriseRdv(): void {

        $obj = new ActionsCo();

        $obj->setOpPriseRdv(true);
        $this->assertEquals(true, $obj->getOpPriseRdv());
    }

    /**
     * Tests setOpRelance()
     *
     * @return void
     */
    public function testSetOpRelance(): void {

        $obj = new ActionsCo();

        $obj->setOpRelance(true);
        $this->assertEquals(true, $obj->getOpRelance());
    }

    /**
     * Tests setOpReponseInscrip()
     *
     * @return void
     */
    public function testSetOpReponseInscrip(): void {

        $obj = new ActionsCo();

        $obj->setOpReponseInscrip(true);
        $this->assertEquals(true, $obj->getOpReponseInscrip());
    }

    /**
     * Tests setOpReponseNegative()
     *
     * @return void
     */
    public function testSetOpReponseNegative(): void {

        $obj = new ActionsCo();

        $obj->setOpReponseNegative(true);
        $this->assertEquals(true, $obj->getOpReponseNegative());
    }

    /**
     * Tests setOpReservation()
     *
     * @return void
     */
    public function testSetOpReservation(): void {

        $obj = new ActionsCo();

        $obj->setOpReservation(true);
        $this->assertEquals(true, $obj->getOpReservation());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ActionsCo();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateFinVie());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleMemo());
        $this->assertNull($obj->getOpConfirmation());
        $this->assertNull($obj->getOpContratSigne());
        $this->assertNull($obj->getOpExplication());
        $this->assertNull($obj->getOpInvitationIndiv());
        $this->assertNull($obj->getOpInvitationMasse());
        $this->assertNull($obj->getOpPresence());
        $this->assertNull($obj->getOpPriseRdv());
        $this->assertNull($obj->getOpRelance());
        $this->assertNull($obj->getOpReponseInscrip());
        $this->assertNull($obj->getOpReponseNegative());
        $this->assertNull($obj->getOpReservation());
    }
}
