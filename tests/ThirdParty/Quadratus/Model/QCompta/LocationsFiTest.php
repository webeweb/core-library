<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\LocationsFi;

/**
 * Locations fi test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class LocationsFiTest extends AbstractTestCase {

    /**
     * Tests the setBureau() method.
     *
     * @return void
     */
    public function testSetBureau() {

        $obj = new LocationsFi();

        $obj->setBureau("bureau");
        $this->assertEquals("bureau", $obj->getBureau());
    }

    /**
     * Tests the setCentreAnalytique() method.
     *
     * @return void
     */
    public function testSetCentreAnalytique() {

        $obj = new LocationsFi();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests the setCodeJournalEcheance() method.
     *
     * @return void
     */
    public function testSetCodeJournalEcheance() {

        $obj = new LocationsFi();

        $obj->setCodeJournalEcheance("codeJournalEcheance");
        $this->assertEquals("codeJournalEcheance", $obj->getCodeJournalEcheance());
    }

    /**
     * Tests the setCodeJournalPaiement() method.
     *
     * @return void
     */
    public function testSetCodeJournalPaiement() {

        $obj = new LocationsFi();

        $obj->setCodeJournalPaiement("codeJournalPaiement");
        $this->assertEquals("codeJournalPaiement", $obj->getCodeJournalPaiement());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new LocationsFi();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setCompteFrn() method.
     *
     * @return void
     */
    public function testSetCompteFrn() {

        $obj = new LocationsFi();

        $obj->setCompteFrn("compteFrn");
        $this->assertEquals("compteFrn", $obj->getCompteFrn());
    }

    /**
     * Tests the setCptAssurance() method.
     *
     * @return void
     */
    public function testSetCptAssurance() {

        $obj = new LocationsFi();

        $obj->setCptAssurance("cptAssurance");
        $this->assertEquals("cptAssurance", $obj->getCptAssurance());
    }

    /**
     * Tests the setCptCharge() method.
     *
     * @return void
     */
    public function testSetCptCharge() {

        $obj = new LocationsFi();

        $obj->setCptCharge("cptCharge");
        $this->assertEquals("cptCharge", $obj->getCptCharge());
    }

    /**
     * Tests the setCptEntretien() method.
     *
     * @return void
     */
    public function testSetCptEntretien() {

        $obj = new LocationsFi();

        $obj->setCptEntretien("cptEntretien");
        $this->assertEquals("cptEntretien", $obj->getCptEntretien());
    }

    /**
     * Tests the setCptTva() method.
     *
     * @return void
     */
    public function testSetCptTva() {

        $obj = new LocationsFi();

        $obj->setCptTva("cptTva");
        $this->assertEquals("cptTva", $obj->getCptTva());
    }

    /**
     * Tests the setCptTvaAssu() method.
     *
     * @return void
     */
    public function testSetCptTvaAssu() {

        $obj = new LocationsFi();

        $obj->setCptTvaAssu("cptTvaAssu");
        $this->assertEquals("cptTvaAssu", $obj->getCptTvaAssu());
    }

    /**
     * Tests the setDateAcquisition() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAcquisition() {

        // Set a Date/time mock.
        $dateAcquisition = new DateTime("2018-09-10");

        $obj = new LocationsFi();

        $obj->setDateAcquisition($dateAcquisition);
        $this->assertSame($dateAcquisition, $obj->getDateAcquisition());
    }

    /**
     * Tests the setDateFinContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinContrat() {

        // Set a Date/time mock.
        $dateFinContrat = new DateTime("2018-09-10");

        $obj = new LocationsFi();

        $obj->setDateFinContrat($dateFinContrat);
        $this->assertSame($dateFinContrat, $obj->getDateFinContrat());
    }

    /**
     * Tests the setDateMiseService() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateMiseService() {

        // Set a Date/time mock.
        $dateMiseService = new DateTime("2018-09-10");

        $obj = new LocationsFi();

        $obj->setDateMiseService($dateMiseService);
        $this->assertSame($dateMiseService, $obj->getDateMiseService());
    }

    /**
     * Tests the setDin() method.
     *
     * @return void
     */
    public function testSetDin() {

        $obj = new LocationsFi();

        $obj->setDin(true);
        $this->assertEquals(true, $obj->getDin());
    }

    /**
     * Tests the setGuidVehicule() method.
     *
     * @return void
     */
    public function testSetGuidVehicule() {

        $obj = new LocationsFi();

        $obj->setGuidVehicule("guidVehicule");
        $this->assertEquals("guidVehicule", $obj->getGuidVehicule());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new LocationsFi();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelleFrn() method.
     *
     * @return void
     */
    public function testSetLibelleFrn() {

        $obj = new LocationsFi();

        $obj->setLibelleFrn("libelleFrn");
        $this->assertEquals("libelleFrn", $obj->getLibelleFrn());
    }

    /**
     * Tests the setMateriauxAgricole() method.
     *
     * @return void
     */
    public function testSetMateriauxAgricole() {

        $obj = new LocationsFi();

        $obj->setMateriauxAgricole(true);
        $this->assertEquals(true, $obj->getMateriauxAgricole());
    }

    /**
     * Tests the setMontantTva() method.
     *
     * @return void
     */
    public function testSetMontantTva() {

        $obj = new LocationsFi();

        $obj->setMontantTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTva());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new LocationsFi();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new LocationsFi();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroPj() method.
     *
     * @return void
     */
    public function testSetNumeroPj() {

        $obj = new LocationsFi();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new LocationsFi();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService() {

        $obj = new LocationsFi();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setTaxePro() method.
     *
     * @return void
     */
    public function testSetTaxePro() {

        $obj = new LocationsFi();

        $obj->setTaxePro(true);
        $this->assertEquals(true, $obj->getTaxePro());
    }

    /**
     * Tests the setTpDuree() method.
     *
     * @return void
     */
    public function testSetTpDuree() {

        $obj = new LocationsFi();

        $obj->setTpDuree(10);
        $this->assertEquals(10, $obj->getTpDuree());
    }

    /**
     * Tests the setTpEchoirEchu() method.
     *
     * @return void
     */
    public function testSetTpEchoirEchu() {

        $obj = new LocationsFi();

        $obj->setTpEchoirEchu("tpEchoirEchu");
        $this->assertEquals("tpEchoirEchu", $obj->getTpEchoirEchu());
    }

    /**
     * Tests the setTpMoisAnnee() method.
     *
     * @return void
     */
    public function testSetTpMoisAnnee() {

        $obj = new LocationsFi();

        $obj->setTpMoisAnnee("tpMoisAnnee");
        $this->assertEquals("tpMoisAnnee", $obj->getTpMoisAnnee());
    }

    /**
     * Tests the setTpMonttDepot() method.
     *
     * @return void
     */
    public function testSetTpMonttDepot() {

        $obj = new LocationsFi();

        $obj->setTpMonttDepot(10.092018);
        $this->assertEquals(10.092018, $obj->getTpMonttDepot());
    }

    /**
     * Tests the setTpPeriodicite() method.
     *
     * @return void
     */
    public function testSetTpPeriodicite() {

        $obj = new LocationsFi();

        $obj->setTpPeriodicite("tpPeriodicite");
        $this->assertEquals("tpPeriodicite", $obj->getTpPeriodicite());
    }

    /**
     * Tests the setTpPremierPaiement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTpPremierPaiement() {

        // Set a Date/time mock.
        $tpPremierPaiement = new DateTime("2018-09-10");

        $obj = new LocationsFi();

        $obj->setTpPremierPaiement($tpPremierPaiement);
        $this->assertSame($tpPremierPaiement, $obj->getTpPremierPaiement());
    }

    /**
     * Tests the setValeurHt() method.
     *
     * @return void
     */
    public function testSetValeurHt() {

        $obj = new LocationsFi();

        $obj->setValeurHt(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHt());
    }

    /**
     * Tests the setValeurLocative() method.
     *
     * @return void
     */
    public function testSetValeurLocative() {

        $obj = new LocationsFi();

        $obj->setValeurLocative(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurLocative());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
