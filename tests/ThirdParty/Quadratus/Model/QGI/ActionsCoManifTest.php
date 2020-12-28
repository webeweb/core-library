<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ActionsCoManif;

/**
 * Actions co manif test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoManifTest extends AbstractTestCase {

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new ActionsCoManif();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeManif() method.
     *
     * @return void
     */
    public function testSetCodeManif(): void {

        $obj = new ActionsCoManif();

        $obj->setCodeManif("codeManif");
        $this->assertEquals("codeManif", $obj->getCodeManif());
    }

    /**
     * Tests the setContact() method.
     *
     * @return void
     */
    public function testSetContact(): void {

        $obj = new ActionsCoManif();

        $obj->setContact("contact");
        $this->assertEquals("contact", $obj->getContact());
    }

    /**
     * Tests the setDateDeb() method.
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
     * Tests the setDateFin() method.
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
     * Tests the setDuree() method.
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new ActionsCoManif();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Tests the setDureeDbl() method.
     *
     * @return void
     */
    public function testSetDureeDbl(): void {

        $obj = new ActionsCoManif();

        $obj->setDureeDbl(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeDbl());
    }

    /**
     * Tests the setIndiceAff() method.
     *
     * @return void
     */
    public function testSetIndiceAff(): void {

        $obj = new ActionsCoManif();

        $obj->setIndiceAff(10);
        $this->assertEquals(10, $obj->getIndiceAff());
    }

    /**
     * Tests the setIsMontantHt() method.
     *
     * @return void
     */
    public function testSetIsMontantHt(): void {

        $obj = new ActionsCoManif();

        $obj->setIsMontantHt(true);
        $this->assertEquals(true, $obj->getIsMontantHt());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ActionsCoManif();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelleMemo() method.
     *
     * @return void
     */
    public function testSetLibelleMemo(): void {

        $obj = new ActionsCoManif();

        $obj->setLibelleMemo("libelleMemo");
        $this->assertEquals("libelleMemo", $obj->getLibelleMemo());
    }

    /**
     * Tests the setLieuBtq() method.
     *
     * @return void
     */
    public function testSetLieuBtq(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuBtq("lieuBtq");
        $this->assertEquals("lieuBtq", $obj->getLieuBtq());
    }

    /**
     * Tests the setLieuBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetLieuBureauDistributeur(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuBureauDistributeur("lieuBureauDistributeur");
        $this->assertEquals("lieuBureauDistributeur", $obj->getLieuBureauDistributeur());
    }

    /**
     * Tests the setLieuCodePostal() method.
     *
     * @return void
     */
    public function testSetLieuCodePostal(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuCodePostal("lieuCodePostal");
        $this->assertEquals("lieuCodePostal", $obj->getLieuCodePostal());
    }

    /**
     * Tests the setLieuComplement() method.
     *
     * @return void
     */
    public function testSetLieuComplement(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuComplement("lieuComplement");
        $this->assertEquals("lieuComplement", $obj->getLieuComplement());
    }

    /**
     * Tests the setLieuEmail() method.
     *
     * @return void
     */
    public function testSetLieuEmail(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuEmail("lieuEmail");
        $this->assertEquals("lieuEmail", $obj->getLieuEmail());
    }

    /**
     * Tests the setLieuFax() method.
     *
     * @return void
     */
    public function testSetLieuFax(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuFax("lieuFax");
        $this->assertEquals("lieuFax", $obj->getLieuFax());
    }

    /**
     * Tests the setLieuNom() method.
     *
     * @return void
     */
    public function testSetLieuNom(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuNom("lieuNom");
        $this->assertEquals("lieuNom", $obj->getLieuNom());
    }

    /**
     * Tests the setLieuNomVoie() method.
     *
     * @return void
     */
    public function testSetLieuNomVoie(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuNomVoie("lieuNomVoie");
        $this->assertEquals("lieuNomVoie", $obj->getLieuNomVoie());
    }

    /**
     * Tests the setLieuNumVoie() method.
     *
     * @return void
     */
    public function testSetLieuNumVoie(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuNumVoie("lieuNumVoie");
        $this->assertEquals("lieuNumVoie", $obj->getLieuNumVoie());
    }

    /**
     * Tests the setLieuPj() method.
     *
     * @return void
     */
    public function testSetLieuPj(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuPj("lieuPj");
        $this->assertEquals("lieuPj", $obj->getLieuPj());
    }

    /**
     * Tests the setLieuTel() method.
     *
     * @return void
     */
    public function testSetLieuTel(): void {

        $obj = new ActionsCoManif();

        $obj->setLieuTel("lieuTel");
        $this->assertEquals("lieuTel", $obj->getLieuTel());
    }

    /**
     * Tests the setMontantCheque() method.
     *
     * @return void
     */
    public function testSetMontantCheque(): void {

        $obj = new ActionsCoManif();

        $obj->setMontantCheque(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCheque());
    }

    /**
     * Tests the setNbSeances() method.
     *
     * @return void
     */
    public function testSetNbSeances(): void {

        $obj = new ActionsCoManif();

        $obj->setNbSeances(10);
        $this->assertEquals(10, $obj->getNbSeances());
    }

    /**
     * Tests the setNomFormateur() method.
     *
     * @return void
     */
    public function testSetNomFormateur(): void {

        $obj = new ActionsCoManif();

        $obj->setNomFormateur("nomFormateur");
        $this->assertEquals("nomFormateur", $obj->getNomFormateur());
    }

    /**
     * Tests the setTypeFormation() method.
     *
     * @return void
     */
    public function testSetTypeFormation(): void {

        $obj = new ActionsCoManif();

        $obj->setTypeFormation(true);
        $this->assertEquals(true, $obj->getTypeFormation());
    }

    /**
     * Tests the setYaFeuillePresence() method.
     *
     * @return void
     */
    public function testSetYaFeuillePresence(): void {

        $obj = new ActionsCoManif();

        $obj->setYaFeuillePresence(true);
        $this->assertEquals(true, $obj->getYaFeuillePresence());
    }

    /**
     * Tests the __construct() method.
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
