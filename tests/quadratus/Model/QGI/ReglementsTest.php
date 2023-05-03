<?php

/*
 * This file is part of the core-library package.
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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ReglementsTest extends AbstractTestCase {

    /**
     * Test setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Reglements();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Reglements();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setCodeBanque()
     *
     * @return void
     */
    public function testSetCodeBanque(): void {

        $obj = new Reglements();

        $obj->setCodeBanque("codeBanque");
        $this->assertEquals("codeBanque", $obj->getCodeBanque());
    }

    /**
     * Test setCodeComptable()
     *
     * @return void
     */
    public function testSetCodeComptable(): void {

        $obj = new Reglements();

        $obj->setCodeComptable("codeComptable");
        $this->assertEquals("codeComptable", $obj->getCodeComptable());
    }

    /**
     * Test setCompteCaisse()
     *
     * @return void
     */
    public function testSetCompteCaisse(): void {

        $obj = new Reglements();

        $obj->setCompteCaisse("compteCaisse");
        $this->assertEquals("compteCaisse", $obj->getCompteCaisse());
    }

    /**
     * Test setCptPortefeuille()
     *
     * @return void
     */
    public function testSetCptPortefeuille(): void {

        $obj = new Reglements();

        $obj->setCptPortefeuille("cptPortefeuille");
        $this->assertEquals("cptPortefeuille", $obj->getCptPortefeuille());
    }

    /**
     * Test setDateEcheanceCpta()
     *
     * @return void
     */
    public function testSetDateEcheanceCpta(): void {

        $obj = new Reglements();

        $obj->setDateEcheanceCpta(true);
        $this->assertTrue($obj->getDateEcheanceCpta());
    }

    /**
     * Test setDefinitionPaiement()
     *
     * @return void
     */
    public function testSetDefinitionPaiement(): void {

        $obj = new Reglements();

        $obj->setDefinitionPaiement(true);
        $this->assertTrue($obj->getDefinitionPaiement());
    }

    /**
     * Test setDefinitionRemise()
     *
     * @return void
     */
    public function testSetDefinitionRemise(): void {

        $obj = new Reglements();

        $obj->setDefinitionRemise(true);
        $this->assertTrue($obj->getDefinitionRemise());
    }

    /**
     * Test setDetailEcheanceCpta()
     *
     * @return void
     */
    public function testSetDetailEcheanceCpta(): void {

        $obj = new Reglements();

        $obj->setDetailEcheanceCpta(true);
        $this->assertTrue($obj->getDetailEcheanceCpta());
    }

    /**
     * Test setDetailEffetCpta()
     *
     * @return void
     */
    public function testSetDetailEffetCpta(): void {

        $obj = new Reglements();

        $obj->setDetailEffetCpta(true);
        $this->assertTrue($obj->getDetailEffetCpta());
    }

    /**
     * Test setDeviseCaisse()
     *
     * @return void
     */
    public function testSetDeviseCaisse(): void {

        $obj = new Reglements();

        $obj->setDeviseCaisse("deviseCaisse");
        $this->assertEquals("deviseCaisse", $obj->getDeviseCaisse());
    }

    /**
     * Test setDomiciliationBancaire1()
     *
     * @return void
     */
    public function testSetDomiciliationBancaire1(): void {

        $obj = new Reglements();

        $obj->setDomiciliationBancaire1("domiciliationBancaire1");
        $this->assertEquals("domiciliationBancaire1", $obj->getDomiciliationBancaire1());
    }

    /**
     * Test setDomiciliationBancaire2()
     *
     * @return void
     */
    public function testSetDomiciliationBancaire2(): void {

        $obj = new Reglements();

        $obj->setDomiciliationBancaire2("domiciliationBancaire2");
        $this->assertEquals("domiciliationBancaire2", $obj->getDomiciliationBancaire2());
    }

    /**
     * Test setDureeEcheances()
     *
     * @return void
     */
    public function testSetDureeEcheances(): void {

        $obj = new Reglements();

        $obj->setDureeEcheances("dureeEcheances");
        $this->assertEquals("dureeEcheances", $obj->getDureeEcheances());
    }

    /**
     * Test setEcheanceFinDecade()
     *
     * @return void
     */
    public function testSetEcheanceFinDecade(): void {

        $obj = new Reglements();

        $obj->setEcheanceFinDecade(true);
        $this->assertTrue($obj->getEcheanceFinDecade());
    }

    /**
     * Test setEcheanceFinQuinzaine()
     *
     * @return void
     */
    public function testSetEcheanceFinQuinzaine(): void {

        $obj = new Reglements();

        $obj->setEcheanceFinQuinzaine(true);
        $this->assertTrue($obj->getEcheanceFinQuinzaine());
    }

    /**
     * Test setEditDateEcheance()
     *
     * @return void
     */
    public function testSetEditDateEcheance(): void {

        $obj = new Reglements();

        $obj->setEditDateEcheance(true);
        $this->assertTrue($obj->getEditDateEcheance());
    }

    /**
     * Test setEditerCheque()
     *
     * @return void
     */
    public function testSetEditerCheque(): void {

        $obj = new Reglements();

        $obj->setEditerCheque(true);
        $this->assertTrue($obj->getEditerCheque());
    }

    /**
     * Test setEspecesCaisse()
     *
     * @return void
     */
    public function testSetEspecesCaisse(): void {

        $obj = new Reglements();

        $obj->setEspecesCaisse(true);
        $this->assertTrue($obj->getEspecesCaisse());
    }

    /**
     * Test setGestionPaiements()
     *
     * @return void
     */
    public function testSetGestionPaiements(): void {

        $obj = new Reglements();

        $obj->setGestionPaiements(true);
        $this->assertTrue($obj->getGestionPaiements());
    }

    /**
     * Test setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Reglements();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Reglements();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setIntitule2()
     *
     * @return void
     */
    public function testSetIntitule2(): void {

        $obj = new Reglements();

        $obj->setIntitule2("intitule2");
        $this->assertEquals("intitule2", $obj->getIntitule2());
    }

    /**
     * Test setIntitule3()
     *
     * @return void
     */
    public function testSetIntitule3(): void {

        $obj = new Reglements();

        $obj->setIntitule3("intitule3");
        $this->assertEquals("intitule3", $obj->getIntitule3());
    }

    /**
     * Test setLcr()
     *
     * @return void
     */
    public function testSetLcr(): void {

        $obj = new Reglements();

        $obj->setLcr(true);
        $this->assertTrue($obj->getLcr());
    }

    /**
     * Test setLibEcrCaisse()
     *
     * @return void
     */
    public function testSetLibEcrCaisse(): void {

        $obj = new Reglements();

        $obj->setLibEcrCaisse("libEcrCaisse");
        $this->assertEquals("libEcrCaisse", $obj->getLibEcrCaisse());
    }

    /**
     * Test setNombreEcheances()
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new Reglements();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Test setPaiementDepartLe()
     *
     * @return void
     */
    public function testSetPaiementDepartLe(): void {

        $obj = new Reglements();

        $obj->setPaiementDepartLe("paiementDepartLe");
        $this->assertEquals("paiementDepartLe", $obj->getPaiementDepartLe());
    }

    /**
     * Test setPaiementLe()
     *
     * @return void
     */
    public function testSetPaiementLe(): void {

        $obj = new Reglements();

        $obj->setPaiementLe("paiementLe");
        $this->assertEquals("paiementLe", $obj->getPaiementLe());
    }

    /**
     * Test setPaiementNombreDeJours()
     *
     * @return void
     */
    public function testSetPaiementNombreDeJours(): void {

        $obj = new Reglements();

        $obj->setPaiementNombreDeJours(10);
        $this->assertEquals(10, $obj->getPaiementNombreDeJours());
    }

    /**
     * Test setPasDeTiroirCaisse()
     *
     * @return void
     */
    public function testSetPasDeTiroirCaisse(): void {

        $obj = new Reglements();

        $obj->setPasDeTiroirCaisse(true);
        $this->assertTrue($obj->getPasDeTiroirCaisse());
    }

    /**
     * Test setPasEffetAvoir()
     *
     * @return void
     */
    public function testSetPasEffetAvoir(): void {

        $obj = new Reglements();

        $obj->setPasEffetAvoir(true);
        $this->assertTrue($obj->getPasEffetAvoir());
    }

    /**
     * Test setRemisePied()
     *
     * @return void
     */
    public function testSetRemisePied(): void {

        $obj = new Reglements();

        $obj->setRemisePied(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied());
    }

    /**
     * Test setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Reglements();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Test setTraiteEditer()
     *
     * @return void
     */
    public function testSetTraiteEditer(): void {

        $obj = new Reglements();

        $obj->setTraiteEditer(true);
        $this->assertTrue($obj->getTraiteEditer());
    }

    /**
     * Test setTypeAcceptation()
     *
     * @return void
     */
    public function testSetTypeAcceptation(): void {

        $obj = new Reglements();

        $obj->setTypeAcceptation("typeAcceptation");
        $this->assertEquals("typeAcceptation", $obj->getTypeAcceptation());
    }

    /**
     * Test __construct()
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
