<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\CommentairesPaie;

/**
 * Commentaires paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class CommentairesPaieTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new CommentairesPaie();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new CommentairesPaie();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new CommentairesPaie();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new CommentairesPaie();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDateComm() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateComm() {

        // Set a Date/time mock.
        $dateComm = new DateTime("2018-09-10");

        $obj = new CommentairesPaie();

        $obj->setDateComm($dateComm);
        $this->assertSame($dateComm, $obj->getDateComm());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new CommentairesPaie();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new CommentairesPaie();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setIdComm() method.
     *
     * @return void
     */
    public function testSetIdComm() {

        $obj = new CommentairesPaie();

        $obj->setIdComm(10);
        $this->assertEquals(10, $obj->getIdComm());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new CommentairesPaie();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setTypeComm() method.
     *
     * @return void
     */
    public function testSetTypeComm() {

        $obj = new CommentairesPaie();

        $obj->setTypeComm("typeComm");
        $this->assertEquals("typeComm", $obj->getTypeComm());
    }

    /**
     * Tests the setUniqIdSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIdSynchro() {

        $obj = new CommentairesPaie();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new CommentairesPaie();

        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateComm());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getIdComm());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTypeComm());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
