<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\ActionsCo_Manif;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Actions co_ manif model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class ActionsCo_ManifTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ActionsCo_Manif();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeManif());
        $this->assertNull($obj->getContact());
        $this->assertNull($obj->getDateDeb());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getDureeDbl());
        $this->assertNull($obj->getIndiceAff());
        $this->assertNull($obj->getIsMontantHT());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleMemo());
        $this->assertNull($obj->getLieuBTQ());
        $this->assertNull($obj->getLieuBureauDistributeur());
        $this->assertNull($obj->getLieuCodePostal());
        $this->assertNull($obj->getLieuComplement());
        $this->assertNull($obj->getLieuEMail());
        $this->assertNull($obj->getLieuFax());
        $this->assertNull($obj->getLieuNom());
        $this->assertNull($obj->getLieuNomVoie());
        $this->assertNull($obj->getLieuNumVoie());
        $this->assertNull($obj->getLieuPJ());
        $this->assertNull($obj->getLieuTel());
        $this->assertNull($obj->getMontantCheque());
        $this->assertNull($obj->getNbSeances());
        $this->assertNull($obj->getNomFormateur());
        $this->assertNull($obj->getTypeFormation());
        $this->assertNull($obj->getYaFeuillePresence());
    }

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction() {

        $obj = new ActionsCo_Manif();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeManif() method.
     *
     * @return void
     */
    public function testSetCodeManif() {

        $obj = new ActionsCo_Manif();

        $obj->setCodeManif("codeManif");
        $this->assertEquals("codeManif", $obj->getCodeManif());
    }

    /**
     * Tests the setContact() method.
     *
     * @return void
     */
    public function testSetContact() {

        $obj = new ActionsCo_Manif();

        $obj->setContact("contact");
        $this->assertEquals("contact", $obj->getContact());
    }

    /**
     * Tests the setDateDeb() method.
     *
     * @return void
     */
    public function testSetDateDeb() {

        $obj = new ActionsCo_Manif();

        $obj->setDateDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDeb());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     */
    public function testSetDateFin() {

        $obj = new ActionsCo_Manif();

        $obj->setDateFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
    }

    /**
     * Tests the setDuree() method.
     *
     * @return void
     */
    public function testSetDuree() {

        $obj = new ActionsCo_Manif();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Tests the setDureeDbl() method.
     *
     * @return void
     */
    public function testSetDureeDbl() {

        $obj = new ActionsCo_Manif();

        $obj->setDureeDbl(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeDbl());
    }

    /**
     * Tests the setIndiceAff() method.
     *
     * @return void
     */
    public function testSetIndiceAff() {

        $obj = new ActionsCo_Manif();

        $obj->setIndiceAff(10);
        $this->assertEquals(10, $obj->getIndiceAff());
    }

    /**
     * Tests the setIsMontantHT() method.
     *
     * @return void
     */
    public function testSetIsMontantHT() {

        $obj = new ActionsCo_Manif();

        $obj->setIsMontantHT(true);
        $this->assertEquals(true, $obj->getIsMontantHT());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new ActionsCo_Manif();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelleMemo() method.
     *
     * @return void
     */
    public function testSetLibelleMemo() {

        $obj = new ActionsCo_Manif();

        $obj->setLibelleMemo("libelleMemo");
        $this->assertEquals("libelleMemo", $obj->getLibelleMemo());
    }

    /**
     * Tests the setLieuBTQ() method.
     *
     * @return void
     */
    public function testSetLieuBTQ() {

        $obj = new ActionsCo_Manif();

        $obj->setLieuBTQ("lieuBTQ");
        $this->assertEquals("lieuBTQ", $obj->getLieuBTQ());
    }

    /**
     * Tests the setLieuBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetLieuBureauDistributeur() {

        $obj = new ActionsCo_Manif();

        $obj->setLieuBureauDistributeur("lieuBureauDistributeur");
        $this->assertEquals("lieuBureauDistributeur", $obj->getLieuBureauDistributeur());
    }

    /**
     * Tests the setLieuCodePostal() method.
     *
     * @return void
     */
    public function testSetLieuCodePostal() {

        $obj = new ActionsCo_Manif();

        $obj->setLieuCodePostal("lieuCodePostal");
        $this->assertEquals("lieuCodePostal", $obj->getLieuCodePostal());
    }

    /**
     * Tests the setLieuComplement() method.
     *
     * @return void
     */
    public function testSetLieuComplement() {

        $obj = new ActionsCo_Manif();

        $obj->setLieuComplement("lieuComplement");
        $this->assertEquals("lieuComplement", $obj->getLieuComplement());
    }

    /**
     * Tests the setLieuEMail() method.
     *
     * @return void
     */
    public function testSetLieuEMail() {

        $obj = new ActionsCo_Manif();

        $obj->setLieuEMail("lieuEMail");
        $this->assertEquals("lieuEMail", $obj->getLieuEMail());
    }

    /**
     * Tests the setLieuFax() method.
     *
     * @return void
     */
    public function testSetLieuFax() {

        $obj = new ActionsCo_Manif();

        $obj->setLieuFax("lieuFax");
        $this->assertEquals("lieuFax", $obj->getLieuFax());
    }

    /**
     * Tests the setLieuNom() method.
     *
     * @return void
     */
    public function testSetLieuNom() {

        $obj = new ActionsCo_Manif();

        $obj->setLieuNom("lieuNom");
        $this->assertEquals("lieuNom", $obj->getLieuNom());
    }

    /**
     * Tests the setLieuNomVoie() method.
     *
     * @return void
     */
    public function testSetLieuNomVoie() {

        $obj = new ActionsCo_Manif();

        $obj->setLieuNomVoie("lieuNomVoie");
        $this->assertEquals("lieuNomVoie", $obj->getLieuNomVoie());
    }

    /**
     * Tests the setLieuNumVoie() method.
     *
     * @return void
     */
    public function testSetLieuNumVoie() {

        $obj = new ActionsCo_Manif();

        $obj->setLieuNumVoie("lieuNumVoie");
        $this->assertEquals("lieuNumVoie", $obj->getLieuNumVoie());
    }

    /**
     * Tests the setLieuPJ() method.
     *
     * @return void
     */
    public function testSetLieuPJ() {

        $obj = new ActionsCo_Manif();

        $obj->setLieuPJ("lieuPJ");
        $this->assertEquals("lieuPJ", $obj->getLieuPJ());
    }

    /**
     * Tests the setLieuTel() method.
     *
     * @return void
     */
    public function testSetLieuTel() {

        $obj = new ActionsCo_Manif();

        $obj->setLieuTel("lieuTel");
        $this->assertEquals("lieuTel", $obj->getLieuTel());
    }

    /**
     * Tests the setMontantCheque() method.
     *
     * @return void
     */
    public function testSetMontantCheque() {

        $obj = new ActionsCo_Manif();

        $obj->setMontantCheque(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCheque());
    }

    /**
     * Tests the setNbSeances() method.
     *
     * @return void
     */
    public function testSetNbSeances() {

        $obj = new ActionsCo_Manif();

        $obj->setNbSeances(10);
        $this->assertEquals(10, $obj->getNbSeances());
    }

    /**
     * Tests the setNomFormateur() method.
     *
     * @return void
     */
    public function testSetNomFormateur() {

        $obj = new ActionsCo_Manif();

        $obj->setNomFormateur("nomFormateur");
        $this->assertEquals("nomFormateur", $obj->getNomFormateur());
    }

    /**
     * Tests the setTypeFormation() method.
     *
     * @return void
     */
    public function testSetTypeFormation() {

        $obj = new ActionsCo_Manif();

        $obj->setTypeFormation(true);
        $this->assertEquals(true, $obj->getTypeFormation());
    }

    /**
     * Tests the setYaFeuillePresence() method.
     *
     * @return void
     */
    public function testSetYaFeuillePresence() {

        $obj = new ActionsCo_Manif();

        $obj->setYaFeuillePresence(true);
        $this->assertEquals(true, $obj->getYaFeuillePresence());
    }

}
