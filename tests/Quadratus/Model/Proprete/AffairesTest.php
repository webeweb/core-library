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
use WBW\Library\Core\Quadratus\Model\Proprete\Affaires;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Affaires model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class AffairesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Affaires();

        $this->assertNull($obj->getBTQ());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCAStatAnnuel());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCommercial());
        $this->assertNull($obj->getCodeFactor());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeRegMarge());
        $this->assertNull($obj->getCodeTVA());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateDebAffaire());
        $this->assertNull($obj->getDateDebAffaireDebMois());
        $this->assertNull($obj->getDateFinAffaire());
        $this->assertNull($obj->getDateFinAffaireFinMois());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDateVente());
        $this->assertNull($obj->getFactureIsolee());
        $this->assertNull($obj->getGroupeSousTraite());
        $this->assertNull($obj->getNomAdresse());
        $this->assertNull($obj->getNomAffaire());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getReferenceFacture());
        $this->assertNull($obj->getReferenceFacture2());
    }

    /**
     * Tests the setBTQ() method.
     *
     * @return void
     */
    public function testSetBTQ() {

        $obj = new Affaires();

        $obj->setBTQ("bTQ");
        $this->assertEquals("bTQ", $obj->getBTQ());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new Affaires();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCAStatAnnuel() method.
     *
     * @return void
     */
    public function testSetCAStatAnnuel() {

        $obj = new Affaires();

        $obj->setCAStatAnnuel(10.092018);
        $this->assertEquals(10.092018, $obj->getCAStatAnnuel());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new Affaires();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAnalytique() method.
     *
     * @return void
     */
    public function testSetCodeAnalytique() {

        $obj = new Affaires();

        $obj->setCodeAnalytique("codeAnalytique");
        $this->assertEquals("codeAnalytique", $obj->getCodeAnalytique());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new Affaires();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCommercial() method.
     *
     * @return void
     */
    public function testSetCodeCommercial() {

        $obj = new Affaires();

        $obj->setCodeCommercial("codeCommercial");
        $this->assertEquals("codeCommercial", $obj->getCodeCommercial());
    }

    /**
     * Tests the setCodeFactor() method.
     *
     * @return void
     */
    public function testSetCodeFactor() {

        $obj = new Affaires();

        $obj->setCodeFactor("codeFactor");
        $this->assertEquals("codeFactor", $obj->getCodeFactor());
    }

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays() {

        $obj = new Affaires();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new Affaires();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodeRegMarge() method.
     *
     * @return void
     */
    public function testSetCodeRegMarge() {

        $obj = new Affaires();

        $obj->setCodeRegMarge("codeRegMarge");
        $this->assertEquals("codeRegMarge", $obj->getCodeRegMarge());
    }

    /**
     * Tests the setCodeTVA() method.
     *
     * @return void
     */
    public function testSetCodeTVA() {

        $obj = new Affaires();

        $obj->setCodeTVA("codeTVA");
        $this->assertEquals("codeTVA", $obj->getCodeTVA());
    }

    /**
     * Tests the setCodeVentilCompta() method.
     *
     * @return void
     */
    public function testSetCodeVentilCompta() {

        $obj = new Affaires();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new Affaires();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setDateCreat() method.
     *
     * @return void
     */
    public function testSetDateCreat() {

        $obj = new Affaires();

        $obj->setDateCreat(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreat());
    }

    /**
     * Tests the setDateDebAffaire() method.
     *
     * @return void
     */
    public function testSetDateDebAffaire() {

        $obj = new Affaires();

        $obj->setDateDebAffaire(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebAffaire());
    }

    /**
     * Tests the setDateDebAffaireDebMois() method.
     *
     * @return void
     */
    public function testSetDateDebAffaireDebMois() {

        $obj = new Affaires();

        $obj->setDateDebAffaireDebMois(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebAffaireDebMois());
    }

    /**
     * Tests the setDateFinAffaire() method.
     *
     * @return void
     */
    public function testSetDateFinAffaire() {

        $obj = new Affaires();

        $obj->setDateFinAffaire(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinAffaire());
    }

    /**
     * Tests the setDateFinAffaireFinMois() method.
     *
     * @return void
     */
    public function testSetDateFinAffaireFinMois() {

        $obj = new Affaires();

        $obj->setDateFinAffaireFinMois(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinAffaireFinMois());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     */
    public function testSetDateModif() {

        $obj = new Affaires();

        $obj->setDateModif(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
    }

    /**
     * Tests the setDateVente() method.
     *
     * @return void
     */
    public function testSetDateVente() {

        $obj = new Affaires();

        $obj->setDateVente(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateVente());
    }

    /**
     * Tests the setFactureIsolee() method.
     *
     * @return void
     */
    public function testSetFactureIsolee() {

        $obj = new Affaires();

        $obj->setFactureIsolee(true);
        $this->assertEquals(true, $obj->getFactureIsolee());
    }

    /**
     * Tests the setGroupeSousTraite() method.
     *
     * @return void
     */
    public function testSetGroupeSousTraite() {

        $obj = new Affaires();

        $obj->setGroupeSousTraite("groupeSousTraite");
        $this->assertEquals("groupeSousTraite", $obj->getGroupeSousTraite());
    }

    /**
     * Tests the setNomAdresse() method.
     *
     * @return void
     */
    public function testSetNomAdresse() {

        $obj = new Affaires();

        $obj->setNomAdresse("nomAdresse");
        $this->assertEquals("nomAdresse", $obj->getNomAdresse());
    }

    /**
     * Tests the setNomAffaire() method.
     *
     * @return void
     */
    public function testSetNomAffaire() {

        $obj = new Affaires();

        $obj->setNomAffaire("nomAffaire");
        $this->assertEquals("nomAffaire", $obj->getNomAffaire());
    }

    /**
     * Tests the setNomSuite() method.
     *
     * @return void
     */
    public function testSetNomSuite() {

        $obj = new Affaires();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new Affaires();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new Affaires();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setReferenceFacture() method.
     *
     * @return void
     */
    public function testSetReferenceFacture() {

        $obj = new Affaires();

        $obj->setReferenceFacture("referenceFacture");
        $this->assertEquals("referenceFacture", $obj->getReferenceFacture());
    }

    /**
     * Tests the setReferenceFacture2() method.
     *
     * @return void
     */
    public function testSetReferenceFacture2() {

        $obj = new Affaires();

        $obj->setReferenceFacture2("referenceFacture2");
        $this->assertEquals("referenceFacture2", $obj->getReferenceFacture2());
    }

}
