<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\LocationsFi;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Locations fi test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class LocationsFiTest extends AbstractTestCase {

    /**
     * Test setBureau()
     *
     * @return void
     */
    public function testSetBureau(): void {

        $obj = new LocationsFi();

        $obj->setBureau("bureau");
        $this->assertEquals("bureau", $obj->getBureau());
    }

    /**
     * Test setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new LocationsFi();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Test setCodeJournalEcheance()
     *
     * @return void
     */
    public function testSetCodeJournalEcheance(): void {

        $obj = new LocationsFi();

        $obj->setCodeJournalEcheance("codeJournalEcheance");
        $this->assertEquals("codeJournalEcheance", $obj->getCodeJournalEcheance());
    }

    /**
     * Test setCodeJournalPaiement()
     *
     * @return void
     */
    public function testSetCodeJournalPaiement(): void {

        $obj = new LocationsFi();

        $obj->setCodeJournalPaiement("codeJournalPaiement");
        $this->assertEquals("codeJournalPaiement", $obj->getCodeJournalPaiement());
    }

    /**
     * Test setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new LocationsFi();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Test setCompteFrn()
     *
     * @return void
     */
    public function testSetCompteFrn(): void {

        $obj = new LocationsFi();

        $obj->setCompteFrn("compteFrn");
        $this->assertEquals("compteFrn", $obj->getCompteFrn());
    }

    /**
     * Test setCptAssurance()
     *
     * @return void
     */
    public function testSetCptAssurance(): void {

        $obj = new LocationsFi();

        $obj->setCptAssurance("cptAssurance");
        $this->assertEquals("cptAssurance", $obj->getCptAssurance());
    }

    /**
     * Test setCptCharge()
     *
     * @return void
     */
    public function testSetCptCharge(): void {

        $obj = new LocationsFi();

        $obj->setCptCharge("cptCharge");
        $this->assertEquals("cptCharge", $obj->getCptCharge());
    }

    /**
     * Test setCptEntretien()
     *
     * @return void
     */
    public function testSetCptEntretien(): void {

        $obj = new LocationsFi();

        $obj->setCptEntretien("cptEntretien");
        $this->assertEquals("cptEntretien", $obj->getCptEntretien());
    }

    /**
     * Test setCptTva()
     *
     * @return void
     */
    public function testSetCptTva(): void {

        $obj = new LocationsFi();

        $obj->setCptTva("cptTva");
        $this->assertEquals("cptTva", $obj->getCptTva());
    }

    /**
     * Test setCptTvaAssu()
     *
     * @return void
     */
    public function testSetCptTvaAssu(): void {

        $obj = new LocationsFi();

        $obj->setCptTvaAssu("cptTvaAssu");
        $this->assertEquals("cptTvaAssu", $obj->getCptTvaAssu());
    }

    /**
     * Test setDateAcquisition()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAcquisition(): void {

        // Set a Date/time mock.
        $dateAcquisition = new DateTime("2018-09-10");

        $obj = new LocationsFi();

        $obj->setDateAcquisition($dateAcquisition);
        $this->assertSame($dateAcquisition, $obj->getDateAcquisition());
    }

    /**
     * Test setDateFinContrat()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinContrat(): void {

        // Set a Date/time mock.
        $dateFinContrat = new DateTime("2018-09-10");

        $obj = new LocationsFi();

        $obj->setDateFinContrat($dateFinContrat);
        $this->assertSame($dateFinContrat, $obj->getDateFinContrat());
    }

    /**
     * Test setDateMiseService()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateMiseService(): void {

        // Set a Date/time mock.
        $dateMiseService = new DateTime("2018-09-10");

        $obj = new LocationsFi();

        $obj->setDateMiseService($dateMiseService);
        $this->assertSame($dateMiseService, $obj->getDateMiseService());
    }

    /**
     * Test setDin()
     *
     * @return void
     */
    public function testSetDin(): void {

        $obj = new LocationsFi();

        $obj->setDin(true);
        $this->assertTrue($obj->getDin());
    }

    /**
     * Test setGuidVehicule()
     *
     * @return void
     */
    public function testSetGuidVehicule(): void {

        $obj = new LocationsFi();

        $obj->setGuidVehicule("guidVehicule");
        $this->assertEquals("guidVehicule", $obj->getGuidVehicule());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new LocationsFi();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setLibelleFrn()
     *
     * @return void
     */
    public function testSetLibelleFrn(): void {

        $obj = new LocationsFi();

        $obj->setLibelleFrn("libelleFrn");
        $this->assertEquals("libelleFrn", $obj->getLibelleFrn());
    }

    /**
     * Test setMateriauxAgricole()
     *
     * @return void
     */
    public function testSetMateriauxAgricole(): void {

        $obj = new LocationsFi();

        $obj->setMateriauxAgricole(true);
        $this->assertTrue($obj->getMateriauxAgricole());
    }

    /**
     * Test setMontantTva()
     *
     * @return void
     */
    public function testSetMontantTva(): void {

        $obj = new LocationsFi();

        $obj->setMontantTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTva());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new LocationsFi();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new LocationsFi();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Test setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new LocationsFi();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Test setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new LocationsFi();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Test setService()
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new LocationsFi();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Test setTaxePro()
     *
     * @return void
     */
    public function testSetTaxePro(): void {

        $obj = new LocationsFi();

        $obj->setTaxePro(true);
        $this->assertTrue($obj->getTaxePro());
    }

    /**
     * Test setTpDuree()
     *
     * @return void
     */
    public function testSetTpDuree(): void {

        $obj = new LocationsFi();

        $obj->setTpDuree(10);
        $this->assertEquals(10, $obj->getTpDuree());
    }

    /**
     * Test setTpEchoirEchu()
     *
     * @return void
     */
    public function testSetTpEchoirEchu(): void {

        $obj = new LocationsFi();

        $obj->setTpEchoirEchu("tpEchoirEchu");
        $this->assertEquals("tpEchoirEchu", $obj->getTpEchoirEchu());
    }

    /**
     * Test setTpMoisAnnee()
     *
     * @return void
     */
    public function testSetTpMoisAnnee(): void {

        $obj = new LocationsFi();

        $obj->setTpMoisAnnee("tpMoisAnnee");
        $this->assertEquals("tpMoisAnnee", $obj->getTpMoisAnnee());
    }

    /**
     * Test setTpMonttDepot()
     *
     * @return void
     */
    public function testSetTpMonttDepot(): void {

        $obj = new LocationsFi();

        $obj->setTpMonttDepot(10.092018);
        $this->assertEquals(10.092018, $obj->getTpMonttDepot());
    }

    /**
     * Test setTpPeriodicite()
     *
     * @return void
     */
    public function testSetTpPeriodicite(): void {

        $obj = new LocationsFi();

        $obj->setTpPeriodicite("tpPeriodicite");
        $this->assertEquals("tpPeriodicite", $obj->getTpPeriodicite());
    }

    /**
     * Test setTpPremierPaiement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetTpPremierPaiement(): void {

        // Set a Date/time mock.
        $tpPremierPaiement = new DateTime("2018-09-10");

        $obj = new LocationsFi();

        $obj->setTpPremierPaiement($tpPremierPaiement);
        $this->assertSame($tpPremierPaiement, $obj->getTpPremierPaiement());
    }

    /**
     * Test setValeurHt()
     *
     * @return void
     */
    public function testSetValeurHt(): void {

        $obj = new LocationsFi();

        $obj->setValeurHt(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHt());
    }

    /**
     * Test setValeurLocative()
     *
     * @return void
     */
    public function testSetValeurLocative(): void {

        $obj = new LocationsFi();

        $obj->setValeurLocative(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurLocative());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LocationsFi();

        $this->assertNull($obj->getBureau());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCodeJournalEcheance());
        $this->assertNull($obj->getCodeJournalPaiement());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCompteFrn());
        $this->assertNull($obj->getCptAssurance());
        $this->assertNull($obj->getCptCharge());
        $this->assertNull($obj->getCptEntretien());
        $this->assertNull($obj->getCptTva());
        $this->assertNull($obj->getCptTvaAssu());
        $this->assertNull($obj->getDin());
        $this->assertNull($obj->getDateAcquisition());
        $this->assertNull($obj->getDateFinContrat());
        $this->assertNull($obj->getDateMiseService());
        $this->assertNull($obj->getGuidVehicule());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleFrn());
        $this->assertNull($obj->getMateriauxAgricole());
        $this->assertNull($obj->getMontantTva());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getTpDuree());
        $this->assertNull($obj->getTpEchoirEchu());
        $this->assertNull($obj->getTpMoisAnnee());
        $this->assertNull($obj->getTpMonttDepot());
        $this->assertNull($obj->getTpPeriodicite());
        $this->assertNull($obj->getTpPremierPaiement());
        $this->assertNull($obj->getTaxePro());
        $this->assertNull($obj->getValeurHt());
        $this->assertNull($obj->getValeurLocative());
    }
}
