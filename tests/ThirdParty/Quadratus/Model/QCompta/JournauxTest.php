<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Journaux;

/**
 * Journaux model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class JournauxTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Journaux();

        $this->assertNull($obj->getBIC());
        $this->assertNull($obj->getCentraliseGdLivre());
        $this->assertNull($obj->getCleAcces());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEntree());
        $this->assertNull($obj->getCompteContrepartie());
        $this->assertNull($obj->getCompteContrepartieAAMM());
        $this->assertNull($obj->getContrepartie());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getEquilibreAuto());
        $this->assertNull($obj->getEtebacSkipTva());
        $this->assertNull($obj->getEtebacXFerDetaillerBQ());
        $this->assertNull($obj->getEtebacXFerDoPrefixCodeOp());
        $this->assertNull($obj->getEtebacXFerIndLibelle());
        $this->assertNull($obj->getEtebacXFerLignesComp());
        $this->assertNull($obj->getFamille());
        $this->assertNull($obj->getGestNumPieceJrn());
        $this->assertNull($obj->getGestionFolio());
        $this->assertNull($obj->getGestionNumPiece());
        $this->assertNull($obj->getIBAN());
        $this->assertNull($obj->getIbanIdClient());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantNegatif());
        $this->assertNull($obj->getNiveauDroit());
        $this->assertNull($obj->getNumEmetteur());
        $this->assertNull($obj->getProchainNumPiece());
        $this->assertNull($obj->getPropoLibelle());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getSaisieBordereau());
        $this->assertNull($obj->getTypeJournal());
        $this->assertNull($obj->getTypePieceGlobal());
    }

    /**
     * Tests the setBIC() method.
     *
     * @return void
     */
    public function testSetBIC() {

        $obj = new Journaux();

        $obj->setBIC("bIC");
        $this->assertEquals("bIC", $obj->getBIC());
    }

    /**
     * Tests the setCentraliseGdLivre() method.
     *
     * @return void
     */
    public function testSetCentraliseGdLivre() {

        $obj = new Journaux();

        $obj->setCentraliseGdLivre(true);
        $this->assertEquals(true, $obj->getCentraliseGdLivre());
    }

    /**
     * Tests the setCleAcces() method.
     *
     * @return void
     */
    public function testSetCleAcces() {

        $obj = new Journaux();

        $obj->setCleAcces("cleAcces");
        $this->assertEquals("cleAcces", $obj->getCleAcces());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Journaux();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new Journaux();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeEntree() method.
     *
     * @return void
     */
    public function testSetCodeEntree() {

        $obj = new Journaux();

        $obj->setCodeEntree("codeEntree");
        $this->assertEquals("codeEntree", $obj->getCodeEntree());
    }

    /**
     * Tests the setCompteContrepartie() method.
     *
     * @return void
     */
    public function testSetCompteContrepartie() {

        $obj = new Journaux();

        $obj->setCompteContrepartie("compteContrepartie");
        $this->assertEquals("compteContrepartie", $obj->getCompteContrepartie());
    }

    /**
     * Tests the setCompteContrepartieAAMM() method.
     *
     * @return void
     */
    public function testSetCompteContrepartieAAMM() {

        $obj = new Journaux();

        $obj->setCompteContrepartieAAMM("compteContrepartieAAMM");
        $this->assertEquals("compteContrepartieAAMM", $obj->getCompteContrepartieAAMM());
    }

    /**
     * Tests the setContrepartie() method.
     *
     * @return void
     */
    public function testSetContrepartie() {

        $obj = new Journaux();

        $obj->setContrepartie(true);
        $this->assertEquals(true, $obj->getContrepartie());
    }

    /**
     * Tests the setDomBanque() method.
     *
     * @return void
     */
    public function testSetDomBanque() {

        $obj = new Journaux();

        $obj->setDomBanque("domBanque");
        $this->assertEquals("domBanque", $obj->getDomBanque());
    }

    /**
     * Tests the setEquilibreAuto() method.
     *
     * @return void
     */
    public function testSetEquilibreAuto() {

        $obj = new Journaux();

        $obj->setEquilibreAuto("equilibreAuto");
        $this->assertEquals("equilibreAuto", $obj->getEquilibreAuto());
    }

    /**
     * Tests the setEtebacSkipTva() method.
     *
     * @return void
     */
    public function testSetEtebacSkipTva() {

        $obj = new Journaux();

        $obj->setEtebacSkipTva(true);
        $this->assertEquals(true, $obj->getEtebacSkipTva());
    }

    /**
     * Tests the setEtebacXFerDetaillerBQ() method.
     *
     * @return void
     */
    public function testSetEtebacXFerDetaillerBQ() {

        $obj = new Journaux();

        $obj->setEtebacXFerDetaillerBQ(true);
        $this->assertEquals(true, $obj->getEtebacXFerDetaillerBQ());
    }

    /**
     * Tests the setEtebacXFerDoPrefixCodeOp() method.
     *
     * @return void
     */
    public function testSetEtebacXFerDoPrefixCodeOp() {

        $obj = new Journaux();

        $obj->setEtebacXFerDoPrefixCodeOp(true);
        $this->assertEquals(true, $obj->getEtebacXFerDoPrefixCodeOp());
    }

    /**
     * Tests the setEtebacXFerIndLibelle() method.
     *
     * @return void
     */
    public function testSetEtebacXFerIndLibelle() {

        $obj = new Journaux();

        $obj->setEtebacXFerIndLibelle("etebacXFerIndLibelle");
        $this->assertEquals("etebacXFerIndLibelle", $obj->getEtebacXFerIndLibelle());
    }

    /**
     * Tests the setEtebacXFerLignesComp() method.
     *
     * @return void
     */
    public function testSetEtebacXFerLignesComp() {

        $obj = new Journaux();

        $obj->setEtebacXFerLignesComp(true);
        $this->assertEquals(true, $obj->getEtebacXFerLignesComp());
    }

    /**
     * Tests the setFamille() method.
     *
     * @return void
     */
    public function testSetFamille() {

        $obj = new Journaux();

        $obj->setFamille("famille");
        $this->assertEquals("famille", $obj->getFamille());
    }

    /**
     * Tests the setGestNumPieceJrn() method.
     *
     * @return void
     */
    public function testSetGestNumPieceJrn() {

        $obj = new Journaux();

        $obj->setGestNumPieceJrn(true);
        $this->assertEquals(true, $obj->getGestNumPieceJrn());
    }

    /**
     * Tests the setGestionFolio() method.
     *
     * @return void
     */
    public function testSetGestionFolio() {

        $obj = new Journaux();

        $obj->setGestionFolio(true);
        $this->assertEquals(true, $obj->getGestionFolio());
    }

    /**
     * Tests the setGestionNumPiece() method.
     *
     * @return void
     */
    public function testSetGestionNumPiece() {

        $obj = new Journaux();

        $obj->setGestionNumPiece("gestionNumPiece");
        $this->assertEquals("gestionNumPiece", $obj->getGestionNumPiece());
    }

    /**
     * Tests the setIBAN() method.
     *
     * @return void
     */
    public function testSetIBAN() {

        $obj = new Journaux();

        $obj->setIBAN("iBAN");
        $this->assertEquals("iBAN", $obj->getIBAN());
    }

    /**
     * Tests the setIbanIdClient() method.
     *
     * @return void
     */
    public function testSetIbanIdClient() {

        $obj = new Journaux();

        $obj->setIbanIdClient("ibanIdClient");
        $this->assertEquals("ibanIdClient", $obj->getIbanIdClient());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Journaux();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontantNegatif() method.
     *
     * @return void
     */
    public function testSetMontantNegatif() {

        $obj = new Journaux();

        $obj->setMontantNegatif(true);
        $this->assertEquals(true, $obj->getMontantNegatif());
    }

    /**
     * Tests the setNiveauDroit() method.
     *
     * @return void
     */
    public function testSetNiveauDroit() {

        $obj = new Journaux();

        $obj->setNiveauDroit("niveauDroit");
        $this->assertEquals("niveauDroit", $obj->getNiveauDroit());
    }

    /**
     * Tests the setNumEmetteur() method.
     *
     * @return void
     */
    public function testSetNumEmetteur() {

        $obj = new Journaux();

        $obj->setNumEmetteur("numEmetteur");
        $this->assertEquals("numEmetteur", $obj->getNumEmetteur());
    }

    /**
     * Tests the setProchainNumPiece() method.
     *
     * @return void
     */
    public function testSetProchainNumPiece() {

        $obj = new Journaux();

        $obj->setProchainNumPiece(10);
        $this->assertEquals(10, $obj->getProchainNumPiece());
    }

    /**
     * Tests the setPropoLibelle() method.
     *
     * @return void
     */
    public function testSetPropoLibelle() {

        $obj = new Journaux();

        $obj->setPropoLibelle("propoLibelle");
        $this->assertEquals("propoLibelle", $obj->getPropoLibelle());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib() {

        $obj = new Journaux();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setSaisieBordereau() method.
     *
     * @return void
     */
    public function testSetSaisieBordereau() {

        $obj = new Journaux();

        $obj->setSaisieBordereau(true);
        $this->assertEquals(true, $obj->getSaisieBordereau());
    }

    /**
     * Tests the setTypeJournal() method.
     *
     * @return void
     */
    public function testSetTypeJournal() {

        $obj = new Journaux();

        $obj->setTypeJournal("typeJournal");
        $this->assertEquals("typeJournal", $obj->getTypeJournal());
    }

    /**
     * Tests the setTypePieceGlobal() method.
     *
     * @return void
     */
    public function testSetTypePieceGlobal() {

        $obj = new Journaux();

        $obj->setTypePieceGlobal(true);
        $this->assertEquals(true, $obj->getTypePieceGlobal());
    }
}
