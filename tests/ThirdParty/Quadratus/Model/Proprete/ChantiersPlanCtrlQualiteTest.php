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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ChantiersPlanCtrlQualite;

/**
 * Chantiers plan ctrl qualite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersPlanCtrlQualiteTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDatePrevue() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePrevue() {

        // Set a Date/time mock.
        $datePrevue = new DateTime("2018-09-10");

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setDatePrevue($datePrevue);
        $this->assertSame($datePrevue, $obj->getDatePrevue());
    }

    /**
     * Tests the setDateReelle() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReelle() {

        // Set a Date/time mock.
        $dateReelle = new DateTime("2018-09-10");

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setDateReelle($dateReelle);
        $this->assertSame($dateReelle, $obj->getDateReelle());
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

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setNoteGlobale() method.
     *
     * @return void
     */
    public function testSetNoteGlobale() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setNoteGlobale(10.092018);
        $this->assertEquals(10.092018, $obj->getNoteGlobale());
    }

    /**
     * Tests the setNumeroReclam() method.
     *
     * @return void
     */
    public function testSetNumeroReclam() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setNumeroReclam(10);
        $this->assertEquals(10, $obj->getNumeroReclam());
    }

    /**
     * Tests the setRealiseParFcq() method.
     *
     * @return void
     */
    public function testSetRealiseParFcq() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setRealiseParFcq(true);
        $this->assertEquals(true, $obj->getRealiseParFcq());
    }

    /**
     * Tests the setTypeControle() method.
     *
     * @return void
     */
    public function testSetTypeControle() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setTypeControle("typeControle");
        $this->assertEquals("typeControle", $obj->getTypeControle());
    }

    /**
     * Tests the setUniqIdNoeud() method.
     *
     * @return void
     */
    public function testSetUniqIdNoeud() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setUniqIdNoeud("uniqIdNoeud");
        $this->assertEquals("uniqIdNoeud", $obj->getUniqIdNoeud());
    }

    /**
     * Tests the setUniqIdSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIdSynchro() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ChantiersPlanCtrlQualite();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDatePrevue());
        $this->assertNull($obj->getDateReelle());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getNoteGlobale());
        $this->assertNull($obj->getNumeroReclam());
        $this->assertNull($obj->getRealiseParFcq());
        $this->assertNull($obj->getTypeControle());
        $this->assertNull($obj->getUniqIdSynchro());
        $this->assertNull($obj->getUniqIdNoeud());
    }
}
