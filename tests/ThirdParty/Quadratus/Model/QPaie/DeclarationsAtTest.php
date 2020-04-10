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
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DeclarationsAt;

/**
 * Declarations at test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DeclarationsAtTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new DeclarationsAt();

        $this->assertNull($obj->getAdresse());
        $this->assertNull($obj->getCategorie());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCommune());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDeductForfait());
        $this->assertNull($obj->getDtAccouchement());
        $this->assertNull($obj->getDtDebAt());
        $this->assertNull($obj->getDtDebConges());
        $this->assertNull($obj->getDtEmbauche());
        $this->assertNull($obj->getDtFinConges());
        $this->assertNull($obj->getDtFinContrat());
        $this->assertNull($obj->getDtFinPreavis());
        $this->assertNull($obj->getEtblNom());
        $this->assertNull($obj->getEtblResponsable());
        $this->assertNull($obj->getEtblSiret());
        $this->assertNull($obj->getEtblSignature());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMemoAccident());
        $this->assertNull($obj->getMemoCorrespondance());
        $this->assertNull($obj->getMotifAt());
        $this->assertNull($obj->getMtSalaireBrut());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumDat());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getSignDate());
        $this->assertNull($obj->getTypeDat());
    }

    /**
     * Tests the setAdresse() method.
     *
     * @return void
     */
    public function testSetAdresse() {

        $obj = new DeclarationsAt();

        $obj->setAdresse("adresse");
        $this->assertEquals("adresse", $obj->getAdresse());
    }

    /**
     * Tests the setCategorie() method.
     *
     * @return void
     */
    public function testSetCategorie() {

        $obj = new DeclarationsAt();

        $obj->setCategorie("categorie");
        $this->assertEquals("categorie", $obj->getCategorie());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new DeclarationsAt();

        $obj->setCodeEtablissement("codeEtablissement");
        $this->assertEquals("codeEtablissement", $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new DeclarationsAt();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCommune() method.
     *
     * @return void
     */
    public function testSetCommune() {

        $obj = new DeclarationsAt();

        $obj->setCommune("commune");
        $this->assertEquals("commune", $obj->getCommune());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new DeclarationsAt();

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

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Tests the setDeductForfait() method.
     *
     * @return void
     */
    public function testSetDeductForfait() {

        $obj = new DeclarationsAt();

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

        // Set a Date/time mock.
        $dtAccouchement = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtAccouchement($dtAccouchement);
        $this->assertSame($dtAccouchement, $obj->getDtAccouchement());
    }

    /**
     * Tests the setDtDebAt() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebAt() {

        // Set a Date/time mock.
        $dtDebAt = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtDebAt($dtDebAt);
        $this->assertSame($dtDebAt, $obj->getDtDebAt());
    }

    /**
     * Tests the setDtDebConges() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebConges() {

        // Set a Date/time mock.
        $dtDebConges = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtDebConges($dtDebConges);
        $this->assertSame($dtDebConges, $obj->getDtDebConges());
    }

    /**
     * Tests the setDtEmbauche() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtEmbauche() {

        // Set a Date/time mock.
        $dtEmbauche = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtEmbauche($dtEmbauche);
        $this->assertSame($dtEmbauche, $obj->getDtEmbauche());
    }

    /**
     * Tests the setDtFinConges() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinConges() {

        // Set a Date/time mock.
        $dtFinConges = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtFinConges($dtFinConges);
        $this->assertSame($dtFinConges, $obj->getDtFinConges());
    }

    /**
     * Tests the setDtFinContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinContrat() {

        // Set a Date/time mock.
        $dtFinContrat = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtFinContrat($dtFinContrat);
        $this->assertSame($dtFinContrat, $obj->getDtFinContrat());
    }

    /**
     * Tests the setDtFinPreavis() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPreavis() {

        // Set a Date/time mock.
        $dtFinPreavis = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtFinPreavis($dtFinPreavis);
        $this->assertSame($dtFinPreavis, $obj->getDtFinPreavis());
    }

    /**
     * Tests the setEtblNom() method.
     *
     * @return void
     */
    public function testSetEtblNom() {

        $obj = new DeclarationsAt();

        $obj->setEtblNom("etblNom");
        $this->assertEquals("etblNom", $obj->getEtblNom());
    }

    /**
     * Tests the setEtblResponsable() method.
     *
     * @return void
     */
    public function testSetEtblResponsable() {

        $obj = new DeclarationsAt();

        $obj->setEtblResponsable("etblResponsable");
        $this->assertEquals("etblResponsable", $obj->getEtblResponsable());
    }

    /**
     * Tests the setEtblSignature() method.
     *
     * @return void
     */
    public function testSetEtblSignature() {

        $obj = new DeclarationsAt();

        $obj->setEtblSignature("etblSignature");
        $this->assertEquals("etblSignature", $obj->getEtblSignature());
    }

    /**
     * Tests the setEtblSiret() method.
     *
     * @return void
     */
    public function testSetEtblSiret() {

        $obj = new DeclarationsAt();

        $obj->setEtblSiret("etblSiret");
        $this->assertEquals("etblSiret", $obj->getEtblSiret());
    }

    /**
     * Tests the setEtblTel() method.
     *
     * @return void
     */
    public function testSetEtblTel() {

        $obj = new DeclarationsAt();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new DeclarationsAt();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setMemoAccident() method.
     *
     * @return void
     */
    public function testSetMemoAccident() {

        $obj = new DeclarationsAt();

        $obj->setMemoAccident("memoAccident");
        $this->assertEquals("memoAccident", $obj->getMemoAccident());
    }

    /**
     * Tests the setMemoCorrespondance() method.
     *
     * @return void
     */
    public function testSetMemoCorrespondance() {

        $obj = new DeclarationsAt();

        $obj->setMemoCorrespondance("memoCorrespondance");
        $this->assertEquals("memoCorrespondance", $obj->getMemoCorrespondance());
    }

    /**
     * Tests the setMotifAt() method.
     *
     * @return void
     */
    public function testSetMotifAt() {

        $obj = new DeclarationsAt();

        $obj->setMotifAt("motifAt");
        $this->assertEquals("motifAt", $obj->getMotifAt());
    }

    /**
     * Tests the setMtSalaireBrut() method.
     *
     * @return void
     */
    public function testSetMtSalaireBrut() {

        $obj = new DeclarationsAt();

        $obj->setMtSalaireBrut(10);
        $this->assertEquals(10, $obj->getMtSalaireBrut());
    }

    /**
     * Tests the setNir() method.
     *
     * @return void
     */
    public function testSetNir() {

        $obj = new DeclarationsAt();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom() {

        $obj = new DeclarationsAt();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNumDat() method.
     *
     * @return void
     */
    public function testSetNumDat() {

        $obj = new DeclarationsAt();

        $obj->setNumDat("numDat");
        $this->assertEquals("numDat", $obj->getNumDat());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new DeclarationsAt();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new DeclarationsAt();

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

        // Set a Date/time mock.
        $signDate = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setSignDate($signDate);
        $this->assertSame($signDate, $obj->getSignDate());
    }

    /**
     * Tests the setTypeDat() method.
     *
     * @return void
     */
    public function testSetTypeDat() {

        $obj = new DeclarationsAt();

        $obj->setTypeDat("typeDat");
        $this->assertEquals("typeDat", $obj->getTypeDat());
    }
}
