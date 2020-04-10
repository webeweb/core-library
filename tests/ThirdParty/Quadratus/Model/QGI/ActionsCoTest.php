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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ActionsCo;

/**
 * Actions co test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new ActionsCo();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new ActionsCo();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateFinVie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinVie() {

        // Set a Date/time mock.
        $dateFinVie = new DateTime("2018-09-10");

        $obj = new ActionsCo();

        $obj->setDateFinVie($dateFinVie);
        $this->assertSame($dateFinVie, $obj->getDateFinVie());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification() {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new ActionsCo();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new ActionsCo();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelleMemo() method.
     *
     * @return void
     */
    public function testSetLibelleMemo() {

        $obj = new ActionsCo();

        $obj->setLibelleMemo("libelleMemo");
        $this->assertEquals("libelleMemo", $obj->getLibelleMemo());
    }

    /**
     * Tests the setOpConfirmation() method.
     *
     * @return void
     */
    public function testSetOpConfirmation() {

        $obj = new ActionsCo();

        $obj->setOpConfirmation(true);
        $this->assertEquals(true, $obj->getOpConfirmation());
    }

    /**
     * Tests the setOpContratSigne() method.
     *
     * @return void
     */
    public function testSetOpContratSigne() {

        $obj = new ActionsCo();

        $obj->setOpContratSigne(true);
        $this->assertEquals(true, $obj->getOpContratSigne());
    }

    /**
     * Tests the setOpExplication() method.
     *
     * @return void
     */
    public function testSetOpExplication() {

        $obj = new ActionsCo();

        $obj->setOpExplication(true);
        $this->assertEquals(true, $obj->getOpExplication());
    }

    /**
     * Tests the setOpInvitationIndiv() method.
     *
     * @return void
     */
    public function testSetOpInvitationIndiv() {

        $obj = new ActionsCo();

        $obj->setOpInvitationIndiv(true);
        $this->assertEquals(true, $obj->getOpInvitationIndiv());
    }

    /**
     * Tests the setOpInvitationMasse() method.
     *
     * @return void
     */
    public function testSetOpInvitationMasse() {

        $obj = new ActionsCo();

        $obj->setOpInvitationMasse(true);
        $this->assertEquals(true, $obj->getOpInvitationMasse());
    }

    /**
     * Tests the setOpPresence() method.
     *
     * @return void
     */
    public function testSetOpPresence() {

        $obj = new ActionsCo();

        $obj->setOpPresence(true);
        $this->assertEquals(true, $obj->getOpPresence());
    }

    /**
     * Tests the setOpPriseRdv() method.
     *
     * @return void
     */
    public function testSetOpPriseRdv() {

        $obj = new ActionsCo();

        $obj->setOpPriseRdv(true);
        $this->assertEquals(true, $obj->getOpPriseRdv());
    }

    /**
     * Tests the setOpRelance() method.
     *
     * @return void
     */
    public function testSetOpRelance() {

        $obj = new ActionsCo();

        $obj->setOpRelance(true);
        $this->assertEquals(true, $obj->getOpRelance());
    }

    /**
     * Tests the setOpReponseInscrip() method.
     *
     * @return void
     */
    public function testSetOpReponseInscrip() {

        $obj = new ActionsCo();

        $obj->setOpReponseInscrip(true);
        $this->assertEquals(true, $obj->getOpReponseInscrip());
    }

    /**
     * Tests the setOpReponseNegative() method.
     *
     * @return void
     */
    public function testSetOpReponseNegative() {

        $obj = new ActionsCo();

        $obj->setOpReponseNegative(true);
        $this->assertEquals(true, $obj->getOpReponseNegative());
    }

    /**
     * Tests the setOpReservation() method.
     *
     * @return void
     */
    public function testSetOpReservation() {

        $obj = new ActionsCo();

        $obj->setOpReservation(true);
        $this->assertEquals(true, $obj->getOpReservation());
    }
}
