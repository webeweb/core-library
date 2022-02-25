<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\ActionsCoManif;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Actions co manif test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ActionsCoManifTest extends AbstractTestCase {

    /**
     * Tests setCodeAction()
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new ActionsCoManif();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests setCodeManif()
     *
     * @return void
     */
    public function testSetCodeManif(): void {

        $obj = new ActionsCoManif();

        $obj->setCodeManif("codeManif");
        $this->assertEquals("codeManif", $obj->getCodeManif());
    }

    /**
     * Tests setContact()
     *
     * @return void
     */
    public function testSetContact(): void {

        $obj = new ActionsCoManif();

        $obj->setContact("contact");
        $this->assertEquals("contact", $obj->getContact());
    }

    /**
     * Tests setDateDeb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDeb(): void {

        // Set a Date/time mock.
        $dateDeb = new DateTime("2018-09-10");

        $obj = new ActionsCoManif();

        $obj->setDateDeb($dateDeb);
        $this->assertSame($dateDeb, $obj->getDateDeb());
    }

    /**
     * Tests setDateFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new ActionsCoManif();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests setDuree()
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new ActionsCoManif();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Tests setDureeDbl()
     *
     * @return void
     */
    public function testSetDureeDbl(): void {

        $obj = new ActionsCoManif();

        $obj->setDureeDbl(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeDbl());
    }

    /**
     * Tests setIndiceAff()
     *
     * @return void
     */
    public function testSetIndiceAff(): void {

        $obj = new ActionsCoManif();

        $obj->setIndiceAff(10);
        $this->assertEquals(10, $obj->getIndiceAff());
    }

    /**
     * Tests setIsMontantHt()
     *
     * @return void
     */
    public function testSetIsMontantHt(): void {

        $obj = new ActionsCoManif();

        $obj->setIsMontantHt(true);
        $this->assertEquals(true, $obj->getIsMontantHt());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ActionsCoManif();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLibelleMemo()
     *
     * @return void
     */
    public function testSetLibelleMemo(): void {

        $obj = new ActionsCoManif();

        $obj->setLibelleMemo("libelleMemo");
        $this->assertEquals("libelleMemo", $obj->getLibelleMemo());
    }

    /**
     * Tests setLieuBtq()
     *
     * @return void
     */
    public function testSetLieuBtq(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuBtq("lieuBtq");
        $this->assertEquals("lieuBtq", $obj->getLieuBtq());
    }

    /**
     * Tests setLieuBureauDistributeur()
     *
     * @return void
     */
    public function testSetLieuBureauDistributeur(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuBureauDistributeur("lieuBureauDistributeur");
        $this->assertEquals("lieuBureauDistributeur", $obj->getLieuBureauDistributeur());
    }

    /**
     * Tests setLieuCodePostal()
     *
     * @return void
     */
    public function testSetLieuCodePostal(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuCodePostal("lieuCodePostal");
        $this->assertEquals("lieuCodePostal", $obj->getLieuCodePostal());
    }

    /**
     * Tests setLieuComplement()
     *
     * @return void
     */
    public function testSetLieuComplement(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuComplement("lieuComplement");
        $this->assertEquals("lieuComplement", $obj->getLieuComplement());
    }

    /**
     * Tests setLieuEmail()
     *
     * @return void
     */
    public function testSetLieuEmail(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuEmail("lieuEmail");
        $this->assertEquals("lieuEmail", $obj->getLieuEmail());
    }

    /**
     * Tests setLieuFax()
     *
     * @return void
     */
    public function testSetLieuFax(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuFax("lieuFax");
        $this->assertEquals("lieuFax", $obj->getLieuFax());
    }

    /**
     * Tests setLieuNom()
     *
     * @return void
     */
    public function testSetLieuNom(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuNom("lieuNom");
        $this->assertEquals("lieuNom", $obj->getLieuNom());
    }

    /**
     * Tests setLieuNomVoie()
     *
     * @return void
     */
    public function testSetLieuNomVoie(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuNomVoie("lieuNomVoie");
        $this->assertEquals("lieuNomVoie", $obj->getLieuNomVoie());
    }

    /**
     * Tests setLieuNumVoie()
     *
     * @return void
     */
    public function testSetLieuNumVoie(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuNumVoie("lieuNumVoie");
        $this->assertEquals("lieuNumVoie", $obj->getLieuNumVoie());
    }

    /**
     * Tests setLieuPj()
     *
     * @return void
     */
    public function testSetLieuPj(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuPj("lieuPj");
        $this->assertEquals("lieuPj", $obj->getLieuPj());
    }

    /**
     * Tests setLieuTel()
     *
     * @return void
     */
    public function testSetLieuTel(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuTel("lieuTel");
        $this->assertEquals("lieuTel", $obj->getLieuTel());
    }

    /**
     * Tests setMontantCheque()
     *
     * @return void
     */
    public function testSetMontantCheque(): void {

        $obj = new ActionsCoManif();

        $obj->setMontantCheque(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCheque());
    }

    /**
     * Tests setNbSeances()
     *
     * @return void
     */
    public function testSetNbSeances(): void {

        $obj = new ActionsCoManif();

        $obj->setNbSeances(10);
        $this->assertEquals(10, $obj->getNbSeances());
    }

    /**
     * Tests setNomFormateur()
     *
     * @return void
     */
    public function testSetNomFormateur(): void {

        $obj = new ActionsCoManif();

        $obj->setNomFormateur("nomFormateur");
        $this->assertEquals("nomFormateur", $obj->getNomFormateur());
    }

    /**
     * Tests setTypeFormation()
     *
     * @return void
     */
    public function testSetTypeFormation(): void {

        $obj = new ActionsCoManif();

        $obj->setTypeFormation(true);
        $this->assertEquals(true, $obj->getTypeFormation());
    }

    /**
     * Tests setYaFeuillePresence()
     *
     * @return void
     */
    public function testSetYaFeuillePresence(): void {

        $obj = new ActionsCoManif();

        $obj->setYaFeuillePresence(true);
        $this->assertEquals(true, $obj->getYaFeuillePresence());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ActionsCoManif();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeManif());
        $this->assertNull($obj->getContact());
        $this->assertNull($obj->getDateDeb());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getDureeDbl());
        $this->assertNull($obj->getIndiceAff());
        $this->assertNull($obj->getIsMontantHt());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleMemo());
        $this->assertNull($obj->getLieuBtq());
        $this->assertNull($obj->getLieuBureauDistributeur());
        $this->assertNull($obj->getLieuCodePostal());
        $this->assertNull($obj->getLieuComplement());
        $this->assertNull($obj->getLieuEmail());
        $this->assertNull($obj->getLieuFax());
        $this->assertNull($obj->getLieuNom());
        $this->assertNull($obj->getLieuNomVoie());
        $this->assertNull($obj->getLieuNumVoie());
        $this->assertNull($obj->getLieuPj());
        $this->assertNull($obj->getLieuTel());
        $this->assertNull($obj->getMontantCheque());
        $this->assertNull($obj->getNbSeances());
        $this->assertNull($obj->getNomFormateur());
        $this->assertNull($obj->getTypeFormation());
        $this->assertNull($obj->getYaFeuillePresence());
    }
}
