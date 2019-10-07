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

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\LocationsFi;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Locations fi model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class LocationsFiTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LocationsFi();

        $this->assertNull($obj->getBureau());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCodeJournalEcheance());
        $this->assertNull($obj->getCodeJournalPaiement());
        $this->assertNull($obj->getCodeTVA());
        $this->assertNull($obj->getCompteFrn());
        $this->assertNull($obj->getCptAssurance());
        $this->assertNull($obj->getCptCharge());
        $this->assertNull($obj->getCptEntretien());
        $this->assertNull($obj->getCptTVA());
        $this->assertNull($obj->getCptTVAAssu());
        $this->assertNull($obj->getDIN());
        $this->assertNull($obj->getDateAcquisition());
        $this->assertNull($obj->getDateFinContrat());
        $this->assertNull($obj->getDateMiseService());
        $this->assertNull($obj->getGuidVehicule());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleFrn());
        $this->assertNull($obj->getMateriauxAgricole());
        $this->assertNull($obj->getMontantTVA());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroPJ());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getTPDuree());
        $this->assertNull($obj->getTPEchoirEchu());
        $this->assertNull($obj->getTPMoisAnnee());
        $this->assertNull($obj->getTPMonttDepot());
        $this->assertNull($obj->getTPPeriodicite());
        $this->assertNull($obj->getTPPremierPaiement());
        $this->assertNull($obj->getTaxePro());
        $this->assertNull($obj->getValeurHT());
        $this->assertNull($obj->getValeurLocative());
    }

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
     * Tests the setCodeTVA() method.
     *
     * @return void
     */
    public function testSetCodeTVA() {

        $obj = new LocationsFi();

        $obj->setCodeTVA("codeTVA");
        $this->assertEquals("codeTVA", $obj->getCodeTVA());
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
     * Tests the setCptTVA() method.
     *
     * @return void
     */
    public function testSetCptTVA() {

        $obj = new LocationsFi();

        $obj->setCptTVA("cptTVA");
        $this->assertEquals("cptTVA", $obj->getCptTVA());
    }

    /**
     * Tests the setCptTVAAssu() method.
     *
     * @return void
     */
    public function testSetCptTVAAssu() {

        $obj = new LocationsFi();

        $obj->setCptTVAAssu("cptTVAAssu");
        $this->assertEquals("cptTVAAssu", $obj->getCptTVAAssu());
    }

    /**
     * Tests the setDIN() method.
     *
     * @return void
     */
    public function testSetDIN() {

        $obj = new LocationsFi();

        $obj->setDIN(true);
        $this->assertEquals(true, $obj->getDIN());
    }

    /**
     * Tests the setDateAcquisition() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAcquisition() {

        $obj = new LocationsFi();

        $obj->setDateAcquisition(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAcquisition());
    }

    /**
     * Tests the setDateFinContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinContrat() {

        $obj = new LocationsFi();

        $obj->setDateFinContrat(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinContrat());
    }

    /**
     * Tests the setDateMiseService() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateMiseService() {

        $obj = new LocationsFi();

        $obj->setDateMiseService(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateMiseService());
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
     * Tests the setMontantTVA() method.
     *
     * @return void
     */
    public function testSetMontantTVA() {

        $obj = new LocationsFi();

        $obj->setMontantTVA(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTVA());
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
     * Tests the setNumeroPJ() method.
     *
     * @return void
     */
    public function testSetNumeroPJ() {

        $obj = new LocationsFi();

        $obj->setNumeroPJ(10);
        $this->assertEquals(10, $obj->getNumeroPJ());
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
     * Tests the setTPDuree() method.
     *
     * @return void
     */
    public function testSetTPDuree() {

        $obj = new LocationsFi();

        $obj->setTPDuree(10);
        $this->assertEquals(10, $obj->getTPDuree());
    }

    /**
     * Tests the setTPEchoirEchu() method.
     *
     * @return void
     */
    public function testSetTPEchoirEchu() {

        $obj = new LocationsFi();

        $obj->setTPEchoirEchu("tPEchoirEchu");
        $this->assertEquals("tPEchoirEchu", $obj->getTPEchoirEchu());
    }

    /**
     * Tests the setTPMoisAnnee() method.
     *
     * @return void
     */
    public function testSetTPMoisAnnee() {

        $obj = new LocationsFi();

        $obj->setTPMoisAnnee("tPMoisAnnee");
        $this->assertEquals("tPMoisAnnee", $obj->getTPMoisAnnee());
    }

    /**
     * Tests the setTPMonttDepot() method.
     *
     * @return void
     */
    public function testSetTPMonttDepot() {

        $obj = new LocationsFi();

        $obj->setTPMonttDepot(10.092018);
        $this->assertEquals(10.092018, $obj->getTPMonttDepot());
    }

    /**
     * Tests the setTPPeriodicite() method.
     *
     * @return void
     */
    public function testSetTPPeriodicite() {

        $obj = new LocationsFi();

        $obj->setTPPeriodicite("tPPeriodicite");
        $this->assertEquals("tPPeriodicite", $obj->getTPPeriodicite());
    }

    /**
     * Tests the setTPPremierPaiement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTPPremierPaiement() {

        $obj = new LocationsFi();

        $obj->setTPPremierPaiement(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTPPremierPaiement());
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
     * Tests the setValeurHT() method.
     *
     * @return void
     */
    public function testSetValeurHT() {

        $obj = new LocationsFi();

        $obj->setValeurHT(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHT());
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
}
