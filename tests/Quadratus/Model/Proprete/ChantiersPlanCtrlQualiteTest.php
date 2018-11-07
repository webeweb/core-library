<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\ChantiersPlanCtrlQualite;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Chantiers plan ctrl qualite model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class ChantiersPlanCtrlQualiteTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getRealiseParFCQ());
        $this->assertNull($obj->getTypeControle());
        $this->assertNull($obj->getUniqIDSynchro());
        $this->assertNull($obj->getUniqIdNoeud());
    }

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
     */
    public function testSetDatePrevue() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setDatePrevue(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePrevue());
    }

    /**
     * Tests the setDateReelle() method.
     *
     * @return void
     */
    public function testSetDateReelle() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setDateReelle(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateReelle());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     */
    public function testSetDateValidationSynchro() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setDateValidationSynchro(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
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
     * Tests the setRealiseParFCQ() method.
     *
     * @return void
     */
    public function testSetRealiseParFCQ() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setRealiseParFCQ(true);
        $this->assertEquals(true, $obj->getRealiseParFCQ());
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
     * Tests the setUniqIDSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIDSynchro() {

        $obj = new ChantiersPlanCtrlQualite();

        $obj->setUniqIDSynchro("uniqIDSynchro");
        $this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
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

}
