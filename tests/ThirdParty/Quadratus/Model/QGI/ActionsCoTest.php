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
 * Actions co model test.
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
    public function testConstruct() {

        $obj = new ActionsCo();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateFinVie());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleMemo());
        $this->assertNull($obj->getOp_Confirmation());
        $this->assertNull($obj->getOp_ContratSigne());
        $this->assertNull($obj->getOp_Explication());
        $this->assertNull($obj->getOp_InvitationIndiv());
        $this->assertNull($obj->getOp_InvitationMasse());
        $this->assertNull($obj->getOp_Presence());
        $this->assertNull($obj->getOp_PriseRDV());
        $this->assertNull($obj->getOp_Relance());
        $this->assertNull($obj->getOp_ReponseInscrip());
        $this->assertNull($obj->getOp_ReponseNegative());
        $this->assertNull($obj->getOp_Reservation());
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

        $obj = new ActionsCo();

        $obj->setDateCreation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
    }

    /**
     * Tests the setDateFinVie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinVie() {

        $obj = new ActionsCo();

        $obj->setDateFinVie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinVie());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification() {

        $obj = new ActionsCo();

        $obj->setDateModification(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
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
     * Tests the setOp_Confirmation() method.
     *
     * @return void
     */
    public function testSetOp_Confirmation() {

        $obj = new ActionsCo();

        $obj->setOp_Confirmation(true);
        $this->assertEquals(true, $obj->getOp_Confirmation());
    }

    /**
     * Tests the setOp_ContratSigne() method.
     *
     * @return void
     */
    public function testSetOp_ContratSigne() {

        $obj = new ActionsCo();

        $obj->setOp_ContratSigne(true);
        $this->assertEquals(true, $obj->getOp_ContratSigne());
    }

    /**
     * Tests the setOp_Explication() method.
     *
     * @return void
     */
    public function testSetOp_Explication() {

        $obj = new ActionsCo();

        $obj->setOp_Explication(true);
        $this->assertEquals(true, $obj->getOp_Explication());
    }

    /**
     * Tests the setOp_InvitationIndiv() method.
     *
     * @return void
     */
    public function testSetOp_InvitationIndiv() {

        $obj = new ActionsCo();

        $obj->setOp_InvitationIndiv(true);
        $this->assertEquals(true, $obj->getOp_InvitationIndiv());
    }

    /**
     * Tests the setOp_InvitationMasse() method.
     *
     * @return void
     */
    public function testSetOp_InvitationMasse() {

        $obj = new ActionsCo();

        $obj->setOp_InvitationMasse(true);
        $this->assertEquals(true, $obj->getOp_InvitationMasse());
    }

    /**
     * Tests the setOp_Presence() method.
     *
     * @return void
     */
    public function testSetOp_Presence() {

        $obj = new ActionsCo();

        $obj->setOp_Presence(true);
        $this->assertEquals(true, $obj->getOp_Presence());
    }

    /**
     * Tests the setOp_PriseRDV() method.
     *
     * @return void
     */
    public function testSetOp_PriseRDV() {

        $obj = new ActionsCo();

        $obj->setOp_PriseRDV(true);
        $this->assertEquals(true, $obj->getOp_PriseRDV());
    }

    /**
     * Tests the setOp_Relance() method.
     *
     * @return void
     */
    public function testSetOp_Relance() {

        $obj = new ActionsCo();

        $obj->setOp_Relance(true);
        $this->assertEquals(true, $obj->getOp_Relance());
    }

    /**
     * Tests the setOp_ReponseInscrip() method.
     *
     * @return void
     */
    public function testSetOp_ReponseInscrip() {

        $obj = new ActionsCo();

        $obj->setOp_ReponseInscrip(true);
        $this->assertEquals(true, $obj->getOp_ReponseInscrip());
    }

    /**
     * Tests the setOp_ReponseNegative() method.
     *
     * @return void
     */
    public function testSetOp_ReponseNegative() {

        $obj = new ActionsCo();

        $obj->setOp_ReponseNegative(true);
        $this->assertEquals(true, $obj->getOp_ReponseNegative());
    }

    /**
     * Tests the setOp_Reservation() method.
     *
     * @return void
     */
    public function testSetOp_Reservation() {

        $obj = new ActionsCo();

        $obj->setOp_Reservation(true);
        $this->assertEquals(true, $obj->getOp_Reservation());
    }
}
