<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\DeclarationsAt;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Declarations at test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DeclarationsAtTest extends AbstractTestCase {

    /**
     * Tests setAdresse()
     *
     * @return void
     */
    public function testSetAdresse(): void {

        $obj = new DeclarationsAt();

        $obj->setAdresse("adresse");
        $this->assertEquals("adresse", $obj->getAdresse());
    }

    /**
     * Tests setCategorie()
     *
     * @return void
     */
    public function testSetCategorie(): void {

        $obj = new DeclarationsAt();

        $obj->setCategorie("categorie");
        $this->assertEquals("categorie", $obj->getCategorie());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new DeclarationsAt();

        $obj->setCodeEtablissement("codeEtablissement");
        $this->assertEquals("codeEtablissement", $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new DeclarationsAt();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests setCommune()
     *
     * @return void
     */
    public function testSetCommune(): void {

        $obj = new DeclarationsAt();

        $obj->setCommune("commune");
        $this->assertEquals("commune", $obj->getCommune());
    }

    /**
     * Tests setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new DeclarationsAt();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests setDateNaissance()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissance(): void {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Tests setDeductForfait()
     *
     * @return void
     */
    public function testSetDeductForfait(): void {

        $obj = new DeclarationsAt();

        $obj->setDeductForfait(10);
        $this->assertEquals(10, $obj->getDeductForfait());
    }

    /**
     * Tests setDtAccouchement()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtAccouchement(): void {

        // Set a Date/time mock.
        $dtAccouchement = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtAccouchement($dtAccouchement);
        $this->assertSame($dtAccouchement, $obj->getDtAccouchement());
    }

    /**
     * Tests setDtDebAt()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebAt(): void {

        // Set a Date/time mock.
        $dtDebAt = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtDebAt($dtDebAt);
        $this->assertSame($dtDebAt, $obj->getDtDebAt());
    }

    /**
     * Tests setDtDebConges()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebConges(): void {

        // Set a Date/time mock.
        $dtDebConges = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtDebConges($dtDebConges);
        $this->assertSame($dtDebConges, $obj->getDtDebConges());
    }

    /**
     * Tests setDtEmbauche()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtEmbauche(): void {

        // Set a Date/time mock.
        $dtEmbauche = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtEmbauche($dtEmbauche);
        $this->assertSame($dtEmbauche, $obj->getDtEmbauche());
    }

    /**
     * Tests setDtFinConges()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinConges(): void {

        // Set a Date/time mock.
        $dtFinConges = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtFinConges($dtFinConges);
        $this->assertSame($dtFinConges, $obj->getDtFinConges());
    }

    /**
     * Tests setDtFinContrat()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinContrat(): void {

        // Set a Date/time mock.
        $dtFinContrat = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtFinContrat($dtFinContrat);
        $this->assertSame($dtFinContrat, $obj->getDtFinContrat());
    }

    /**
     * Tests setDtFinPreavis()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPreavis(): void {

        // Set a Date/time mock.
        $dtFinPreavis = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtFinPreavis($dtFinPreavis);
        $this->assertSame($dtFinPreavis, $obj->getDtFinPreavis());
    }

    /**
     * Tests setEtblNom()
     *
     * @return void
     */
    public function testSetEtblNom(): void {

        $obj = new DeclarationsAt();

        $obj->setEtblNom("etblNom");
        $this->assertEquals("etblNom", $obj->getEtblNom());
    }

    /**
     * Tests setEtblResponsable()
     *
     * @return void
     */
    public function testSetEtblResponsable(): void {

        $obj = new DeclarationsAt();

        $obj->setEtblResponsable("etblResponsable");
        $this->assertEquals("etblResponsable", $obj->getEtblResponsable());
    }

    /**
     * Tests setEtblSignature()
     *
     * @return void
     */
    public function testSetEtblSignature(): void {

        $obj = new DeclarationsAt();

        $obj->setEtblSignature("etblSignature");
        $this->assertEquals("etblSignature", $obj->getEtblSignature());
    }

    /**
     * Tests setEtblSiret()
     *
     * @return void
     */
    public function testSetEtblSiret(): void {

        $obj = new DeclarationsAt();

        $obj->setEtblSiret("etblSiret");
        $this->assertEquals("etblSiret", $obj->getEtblSiret());
    }

    /**
     * Tests setEtblTel()
     *
     * @return void
     */
    public function testSetEtblTel(): void {

        $obj = new DeclarationsAt();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new DeclarationsAt();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setMemoAccident()
     *
     * @return void
     */
    public function testSetMemoAccident(): void {

        $obj = new DeclarationsAt();

        $obj->setMemoAccident("memoAccident");
        $this->assertEquals("memoAccident", $obj->getMemoAccident());
    }

    /**
     * Tests setMemoCorrespondance()
     *
     * @return void
     */
    public function testSetMemoCorrespondance(): void {

        $obj = new DeclarationsAt();

        $obj->setMemoCorrespondance("memoCorrespondance");
        $this->assertEquals("memoCorrespondance", $obj->getMemoCorrespondance());
    }

    /**
     * Tests setMotifAt()
     *
     * @return void
     */
    public function testSetMotifAt(): void {

        $obj = new DeclarationsAt();

        $obj->setMotifAt("motifAt");
        $this->assertEquals("motifAt", $obj->getMotifAt());
    }

    /**
     * Tests setMtSalaireBrut()
     *
     * @return void
     */
    public function testSetMtSalaireBrut(): void {

        $obj = new DeclarationsAt();

        $obj->setMtSalaireBrut(10);
        $this->assertEquals(10, $obj->getMtSalaireBrut());
    }

    /**
     * Tests setNir()
     *
     * @return void
     */
    public function testSetNir(): void {

        $obj = new DeclarationsAt();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Tests setNom()
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new DeclarationsAt();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests setNumDat()
     *
     * @return void
     */
    public function testSetNumDat(): void {

        $obj = new DeclarationsAt();

        $obj->setNumDat("numDat");
        $this->assertEquals("numDat", $obj->getNumDat());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new DeclarationsAt();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new DeclarationsAt();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests setSignDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSignDate(): void {

        // Set a Date/time mock.
        $signDate = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setSignDate($signDate);
        $this->assertSame($signDate, $obj->getSignDate());
    }

    /**
     * Tests setTypeDat()
     *
     * @return void
     */
    public function testSetTypeDat(): void {

        $obj = new DeclarationsAt();

        $obj->setTypeDat("typeDat");
        $this->assertEquals("typeDat", $obj->getTypeDat());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
