<?php

declare(strict_types = 1);

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
use Throwable;
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
     * Test setAdresse()
     *
     * @return void
     */
    public function testSetAdresse(): void {

        $obj = new DeclarationsAt();

        $obj->setAdresse("adresse");
        $this->assertEquals("adresse", $obj->getAdresse());
    }

    /**
     * Test setCategorie()
     *
     * @return void
     */
    public function testSetCategorie(): void {

        $obj = new DeclarationsAt();

        $obj->setCategorie("categorie");
        $this->assertEquals("categorie", $obj->getCategorie());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new DeclarationsAt();

        $obj->setCodeEtablissement("codeEtablissement");
        $this->assertEquals("codeEtablissement", $obj->getCodeEtablissement());
    }

    /**
     * Test setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new DeclarationsAt();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Test setCommune()
     *
     * @return void
     */
    public function testSetCommune(): void {

        $obj = new DeclarationsAt();

        $obj->setCommune("commune");
        $this->assertEquals("commune", $obj->getCommune());
    }

    /**
     * Test setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new DeclarationsAt();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Test setDateNaissance()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateNaissance(): void {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Test setDeductForfait()
     *
     * @return void
     */
    public function testSetDeductForfait(): void {

        $obj = new DeclarationsAt();

        $obj->setDeductForfait(10);
        $this->assertEquals(10, $obj->getDeductForfait());
    }

    /**
     * Test setDtAccouchement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtAccouchement(): void {

        // Set a Date/time mock.
        $dtAccouchement = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtAccouchement($dtAccouchement);
        $this->assertSame($dtAccouchement, $obj->getDtAccouchement());
    }

    /**
     * Test setDtDebAt()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtDebAt(): void {

        // Set a Date/time mock.
        $dtDebAt = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtDebAt($dtDebAt);
        $this->assertSame($dtDebAt, $obj->getDtDebAt());
    }

    /**
     * Test setDtDebConges()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtDebConges(): void {

        // Set a Date/time mock.
        $dtDebConges = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtDebConges($dtDebConges);
        $this->assertSame($dtDebConges, $obj->getDtDebConges());
    }

    /**
     * Test setDtEmbauche()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtEmbauche(): void {

        // Set a Date/time mock.
        $dtEmbauche = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtEmbauche($dtEmbauche);
        $this->assertSame($dtEmbauche, $obj->getDtEmbauche());
    }

    /**
     * Test setDtFinConges()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtFinConges(): void {

        // Set a Date/time mock.
        $dtFinConges = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtFinConges($dtFinConges);
        $this->assertSame($dtFinConges, $obj->getDtFinConges());
    }

    /**
     * Test setDtFinContrat()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtFinContrat(): void {

        // Set a Date/time mock.
        $dtFinContrat = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtFinContrat($dtFinContrat);
        $this->assertSame($dtFinContrat, $obj->getDtFinContrat());
    }

    /**
     * Test setDtFinPreavis()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtFinPreavis(): void {

        // Set a Date/time mock.
        $dtFinPreavis = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setDtFinPreavis($dtFinPreavis);
        $this->assertSame($dtFinPreavis, $obj->getDtFinPreavis());
    }

    /**
     * Test setEtblNom()
     *
     * @return void
     */
    public function testSetEtblNom(): void {

        $obj = new DeclarationsAt();

        $obj->setEtblNom("etblNom");
        $this->assertEquals("etblNom", $obj->getEtblNom());
    }

    /**
     * Test setEtblResponsable()
     *
     * @return void
     */
    public function testSetEtblResponsable(): void {

        $obj = new DeclarationsAt();

        $obj->setEtblResponsable("etblResponsable");
        $this->assertEquals("etblResponsable", $obj->getEtblResponsable());
    }

    /**
     * Test setEtblSignature()
     *
     * @return void
     */
    public function testSetEtblSignature(): void {

        $obj = new DeclarationsAt();

        $obj->setEtblSignature("etblSignature");
        $this->assertEquals("etblSignature", $obj->getEtblSignature());
    }

    /**
     * Test setEtblSiret()
     *
     * @return void
     */
    public function testSetEtblSiret(): void {

        $obj = new DeclarationsAt();

        $obj->setEtblSiret("etblSiret");
        $this->assertEquals("etblSiret", $obj->getEtblSiret());
    }

    /**
     * Test setEtblTel()
     *
     * @return void
     */
    public function testSetEtblTel(): void {

        $obj = new DeclarationsAt();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Test setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new DeclarationsAt();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Test setMemoAccident()
     *
     * @return void
     */
    public function testSetMemoAccident(): void {

        $obj = new DeclarationsAt();

        $obj->setMemoAccident("memoAccident");
        $this->assertEquals("memoAccident", $obj->getMemoAccident());
    }

    /**
     * Test setMemoCorrespondance()
     *
     * @return void
     */
    public function testSetMemoCorrespondance(): void {

        $obj = new DeclarationsAt();

        $obj->setMemoCorrespondance("memoCorrespondance");
        $this->assertEquals("memoCorrespondance", $obj->getMemoCorrespondance());
    }

    /**
     * Test setMotifAt()
     *
     * @return void
     */
    public function testSetMotifAt(): void {

        $obj = new DeclarationsAt();

        $obj->setMotifAt("motifAt");
        $this->assertEquals("motifAt", $obj->getMotifAt());
    }

    /**
     * Test setMtSalaireBrut()
     *
     * @return void
     */
    public function testSetMtSalaireBrut(): void {

        $obj = new DeclarationsAt();

        $obj->setMtSalaireBrut(10);
        $this->assertEquals(10, $obj->getMtSalaireBrut());
    }

    /**
     * Test setNir()
     *
     * @return void
     */
    public function testSetNir(): void {

        $obj = new DeclarationsAt();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Test setNom()
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new DeclarationsAt();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Test setNumDat()
     *
     * @return void
     */
    public function testSetNumDat(): void {

        $obj = new DeclarationsAt();

        $obj->setNumDat("numDat");
        $this->assertEquals("numDat", $obj->getNumDat());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new DeclarationsAt();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new DeclarationsAt();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Test setSignDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSignDate(): void {

        // Set a Date/time mock.
        $signDate = new DateTime("2018-09-10");

        $obj = new DeclarationsAt();

        $obj->setSignDate($signDate);
        $this->assertSame($signDate, $obj->getSignDate());
    }

    /**
     * Test setTypeDat()
     *
     * @return void
     */
    public function testSetTypeDat(): void {

        $obj = new DeclarationsAt();

        $obj->setTypeDat("typeDat");
        $this->assertEquals("typeDat", $obj->getTypeDat());
    }

    /**
     * Test __construct()
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
