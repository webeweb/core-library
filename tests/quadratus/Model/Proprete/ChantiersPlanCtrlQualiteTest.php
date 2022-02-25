<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\ChantiersPlanCtrlQualite;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chantiers plan ctrl qualite test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChantiersPlanCtrlQualiteTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests setDatePrevue()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePrevue(): void {

        // Set a Date/time mock.
        $datePrevue = new DateTime("2018-09-10");

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setDatePrevue($datePrevue);
        $this->assertSame($datePrevue, $obj->getDatePrevue());
    }

    /**
     * Tests setDateReelle()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReelle(): void {

        // Set a Date/time mock.
        $dateReelle = new DateTime("2018-09-10");

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setDateReelle($dateReelle);
        $this->assertSame($dateReelle, $obj->getDateReelle());
    }

    /**
     * Tests setDateValidationSynchro()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro(): void {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setNoteGlobale()
     *
     * @return void
     */
    public function testSetNoteGlobale(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setNoteGlobale(10.092018);
        $this->assertEquals(10.092018, $obj->getNoteGlobale());
    }

    /**
     * Tests setNumeroReclam()
     *
     * @return void
     */
    public function testSetNumeroReclam(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setNumeroReclam(10);
        $this->assertEquals(10, $obj->getNumeroReclam());
    }

    /**
     * Tests setRealiseParFcq()
     *
     * @return void
     */
    public function testSetRealiseParFcq(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setRealiseParFcq(true);
        $this->assertEquals(true, $obj->getRealiseParFcq());
    }

    /**
     * Tests setTypeControle()
     *
     * @return void
     */
    public function testSetTypeControle(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setTypeControle("typeControle");
        $this->assertEquals("typeControle", $obj->getTypeControle());
    }

    /**
     * Tests setUniqIdNoeud()
     *
     * @return void
     */
    public function testSetUniqIdNoeud(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setUniqIdNoeud("uniqIdNoeud");
        $this->assertEquals("uniqIdNoeud", $obj->getUniqIdNoeud());
    }

    /**
     * Tests setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
