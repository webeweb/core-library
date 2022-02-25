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
use WBW\Library\Quadratus\Model\Proprete\FichesControlesEntetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fiches controles entetes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class FichesControlesEntetesTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new FichesControlesEntetes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new FichesControlesEntetes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new FichesControlesEntetes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new FichesControlesEntetes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new FichesControlesEntetes();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests setControleur()
     *
     * @return void
     */
    public function testSetControleur(): void {

        $obj = new FichesControlesEntetes();

        $obj->setControleur("controleur");
        $this->assertEquals("controleur", $obj->getControleur());
    }

    /**
     * Tests setDateControle()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateControle(): void {

        // Set a Date/time mock.
        $dateControle = new DateTime("2018-09-10");

        $obj = new FichesControlesEntetes();

        $obj->setDateControle($dateControle);
        $this->assertSame($dateControle, $obj->getDateControle());
    }

    /**
     * Tests setDateCtrlPrevue()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCtrlPrevue(): void {

        // Set a Date/time mock.
        $dateCtrlPrevue = new DateTime("2018-09-10");

        $obj = new FichesControlesEntetes();

        $obj->setDateCtrlPrevue($dateCtrlPrevue);
        $this->assertSame($dateCtrlPrevue, $obj->getDateCtrlPrevue());
    }

    /**
     * Tests setDateTransfert()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfert(): void {

        // Set a Date/time mock.
        $dateTransfert = new DateTime("2018-09-10");

        $obj = new FichesControlesEntetes();

        $obj->setDateTransfert($dateTransfert);
        $this->assertSame($dateTransfert, $obj->getDateTransfert());
    }

    /**
     * Tests setFicheContradictoire()
     *
     * @return void
     */
    public function testSetFicheContradictoire(): void {

        $obj = new FichesControlesEntetes();

        $obj->setFicheContradictoire(true);
        $this->assertEquals(true, $obj->getFicheContradictoire());
    }

    /**
     * Tests setFicheSignee()
     *
     * @return void
     */
    public function testSetFicheSignee(): void {

        $obj = new FichesControlesEntetes();

        $obj->setFicheSignee(true);
        $this->assertEquals(true, $obj->getFicheSignee());
    }

    /**
     * Tests setHeureDebut()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDebut(): void {

        // Set a Date/time mock.
        $heureDebut = new DateTime("2018-09-10");

        $obj = new FichesControlesEntetes();

        $obj->setHeureDebut($heureDebut);
        $this->assertSame($heureDebut, $obj->getHeureDebut());
    }

    /**
     * Tests setHeureFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureFin(): void {

        // Set a Date/time mock.
        $heureFin = new DateTime("2018-09-10");

        $obj = new FichesControlesEntetes();

        $obj->setHeureFin($heureFin);
        $this->assertSame($heureFin, $obj->getHeureFin());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new FichesControlesEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new FichesControlesEntetes();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setLocal()
     *
     * @return void
     */
    public function testSetLocal(): void {

        $obj = new FichesControlesEntetes();

        $obj->setLocal("local");
        $this->assertEquals("local", $obj->getLocal());
    }

    /**
     * Tests setLocalPere()
     *
     * @return void
     */
    public function testSetLocalPere(): void {

        $obj = new FichesControlesEntetes();

        $obj->setLocalPere("localPere");
        $this->assertEquals("localPere", $obj->getLocalPere());
    }

    /**
     * Tests setNoteGlobale()
     *
     * @return void
     */
    public function testSetNoteGlobale(): void {

        $obj = new FichesControlesEntetes();

        $obj->setNoteGlobale(10.092018);
        $this->assertEquals(10.092018, $obj->getNoteGlobale());
    }

    /**
     * Tests setNoteObjectif()
     *
     * @return void
     */
    public function testSetNoteObjectif(): void {

        $obj = new FichesControlesEntetes();

        $obj->setNoteObjectif(10.092018);
        $this->assertEquals(10.092018, $obj->getNoteObjectif());
    }

    /**
     * Tests setNumeroFiche()
     *
     * @return void
     */
    public function testSetNumeroFiche(): void {

        $obj = new FichesControlesEntetes();

        $obj->setNumeroFiche(10);
        $this->assertEquals(10, $obj->getNumeroFiche());
    }

    /**
     * Tests setNumeroNoeudLocal()
     *
     * @return void
     */
    public function testSetNumeroNoeudLocal(): void {

        $obj = new FichesControlesEntetes();

        $obj->setNumeroNoeudLocal(10);
        $this->assertEquals(10, $obj->getNumeroNoeudLocal());
    }

    /**
     * Tests setSatisfactionGenerale()
     *
     * @return void
     */
    public function testSetSatisfactionGenerale(): void {

        $obj = new FichesControlesEntetes();

        $obj->setSatisfactionGenerale("satisfactionGenerale");
        $this->assertEquals("satisfactionGenerale", $obj->getSatisfactionGenerale());
    }

    /**
     * Tests setTypeControle()
     *
     * @return void
     */
    public function testSetTypeControle(): void {

        $obj = new FichesControlesEntetes();

        $obj->setTypeControle("typeControle");
        $this->assertEquals("typeControle", $obj->getTypeControle());
    }

    /**
     * Tests setUniqIdBlocage()
     *
     * @return void
     */
    public function testSetUniqIdBlocage(): void {

        $obj = new FichesControlesEntetes();

        $obj->setUniqIdBlocage("uniqIdBlocage");
        $this->assertEquals("uniqIdBlocage", $obj->getUniqIdBlocage());
    }

    /**
     * Tests setUniqIdNoeud()
     *
     * @return void
     */
    public function testSetUniqIdNoeud(): void {

        $obj = new FichesControlesEntetes();

        $obj->setUniqIdNoeud("uniqIdNoeud");
        $this->assertEquals("uniqIdNoeud", $obj->getUniqIdNoeud());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FichesControlesEntetes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getControleur());
        $this->assertNull($obj->getDateControle());
        $this->assertNull($obj->getDateCtrlPrevue());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getFicheContradictoire());
        $this->assertNull($obj->getFicheSignee());
        $this->assertNull($obj->getHeureDebut());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLocal());
        $this->assertNull($obj->getLocalPere());
        $this->assertNull($obj->getNoteGlobale());
        $this->assertNull($obj->getNoteObjectif());
        $this->assertNull($obj->getNumeroFiche());
        $this->assertNull($obj->getNumeroNoeudLocal());
        $this->assertNull($obj->getSatisfactionGenerale());
        $this->assertNull($obj->getTypeControle());
        $this->assertNull($obj->getUniqIdBlocage());
        $this->assertNull($obj->getUniqIdNoeud());
    }
}
