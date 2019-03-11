<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DeclarationsAT;

/**
 * Declarations a t model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DeclarationsATTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DeclarationsAT();

        $this->assertNull($obj->getAdresse());
        $this->assertNull($obj->getCategorie());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCommune());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDeductForfait());
        $this->assertNull($obj->getDtAccouchement());
        $this->assertNull($obj->getDtDebAT());
        $this->assertNull($obj->getDtDebConges());
        $this->assertNull($obj->getDtEmbauche());
        $this->assertNull($obj->getDtFinConges());
        $this->assertNull($obj->getDtFinContrat());
        $this->assertNull($obj->getDtFinPreavis());
        $this->assertNull($obj->getEtblNom());
        $this->assertNull($obj->getEtblResponsable());
        $this->assertNull($obj->getEtblSIRET());
        $this->assertNull($obj->getEtblSignature());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMemoAccident());
        $this->assertNull($obj->getMemoCorrespondance());
        $this->assertNull($obj->getMotifAT());
        $this->assertNull($obj->getMtSalaireBrut());
        $this->assertNull($obj->getNIR());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumDAT());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getSignDate());
        $this->assertNull($obj->getTypeDAT());
    }

    /**
     * Tests the setAdresse() method.
     *
     * @return void
     */
    public function testSetAdresse() {

        $obj = new DeclarationsAT();

        $obj->setAdresse("adresse");
        $this->assertEquals("adresse", $obj->getAdresse());
    }

    /**
     * Tests the setCategorie() method.
     *
     * @return void
     */
    public function testSetCategorie() {

        $obj = new DeclarationsAT();

        $obj->setCategorie("categorie");
        $this->assertEquals("categorie", $obj->getCategorie());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new DeclarationsAT();

        $obj->setCodeEtablissement("codeEtablissement");
        $this->assertEquals("codeEtablissement", $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new DeclarationsAT();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCommune() method.
     *
     * @return void
     */
    public function testSetCommune() {

        $obj = new DeclarationsAT();

        $obj->setCommune("commune");
        $this->assertEquals("commune", $obj->getCommune());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new DeclarationsAT();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setDateNaissance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissance() {

        $obj = new DeclarationsAT();

        $obj->setDateNaissance(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaissance());
    }

    /**
     * Tests the setDeductForfait() method.
     *
     * @return void
     */
    public function testSetDeductForfait() {

        $obj = new DeclarationsAT();

        $obj->setDeductForfait(10);
        $this->assertEquals(10, $obj->getDeductForfait());
    }

    /**
     * Tests the setDtAccouchement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtAccouchement() {

        $obj = new DeclarationsAT();

        $obj->setDtAccouchement(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtAccouchement());
    }

    /**
     * Tests the setDtDebAT() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebAT() {

        $obj = new DeclarationsAT();

        $obj->setDtDebAT(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebAT());
    }

    /**
     * Tests the setDtDebConges() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebConges() {

        $obj = new DeclarationsAT();

        $obj->setDtDebConges(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebConges());
    }

    /**
     * Tests the setDtEmbauche() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtEmbauche() {

        $obj = new DeclarationsAT();

        $obj->setDtEmbauche(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtEmbauche());
    }

    /**
     * Tests the setDtFinConges() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinConges() {

        $obj = new DeclarationsAT();

        $obj->setDtFinConges(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinConges());
    }

    /**
     * Tests the setDtFinContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinContrat() {

        $obj = new DeclarationsAT();

        $obj->setDtFinContrat(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinContrat());
    }

    /**
     * Tests the setDtFinPreavis() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPreavis() {

        $obj = new DeclarationsAT();

        $obj->setDtFinPreavis(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinPreavis());
    }

    /**
     * Tests the setEtblNom() method.
     *
     * @return void
     */
    public function testSetEtblNom() {

        $obj = new DeclarationsAT();

        $obj->setEtblNom("etblNom");
        $this->assertEquals("etblNom", $obj->getEtblNom());
    }

    /**
     * Tests the setEtblResponsable() method.
     *
     * @return void
     */
    public function testSetEtblResponsable() {

        $obj = new DeclarationsAT();

        $obj->setEtblResponsable("etblResponsable");
        $this->assertEquals("etblResponsable", $obj->getEtblResponsable());
    }

    /**
     * Tests the setEtblSIRET() method.
     *
     * @return void
     */
    public function testSetEtblSIRET() {

        $obj = new DeclarationsAT();

        $obj->setEtblSIRET("etblSIRET");
        $this->assertEquals("etblSIRET", $obj->getEtblSIRET());
    }

    /**
     * Tests the setEtblSignature() method.
     *
     * @return void
     */
    public function testSetEtblSignature() {

        $obj = new DeclarationsAT();

        $obj->setEtblSignature("etblSignature");
        $this->assertEquals("etblSignature", $obj->getEtblSignature());
    }

    /**
     * Tests the setEtblTel() method.
     *
     * @return void
     */
    public function testSetEtblTel() {

        $obj = new DeclarationsAT();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new DeclarationsAT();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setMemoAccident() method.
     *
     * @return void
     */
    public function testSetMemoAccident() {

        $obj = new DeclarationsAT();

        $obj->setMemoAccident("memoAccident");
        $this->assertEquals("memoAccident", $obj->getMemoAccident());
    }

    /**
     * Tests the setMemoCorrespondance() method.
     *
     * @return void
     */
    public function testSetMemoCorrespondance() {

        $obj = new DeclarationsAT();

        $obj->setMemoCorrespondance("memoCorrespondance");
        $this->assertEquals("memoCorrespondance", $obj->getMemoCorrespondance());
    }

    /**
     * Tests the setMotifAT() method.
     *
     * @return void
     */
    public function testSetMotifAT() {

        $obj = new DeclarationsAT();

        $obj->setMotifAT("motifAT");
        $this->assertEquals("motifAT", $obj->getMotifAT());
    }

    /**
     * Tests the setMtSalaireBrut() method.
     *
     * @return void
     */
    public function testSetMtSalaireBrut() {

        $obj = new DeclarationsAT();

        $obj->setMtSalaireBrut(10);
        $this->assertEquals(10, $obj->getMtSalaireBrut());
    }

    /**
     * Tests the setNIR() method.
     *
     * @return void
     */
    public function testSetNIR() {

        $obj = new DeclarationsAT();

        $obj->setNIR("nIR");
        $this->assertEquals("nIR", $obj->getNIR());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom() {

        $obj = new DeclarationsAT();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNumDAT() method.
     *
     * @return void
     */
    public function testSetNumDAT() {

        $obj = new DeclarationsAT();

        $obj->setNumDAT("numDAT");
        $this->assertEquals("numDAT", $obj->getNumDAT());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new DeclarationsAT();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new DeclarationsAT();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setSignDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSignDate() {

        $obj = new DeclarationsAT();

        $obj->setSignDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getSignDate());
    }

    /**
     * Tests the setTypeDAT() method.
     *
     * @return void
     */
    public function testSetTypeDAT() {

        $obj = new DeclarationsAT();

        $obj->setTypeDAT("typeDAT");
        $this->assertEquals("typeDAT", $obj->getTypeDAT());
    }
}
