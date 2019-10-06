<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PlansEnTete;

/**
 * Plans en tete model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PlansEnTeteTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PlansEnTete();

        $this->assertNull($obj->getBTQ());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getDtAvantDernPrepa());
        $this->assertNull($obj->getDtDernPrepa());
        $this->assertNull($obj->getDtValiditeFactDeb());
        $this->assertNull($obj->getDtValiditeFactDebDebMois());
        $this->assertNull($obj->getDtValiditeFactFin());
        $this->assertNull($obj->getDtValiditeFactFinFinMois());
        $this->assertNull($obj->getJourFact());
        $this->assertNull($obj->getMontantHTPX());
        $this->assertNull($obj->getMontantHTVM());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomSuite2());
        $this->assertNull($obj->getNomSuite3());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumeroCommandeWebFT());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getReferenceFacture());
        $this->assertNull($obj->getReferenceFacture2());
        $this->assertNull($obj->getRevisionAnnuelle());
        $this->assertNull($obj->getTypeAdresse());
    }

    /**
     * Tests the setBTQ() method.
     *
     * @return void
     */
    public function testSetBTQ() {

        $obj = new PlansEnTete();

        $obj->setBTQ("bTQ");
        $this->assertEquals("bTQ", $obj->getBTQ());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new PlansEnTete();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCivilite() method.
     *
     * @return void
     */
    public function testSetCivilite() {

        $obj = new PlansEnTete();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new PlansEnTete();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new PlansEnTete();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new PlansEnTete();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays() {

        $obj = new PlansEnTete();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new PlansEnTete();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new PlansEnTete();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new PlansEnTete();

        $obj->setComplement("complément");
        $this->assertEquals("complément", $obj->getComplement());
    }

    /**
     * Tests the setDateRevision() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRevision() {

        $obj = new PlansEnTete();

        $obj->setDateRevision(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRevision());
    }

    /**
     * Tests the setDtAvantDernPrepa() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtAvantDernPrepa() {

        $obj = new PlansEnTete();

        $obj->setDtAvantDernPrepa(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtAvantDernPrepa());
    }

    /**
     * Tests the setDtDernPrepa() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDernPrepa() {

        $obj = new PlansEnTete();

        $obj->setDtDernPrepa(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDernPrepa());
    }

    /**
     * Tests the setDtValiditeFactDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactDeb() {

        $obj = new PlansEnTete();

        $obj->setDtValiditeFactDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtValiditeFactDeb());
    }

    /**
     * Tests the setDtValiditeFactDebDebMois() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactDebDebMois() {

        $obj = new PlansEnTete();

        $obj->setDtValiditeFactDebDebMois(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtValiditeFactDebDebMois());
    }

    /**
     * Tests the setDtValiditeFactFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactFin() {

        $obj = new PlansEnTete();

        $obj->setDtValiditeFactFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtValiditeFactFin());
    }

    /**
     * Tests the setDtValiditeFactFinFinMois() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactFinFinMois() {

        $obj = new PlansEnTete();

        $obj->setDtValiditeFactFinFinMois(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtValiditeFactFinFinMois());
    }

    /**
     * Tests the setJourFact() method.
     *
     * @return void
     */
    public function testSetJourFact() {

        $obj = new PlansEnTete();

        $obj->setJourFact("jourFact");
        $this->assertEquals("jourFact", $obj->getJourFact());
    }

    /**
     * Tests the setMontantHTPX() method.
     *
     * @return void
     */
    public function testSetMontantHTPX() {

        $obj = new PlansEnTete();

        $obj->setMontantHTPX(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHTPX());
    }

    /**
     * Tests the setMontantHTVM() method.
     *
     * @return void
     */
    public function testSetMontantHTVM() {

        $obj = new PlansEnTete();

        $obj->setMontantHTVM(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHTVM());
    }

    /**
     * Tests the setNomClient() method.
     *
     * @return void
     */
    public function testSetNomClient() {

        $obj = new PlansEnTete();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests the setNomSuite() method.
     *
     * @return void
     */
    public function testSetNomSuite() {

        $obj = new PlansEnTete();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests the setNomSuite2() method.
     *
     * @return void
     */
    public function testSetNomSuite2() {

        $obj = new PlansEnTete();

        $obj->setNomSuite2("nomSuite2");
        $this->assertEquals("nomSuite2", $obj->getNomSuite2());
    }

    /**
     * Tests the setNomSuite3() method.
     *
     * @return void
     */
    public function testSetNomSuite3() {

        $obj = new PlansEnTete();

        $obj->setNomSuite3("nomSuite3");
        $this->assertEquals("nomSuite3", $obj->getNomSuite3());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new PlansEnTete();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new PlansEnTete();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new PlansEnTete();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setNumeroCommandeWebFT() method.
     *
     * @return void
     */
    public function testSetNumeroCommandeWebFT() {

        $obj = new PlansEnTete();

        $obj->setNumeroCommandeWebFT("numeroCommandeWebFT");
        $this->assertEquals("numeroCommandeWebFT", $obj->getNumeroCommandeWebFT());
    }

    /**
     * Tests the setNumeroDevis() method.
     *
     * @return void
     */
    public function testSetNumeroDevis() {

        $obj = new PlansEnTete();

        $obj->setNumeroDevis("numeroDevis");
        $this->assertEquals("numeroDevis", $obj->getNumeroDevis());
    }

    /**
     * Tests the setReferenceFacture() method.
     *
     * @return void
     */
    public function testSetReferenceFacture() {

        $obj = new PlansEnTete();

        $obj->setReferenceFacture("referenceFacture");
        $this->assertEquals("referenceFacture", $obj->getReferenceFacture());
    }

    /**
     * Tests the setReferenceFacture2() method.
     *
     * @return void
     */
    public function testSetReferenceFacture2() {

        $obj = new PlansEnTete();

        $obj->setReferenceFacture2("referenceFacture2");
        $this->assertEquals("referenceFacture2", $obj->getReferenceFacture2());
    }

    /**
     * Tests the setRevisionAnnuelle() method.
     *
     * @return void
     */
    public function testSetRevisionAnnuelle() {

        $obj = new PlansEnTete();

        $obj->setRevisionAnnuelle(true);
        $this->assertEquals(true, $obj->getRevisionAnnuelle());
    }

    /**
     * Tests the setTypeAdresse() method.
     *
     * @return void
     */
    public function testSetTypeAdresse() {

        $obj = new PlansEnTete();

        $obj->setTypeAdresse("typeAdresse");
        $this->assertEquals("typeAdresse", $obj->getTypeAdresse());
    }
}
