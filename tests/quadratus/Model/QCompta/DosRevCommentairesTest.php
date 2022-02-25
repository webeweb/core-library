<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\DosRevCommentaires;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dos rev commentaires test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DosRevCommentairesTest extends AbstractTestCase {

    /**
     * Tests setBloquant()
     *
     * @return void
     */
    public function testSetBloquant(): void {

        $obj = new DosRevCommentaires();

        $obj->setBloquant(true);
        $this->assertEquals(true, $obj->getBloquant());
    }

    /**
     * Tests setCodeCollModifQuestion()
     *
     * @return void
     */
    public function testSetCodeCollModifQuestion(): void {

        $obj = new DosRevCommentaires();

        $obj->setCodeCollModifQuestion("codeCollModifQuestion");
        $this->assertEquals("codeCollModifQuestion", $obj->getCodeCollModifQuestion());
    }

    /**
     * Tests setCodeCollModifReponse()
     *
     * @return void
     */
    public function testSetCodeCollModifReponse(): void {

        $obj = new DosRevCommentaires();

        $obj->setCodeCollModifReponse("codeCollModifReponse");
        $this->assertEquals("codeCollModifReponse", $obj->getCodeCollModifReponse());
    }

    /**
     * Tests setCodeCollQuestion()
     *
     * @return void
     */
    public function testSetCodeCollQuestion(): void {

        $obj = new DosRevCommentaires();

        $obj->setCodeCollQuestion("codeCollQuestion");
        $this->assertEquals("codeCollQuestion", $obj->getCodeCollQuestion());
    }

    /**
     * Tests setCodeCollReponse()
     *
     * @return void
     */
    public function testSetCodeCollReponse(): void {

        $obj = new DosRevCommentaires();

        $obj->setCodeCollReponse("codeCollReponse");
        $this->assertEquals("codeCollReponse", $obj->getCodeCollReponse());
    }

    /**
     * Tests setCptComment()
     *
     * @return void
     */
    public function testSetCptComment(): void {

        $obj = new DosRevCommentaires();

        $obj->setCptComment(10);
        $this->assertEquals(10, $obj->getCptComment());
    }

    /**
     * Tests setDtCreationQuestion()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtCreationQuestion(): void {

        // Set a Date/time mock.
        $dtCreationQuestion = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setDtCreationQuestion($dtCreationQuestion);
        $this->assertSame($dtCreationQuestion, $obj->getDtCreationQuestion());
    }

    /**
     * Tests setDtCreationReponse()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtCreationReponse(): void {

        // Set a Date/time mock.
        $dtCreationReponse = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setDtCreationReponse($dtCreationReponse);
        $this->assertSame($dtCreationReponse, $obj->getDtCreationReponse());
    }

    /**
     * Tests setDtModifQuestion()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtModifQuestion(): void {

        // Set a Date/time mock.
        $dtModifQuestion = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setDtModifQuestion($dtModifQuestion);
        $this->assertSame($dtModifQuestion, $obj->getDtModifQuestion());
    }

    /**
     * Tests setDtModifReponse()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtModifReponse(): void {

        // Set a Date/time mock.
        $dtModifReponse = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setDtModifReponse($dtModifReponse);
        $this->assertSame($dtModifReponse, $obj->getDtModifReponse());
    }

    /**
     * Tests setDtTransfertDa()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtTransfertDa(): void {

        // Set a Date/time mock.
        $dtTransfertDa = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setDtTransfertDa($dtTransfertDa);
        $this->assertSame($dtTransfertDa, $obj->getDtTransfertDa());
    }

    /**
     * Tests setEnAttenteReponse()
     *
     * @return void
     */
    public function testSetEnAttenteReponse(): void {

        $obj = new DosRevCommentaires();

        $obj->setEnAttenteReponse(true);
        $this->assertEquals(true, $obj->getEnAttenteReponse());
    }

    /**
     * Tests setNeedAnswer()
     *
     * @return void
     */
    public function testSetNeedAnswer(): void {

        $obj = new DosRevCommentaires();

        $obj->setNeedAnswer(true);
        $this->assertEquals(true, $obj->getNeedAnswer());
    }

    /**
     * Tests setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new DosRevCommentaires();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests setPeriodeRev()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeRev(): void {

        // Set a Date/time mock.
        $periodeRev = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setPeriodeRev($periodeRev);
        $this->assertSame($periodeRev, $obj->getPeriodeRev());
    }

    /**
     * Tests setPermanent()
     *
     * @return void
     */
    public function testSetPermanent(): void {

        $obj = new DosRevCommentaires();

        $obj->setPermanent(true);
        $this->assertEquals(true, $obj->getPermanent());
    }

    /**
     * Tests setTxtQuestion()
     *
     * @return void
     */
    public function testSetTxtQuestion(): void {

        $obj = new DosRevCommentaires();

        $obj->setTxtQuestion("txtQuestion");
        $this->assertEquals("txtQuestion", $obj->getTxtQuestion());
    }

    /**
     * Tests setTxtReponse()
     *
     * @return void
     */
    public function testSetTxtReponse(): void {

        $obj = new DosRevCommentaires();

        $obj->setTxtReponse("txtReponse");
        $this->assertEquals("txtReponse", $obj->getTxtReponse());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new DosRevCommentaires();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DosRevCommentaires();

        $this->assertNull($obj->getBloquant());
        $this->assertNull($obj->getCodeCollModifQuestion());
        $this->assertNull($obj->getCodeCollModifReponse());
        $this->assertNull($obj->getCodeCollQuestion());
        $this->assertNull($obj->getCodeCollReponse());
        $this->assertNull($obj->getCptComment());
        $this->assertNull($obj->getDtCreationQuestion());
        $this->assertNull($obj->getDtCreationReponse());
        $this->assertNull($obj->getDtModifQuestion());
        $this->assertNull($obj->getDtModifReponse());
        $this->assertNull($obj->getDtTransfertDa());
        $this->assertNull($obj->getEnAttenteReponse());
        $this->assertNull($obj->getNeedAnswer());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getPeriodeRev());
        $this->assertNull($obj->getPermanent());
        $this->assertNull($obj->getTxtQuestion());
        $this->assertNull($obj->getTxtReponse());
        $this->assertNull($obj->getType());
    }
}
