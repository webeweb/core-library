<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\Reglements;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Reglements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ReglementsTest extends AbstractTestCase {

    /**
     * Tests the setBic() method.
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Reglements();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Reglements();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeBanque() method.
     *
     * @return void
     */
    public function testSetCodeBanque(): void {

        $obj = new Reglements();

        $obj->setCodeBanque("codeBanque");
        $this->assertEquals("codeBanque", $obj->getCodeBanque());
    }

    /**
     * Tests the setCodeComptable() method.
     *
     * @return void
     */
    public function testSetCodeComptable(): void {

        $obj = new Reglements();

        $obj->setCodeComptable("codeComptable");
        $this->assertEquals("codeComptable", $obj->getCodeComptable());
    }

    /**
     * Tests the setCompteCaisse() method.
     *
     * @return void
     */
    public function testSetCompteCaisse(): void {

        $obj = new Reglements();

        $obj->setCompteCaisse("compteCaisse");
        $this->assertEquals("compteCaisse", $obj->getCompteCaisse());
    }

    /**
     * Tests the setCptPortefeuille() method.
     *
     * @return void
     */
    public function testSetCptPortefeuille(): void {

        $obj = new Reglements();

        $obj->setCptPortefeuille("cptPortefeuille");
        $this->assertEquals("cptPortefeuille", $obj->getCptPortefeuille());
    }

    /**
     * Tests the setDateEcheanceCpta() method.
     *
     * @return void
     */
    public function testSetDateEcheanceCpta(): void {

        $obj = new Reglements();

        $obj->setDateEcheanceCpta(true);
        $this->assertEquals(true, $obj->getDateEcheanceCpta());
    }

    /**
     * Tests the setDefinitionPaiement() method.
     *
     * @return void
     */
    public function testSetDefinitionPaiement(): void {

        $obj = new Reglements();

        $obj->setDefinitionPaiement(true);
        $this->assertEquals(true, $obj->getDefinitionPaiement());
    }

    /**
     * Tests the setDefinitionRemise() method.
     *
     * @return void
     */
    public function testSetDefinitionRemise(): void {

        $obj = new Reglements();

        $obj->setDefinitionRemise(true);
        $this->assertEquals(true, $obj->getDefinitionRemise());
    }

    /**
     * Tests the setDetailEcheanceCpta() method.
     *
     * @return void
     */
    public function testSetDetailEcheanceCpta(): void {

        $obj = new Reglements();

        $obj->setDetailEcheanceCpta(true);
        $this->assertEquals(true, $obj->getDetailEcheanceCpta());
    }

    /**
     * Tests the setDetailEffetCpta() method.
     *
     * @return void
     */
    public function testSetDetailEffetCpta(): void {

        $obj = new Reglements();

        $obj->setDetailEffetCpta(true);
        $this->assertEquals(true, $obj->getDetailEffetCpta());
    }

    /**
     * Tests the setDeviseCaisse() method.
     *
     * @return void
     */
    public function testSetDeviseCaisse(): void {

        $obj = new Reglements();

        $obj->setDeviseCaisse("deviseCaisse");
        $this->assertEquals("deviseCaisse", $obj->getDeviseCaisse());
    }

    /**
     * Tests the setDomiciliationBancaire1() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire1(): void {

        $obj = new Reglements();

        $obj->setDomiciliationBancaire1("domiciliationBancaire1");
        $this->assertEquals("domiciliationBancaire1", $obj->getDomiciliationBancaire1());
    }

    /**
     * Tests the setDomiciliationBancaire2() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire2(): void {

        $obj = new Reglements();

        $obj->setDomiciliationBancaire2("domiciliationBancaire2");
        $this->assertEquals("domiciliationBancaire2", $obj->getDomiciliationBancaire2());
    }

    /**
     * Tests the setDureeEcheances() method.
     *
     * @return void
     */
    public function testSetDureeEcheances(): void {

        $obj = new Reglements();

        $obj->setDureeEcheances("dureeEcheances");
        $this->assertEquals("dureeEcheances", $obj->getDureeEcheances());
    }

    /**
     * Tests the setEcheanceFinDecade() method.
     *
     * @return void
     */
    public function testSetEcheanceFinDecade(): void {

        $obj = new Reglements();

        $obj->setEcheanceFinDecade(true);
        $this->assertEquals(true, $obj->getEcheanceFinDecade());
    }

    /**
     * Tests the setEcheanceFinQuinzaine() method.
     *
     * @return void
     */
    public function testSetEcheanceFinQuinzaine(): void {

        $obj = new Reglements();

        $obj->setEcheanceFinQuinzaine(true);
        $this->assertEquals(true, $obj->getEcheanceFinQuinzaine());
    }

    /**
     * Tests the setEditDateEcheance() method.
     *
     * @return void
     */
    public function testSetEditDateEcheance(): void {

        $obj = new Reglements();

        $obj->setEditDateEcheance(true);
        $this->assertEquals(true, $obj->getEditDateEcheance());
    }

    /**
     * Tests the setEditerCheque() method.
     *
     * @return void
     */
    public function testSetEditerCheque(): void {

        $obj = new Reglements();

        $obj->setEditerCheque(true);
        $this->assertEquals(true, $obj->getEditerCheque());
    }

    /**
     * Tests the setEspecesCaisse() method.
     *
     * @return void
     */
    public function testSetEspecesCaisse(): void {

        $obj = new Reglements();

        $obj->setEspecesCaisse(true);
        $this->assertEquals(true, $obj->getEspecesCaisse());
    }

    /**
     * Tests the setGestionPaiements() method.
     *
     * @return void
     */
    public function testSetGestionPaiements(): void {

        $obj = new Reglements();

        $obj->setGestionPaiements(true);
        $this->assertEquals(true, $obj->getGestionPaiements());
    }

    /**
     * Tests the setIban() method.
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Reglements();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Reglements();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setIntitule2() method.
     *
     * @return void
     */
    public function testSetIntitule2(): void {

        $obj = new Reglements();

        $obj->setIntitule2("intitule2");
        $this->assertEquals("intitule2", $obj->getIntitule2());
    }

    /**
     * Tests the setIntitule3() method.
     *
     * @return void
     */
    public function testSetIntitule3(): void {

        $obj = new Reglements();

        $obj->setIntitule3("intitule3");
        $this->assertEquals("intitule3", $obj->getIntitule3());
    }

    /**
     * Tests the setLcr() method.
     *
     * @return void
     */
    public function testSetLcr(): void {

        $obj = new Reglements();

        $obj->setLcr(true);
        $this->assertEquals(true, $obj->getLcr());
    }

    /**
     * Tests the setLibEcrCaisse() method.
     *
     * @return void
     */
    public function testSetLibEcrCaisse(): void {

        $obj = new Reglements();

        $obj->setLibEcrCaisse("libEcrCaisse");
        $this->assertEquals("libEcrCaisse", $obj->getLibEcrCaisse());
    }

    /**
     * Tests the setNombreEcheances() method.
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new Reglements();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Tests the setPaiementDepartLe() method.
     *
     * @return void
     */
    public function testSetPaiementDepartLe(): void {

        $obj = new Reglements();

        $obj->setPaiementDepartLe("paiementDepartLe");
        $this->assertEquals("paiementDepartLe", $obj->getPaiementDepartLe());
    }

    /**
     * Tests the setPaiementLe() method.
     *
     * @return void
     */
    public function testSetPaiementLe(): void {

        $obj = new Reglements();

        $obj->setPaiementLe("paiementLe");
        $this->assertEquals("paiementLe", $obj->getPaiementLe());
    }

    /**
     * Tests the setPaiementNombreDeJours() method.
     *
     * @return void
     */
    public function testSetPaiementNombreDeJours(): void {

        $obj = new Reglements();

        $obj->setPaiementNombreDeJours(10);
        $this->assertEquals(10, $obj->getPaiementNombreDeJours());
    }

    /**
     * Tests the setPasDeTiroirCaisse() method.
     *
     * @return void
     */
    public function testSetPasDeTiroirCaisse(): void {

        $obj = new Reglements();

        $obj->setPasDeTiroirCaisse(true);
        $this->assertEquals(true, $obj->getPasDeTiroirCaisse());
    }

    /**
     * Tests the setPasEffetAvoir() method.
     *
     * @return void
     */
    public function testSetPasEffetAvoir(): void {

        $obj = new Reglements();

        $obj->setPasEffetAvoir(true);
        $this->assertEquals(true, $obj->getPasEffetAvoir());
    }

    /**
     * Tests the setRemisePied() method.
     *
     * @return void
     */
    public function testSetRemisePied(): void {

        $obj = new Reglements();

        $obj->setRemisePied(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Reglements();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setTraiteEditer() method.
     *
     * @return void
     */
    public function testSetTraiteEditer(): void {

        $obj = new Reglements();

        $obj->setTraiteEditer(true);
        $this->assertEquals(true, $obj->getTraiteEditer());
    }

    /**
     * Tests the setTypeAcceptation() method.
     *
     * @return void
     */
    public function testSetTypeAcceptation(): void {

        $obj = new Reglements();

        $obj->setTypeAcceptation("typeAcceptation");
        $this->assertEquals("typeAcceptation", $obj->getTypeAcceptation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Reglements();

        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeBanque());
        $this->assertNull($obj->getCodeComptable());
        $this->assertNull($obj->getCompteCaisse());
        $this->assertNull($obj->getCptPortefeuille());
        $this->assertNull($obj->getDateEcheanceCpta());
        $this->assertNull($obj->getDefinitionPaiement());
        $this->assertNull($obj->getDefinitionRemise());
        $this->assertNull($obj->getDetailEcheanceCpta());
        $this->assertNull($obj->getDetailEffetCpta());
        $this->assertNull($obj->getDeviseCaisse());
        $this->assertNull($obj->getDomiciliationBancaire1());
        $this->assertNull($obj->getDomiciliationBancaire2());
        $this->assertNull($obj->getDureeEcheances());
        $this->assertNull($obj->getEcheanceFinDecade());
        $this->assertNull($obj->getEcheanceFinQuinzaine());
        $this->assertNull($obj->getEditDateEcheance());
        $this->assertNull($obj->getEditerCheque());
        $this->assertNull($obj->getEspecesCaisse());
        $this->assertNull($obj->getGestionPaiements());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntitule2());
        $this->assertNull($obj->getIntitule3());
        $this->assertNull($obj->getLcr());
        $this->assertNull($obj->getLibEcrCaisse());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getPaiementDepartLe());
        $this->assertNull($obj->getPaiementLe());
        $this->assertNull($obj->getPaiementNombreDeJours());
        $this->assertNull($obj->getPasDeTiroirCaisse());
        $this->assertNull($obj->getPasEffetAvoir());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRemisePied());
        $this->assertNull($obj->getTraiteEditer());
        $this->assertNull($obj->getTypeAcceptation());
    }
}
