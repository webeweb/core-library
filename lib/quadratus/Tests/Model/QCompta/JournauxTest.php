<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\Journaux;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Journaux test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class JournauxTest extends AbstractTestCase {

    /**
     * Test setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Journaux();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Test setCentraliseGdLivre()
     *
     * @return void
     */
    public function testSetCentraliseGdLivre(): void {

        $obj = new Journaux();

        $obj->setCentraliseGdLivre(true);
        $this->assertTrue($obj->getCentraliseGdLivre());
    }

    /**
     * Test setCleAcces()
     *
     * @return void
     */
    public function testSetCleAcces(): void {

        $obj = new Journaux();

        $obj->setCleAcces("cleAcces");
        $this->assertEquals("cleAcces", $obj->getCleAcces());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Journaux();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new Journaux();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Test setCodeEntree()
     *
     * @return void
     */
    public function testSetCodeEntree(): void {

        $obj = new Journaux();

        $obj->setCodeEntree("codeEntree");
        $this->assertEquals("codeEntree", $obj->getCodeEntree());
    }

    /**
     * Test setCompteContrepartie()
     *
     * @return void
     */
    public function testSetCompteContrepartie(): void {

        $obj = new Journaux();

        $obj->setCompteContrepartie("compteContrepartie");
        $this->assertEquals("compteContrepartie", $obj->getCompteContrepartie());
    }

    /**
     * Test setCompteContrepartieAamm()
     *
     * @return void
     */
    public function testSetCompteContrepartieAamm(): void {

        $obj = new Journaux();

        $obj->setCompteContrepartieAamm("compteContrepartieAamm");
        $this->assertEquals("compteContrepartieAamm", $obj->getCompteContrepartieAamm());
    }

    /**
     * Test setContrepartie()
     *
     * @return void
     */
    public function testSetContrepartie(): void {

        $obj = new Journaux();

        $obj->setContrepartie(true);
        $this->assertTrue($obj->getContrepartie());
    }

    /**
     * Test setDomBanque()
     *
     * @return void
     */
    public function testSetDomBanque(): void {

        $obj = new Journaux();

        $obj->setDomBanque("domBanque");
        $this->assertEquals("domBanque", $obj->getDomBanque());
    }

    /**
     * Test setEquilibreAuto()
     *
     * @return void
     */
    public function testSetEquilibreAuto(): void {

        $obj = new Journaux();

        $obj->setEquilibreAuto("equilibreAuto");
        $this->assertEquals("equilibreAuto", $obj->getEquilibreAuto());
    }

    /**
     * Test setEtebacSkipTva()
     *
     * @return void
     */
    public function testSetEtebacSkipTva(): void {

        $obj = new Journaux();

        $obj->setEtebacSkipTva(true);
        $this->assertTrue($obj->getEtebacSkipTva());
    }

    /**
     * Test setEtebacXFerDetaillerBq()
     *
     * @return void
     */
    public function testSetEtebacXFerDetaillerBq(): void {

        $obj = new Journaux();

        $obj->setEtebacXFerDetaillerBq(true);
        $this->assertTrue($obj->getEtebacXFerDetaillerBq());
    }

    /**
     * Test setEtebacXFerDoPrefixCodeOp()
     *
     * @return void
     */
    public function testSetEtebacXFerDoPrefixCodeOp(): void {

        $obj = new Journaux();

        $obj->setEtebacXFerDoPrefixCodeOp(true);
        $this->assertTrue($obj->getEtebacXFerDoPrefixCodeOp());
    }

    /**
     * Test setEtebacXFerIndLibelle()
     *
     * @return void
     */
    public function testSetEtebacXFerIndLibelle(): void {

        $obj = new Journaux();

        $obj->setEtebacXFerIndLibelle("etebacXFerIndLibelle");
        $this->assertEquals("etebacXFerIndLibelle", $obj->getEtebacXFerIndLibelle());
    }

    /**
     * Test setEtebacXFerLignesComp()
     *
     * @return void
     */
    public function testSetEtebacXFerLignesComp(): void {

        $obj = new Journaux();

        $obj->setEtebacXFerLignesComp(true);
        $this->assertTrue($obj->getEtebacXFerLignesComp());
    }

    /**
     * Test setFamille()
     *
     * @return void
     */
    public function testSetFamille(): void {

        $obj = new Journaux();

        $obj->setFamille("famille");
        $this->assertEquals("famille", $obj->getFamille());
    }

    /**
     * Test setGestNumPieceJrn()
     *
     * @return void
     */
    public function testSetGestNumPieceJrn(): void {

        $obj = new Journaux();

        $obj->setGestNumPieceJrn(true);
        $this->assertTrue($obj->getGestNumPieceJrn());
    }

    /**
     * Test setGestionFolio()
     *
     * @return void
     */
    public function testSetGestionFolio(): void {

        $obj = new Journaux();

        $obj->setGestionFolio(true);
        $this->assertTrue($obj->getGestionFolio());
    }

    /**
     * Test setGestionNumPiece()
     *
     * @return void
     */
    public function testSetGestionNumPiece(): void {

        $obj = new Journaux();

        $obj->setGestionNumPiece("gestionNumPiece");
        $this->assertEquals("gestionNumPiece", $obj->getGestionNumPiece());
    }

    /**
     * Test setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Journaux();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Test setIbanIdClient()
     *
     * @return void
     */
    public function testSetIbanIdClient(): void {

        $obj = new Journaux();

        $obj->setIbanIdClient("ibanIdClient");
        $this->assertEquals("ibanIdClient", $obj->getIbanIdClient());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Journaux();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setMontantNegatif()
     *
     * @return void
     */
    public function testSetMontantNegatif(): void {

        $obj = new Journaux();

        $obj->setMontantNegatif(true);
        $this->assertTrue($obj->getMontantNegatif());
    }

    /**
     * Test setNiveauDroit()
     *
     * @return void
     */
    public function testSetNiveauDroit(): void {

        $obj = new Journaux();

        $obj->setNiveauDroit("niveauDroit");
        $this->assertEquals("niveauDroit", $obj->getNiveauDroit());
    }

    /**
     * Test setNumEmetteur()
     *
     * @return void
     */
    public function testSetNumEmetteur(): void {

        $obj = new Journaux();

        $obj->setNumEmetteur("numEmetteur");
        $this->assertEquals("numEmetteur", $obj->getNumEmetteur());
    }

    /**
     * Test setProchainNumPiece()
     *
     * @return void
     */
    public function testSetProchainNumPiece(): void {

        $obj = new Journaux();

        $obj->setProchainNumPiece(10);
        $this->assertEquals(10, $obj->getProchainNumPiece());
    }

    /**
     * Test setPropoLibelle()
     *
     * @return void
     */
    public function testSetPropoLibelle(): void {

        $obj = new Journaux();

        $obj->setPropoLibelle("propoLibelle");
        $this->assertEquals("propoLibelle", $obj->getPropoLibelle());
    }

    /**
     * Test setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Journaux();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Test setSaisieBordereau()
     *
     * @return void
     */
    public function testSetSaisieBordereau(): void {

        $obj = new Journaux();

        $obj->setSaisieBordereau(true);
        $this->assertTrue($obj->getSaisieBordereau());
    }

    /**
     * Test setTypeJournal()
     *
     * @return void
     */
    public function testSetTypeJournal(): void {

        $obj = new Journaux();

        $obj->setTypeJournal("typeJournal");
        $this->assertEquals("typeJournal", $obj->getTypeJournal());
    }

    /**
     * Test setTypePieceGlobal()
     *
     * @return void
     */
    public function testSetTypePieceGlobal(): void {

        $obj = new Journaux();

        $obj->setTypePieceGlobal(true);
        $this->assertTrue($obj->getTypePieceGlobal());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Journaux();

        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getCentraliseGdLivre());
        $this->assertNull($obj->getCleAcces());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEntree());
        $this->assertNull($obj->getCompteContrepartie());
        $this->assertNull($obj->getCompteContrepartieAamm());
        $this->assertNull($obj->getContrepartie());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getEquilibreAuto());
        $this->assertNull($obj->getEtebacSkipTva());
        $this->assertNull($obj->getEtebacXFerDetaillerBq());
        $this->assertNull($obj->getEtebacXFerDoPrefixCodeOp());
        $this->assertNull($obj->getEtebacXFerIndLibelle());
        $this->assertNull($obj->getEtebacXFerLignesComp());
        $this->assertNull($obj->getFamille());
        $this->assertNull($obj->getGestNumPieceJrn());
        $this->assertNull($obj->getGestionFolio());
        $this->assertNull($obj->getGestionNumPiece());
        $this->assertNull($obj->getIban());
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
}
