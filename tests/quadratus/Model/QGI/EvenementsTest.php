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
use WBW\Library\Quadratus\Model\QGI\Evenements;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Evenements test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class EvenementsTest extends AbstractTestCase {

    /**
     * Tests setArchive()
     *
     * @return void
     */
    public function testSetArchive(): void {

        $obj = new Evenements();

        $obj->setArchive(true);
        $this->assertEquals(true, $obj->getArchive());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Evenements();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollab()
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new Evenements();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests setContenu1()
     *
     * @return void
     */
    public function testSetContenu1(): void {

        $obj = new Evenements();

        $obj->setContenu1("contenu1");
        $this->assertEquals("contenu1", $obj->getContenu1());
    }

    /**
     * Tests setContenu2()
     *
     * @return void
     */
    public function testSetContenu2(): void {

        $obj = new Evenements();

        $obj->setContenu2("contenu2");
        $this->assertEquals("contenu2", $obj->getContenu2());
    }

    /**
     * Tests setContenu3()
     *
     * @return void
     */
    public function testSetContenu3(): void {

        $obj = new Evenements();

        $obj->setContenu3("contenu3");
        $this->assertEquals("contenu3", $obj->getContenu3());
    }

    /**
     * Tests setContenu4()
     *
     * @return void
     */
    public function testSetContenu4(): void {

        $obj = new Evenements();

        $obj->setContenu4("contenu4");
        $this->assertEquals("contenu4", $obj->getContenu4());
    }

    /**
     * Tests setDateEvt()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEvt(): void {

        // Set a Date/time mock.
        $dateEvt = new DateTime("2018-09-10");

        $obj = new Evenements();

        $obj->setDateEvt($dateEvt);
        $this->assertSame($dateEvt, $obj->getDateEvt());
    }

    /**
     * Tests setEmplacementFichier()
     *
     * @return void
     */
    public function testSetEmplacementFichier(): void {

        $obj = new Evenements();

        $obj->setEmplacementFichier("emplacementFichier");
        $this->assertEquals("emplacementFichier", $obj->getEmplacementFichier());
    }

    /**
     * Tests setEtatIsActif()
     *
     * @return void
     */
    public function testSetEtatIsActif(): void {

        $obj = new Evenements();

        $obj->setEtatIsActif("etatIsActif");
        $this->assertEquals("etatIsActif", $obj->getEtatIsActif());
    }

    /**
     * Tests setFsCompta()
     *
     * @return void
     */
    public function testSetFsCompta(): void {

        $obj = new Evenements();

        $obj->setFsCompta("fsCompta");
        $this->assertEquals("fsCompta", $obj->getFsCompta());
    }

    /**
     * Tests setFsComptaCollArch()
     *
     * @return void
     */
    public function testSetFsComptaCollArch(): void {

        $obj = new Evenements();

        $obj->setFsComptaCollArch("fsComptaCollArch");
        $this->assertEquals("fsComptaCollArch", $obj->getFsComptaCollArch());
    }

    /**
     * Tests setFsComptaDateAlerte()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFsComptaDateAlerte(): void {

        // Set a Date/time mock.
        $fsComptaDateAlerte = new DateTime("2018-09-10");

        $obj = new Evenements();

        $obj->setFsComptaDateAlerte($fsComptaDateAlerte);
        $this->assertSame($fsComptaDateAlerte, $obj->getFsComptaDateAlerte());
    }

    /**
     * Tests setFsComptaDateArch()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFsComptaDateArch(): void {

        // Set a Date/time mock.
        $fsComptaDateArch = new DateTime("2018-09-10");

        $obj = new Evenements();

        $obj->setFsComptaDateArch($fsComptaDateArch);
        $this->assertSame($fsComptaDateArch, $obj->getFsComptaDateArch());
    }

    /**
     * Tests setFsComptaYaAlerte()
     *
     * @return void
     */
    public function testSetFsComptaYaAlerte(): void {

        $obj = new Evenements();

        $obj->setFsComptaYaAlerte(true);
        $this->assertEquals(true, $obj->getFsComptaYaAlerte());
    }

    /**
     * Tests setFsFiscal()
     *
     * @return void
     */
    public function testSetFsFiscal(): void {

        $obj = new Evenements();

        $obj->setFsFiscal("fsFiscal");
        $this->assertEquals("fsFiscal", $obj->getFsFiscal());
    }

    /**
     * Tests setFsFiscalCollArch()
     *
     * @return void
     */
    public function testSetFsFiscalCollArch(): void {

        $obj = new Evenements();

        $obj->setFsFiscalCollArch("fsFiscalCollArch");
        $this->assertEquals("fsFiscalCollArch", $obj->getFsFiscalCollArch());
    }

    /**
     * Tests setFsFiscalDateArch()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFsFiscalDateArch(): void {

        // Set a Date/time mock.
        $fsFiscalDateArch = new DateTime("2018-09-10");

        $obj = new Evenements();

        $obj->setFsFiscalDateArch($fsFiscalDateArch);
        $this->assertSame($fsFiscalDateArch, $obj->getFsFiscalDateArch());
    }

    /**
     * Tests setFsJuridique()
     *
     * @return void
     */
    public function testSetFsJuridique(): void {

        $obj = new Evenements();

        $obj->setFsJuridique("fsJuridique");
        $this->assertEquals("fsJuridique", $obj->getFsJuridique());
    }

    /**
     * Tests setFsJuridiqueCollArch()
     *
     * @return void
     */
    public function testSetFsJuridiqueCollArch(): void {

        $obj = new Evenements();

        $obj->setFsJuridiqueCollArch("fsJuridiqueCollArch");
        $this->assertEquals("fsJuridiqueCollArch", $obj->getFsJuridiqueCollArch());
    }

    /**
     * Tests setFsJuridiqueDateArch()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFsJuridiqueDateArch(): void {

        // Set a Date/time mock.
        $fsJuridiqueDateArch = new DateTime("2018-09-10");

        $obj = new Evenements();

        $obj->setFsJuridiqueDateArch($fsJuridiqueDateArch);
        $this->assertSame($fsJuridiqueDateArch, $obj->getFsJuridiqueDateArch());
    }

    /**
     * Tests setFsSocial()
     *
     * @return void
     */
    public function testSetFsSocial(): void {

        $obj = new Evenements();

        $obj->setFsSocial("fsSocial");
        $this->assertEquals("fsSocial", $obj->getFsSocial());
    }

    /**
     * Tests setFsSocialCollArch()
     *
     * @return void
     */
    public function testSetFsSocialCollArch(): void {

        $obj = new Evenements();

        $obj->setFsSocialCollArch("fsSocialCollArch");
        $this->assertEquals("fsSocialCollArch", $obj->getFsSocialCollArch());
    }

    /**
     * Tests setFsSocialDateAlerte()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFsSocialDateAlerte(): void {

        // Set a Date/time mock.
        $fsSocialDateAlerte = new DateTime("2018-09-10");

        $obj = new Evenements();

        $obj->setFsSocialDateAlerte($fsSocialDateAlerte);
        $this->assertSame($fsSocialDateAlerte, $obj->getFsSocialDateAlerte());
    }

    /**
     * Tests setFsSocialDateArch()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFsSocialDateArch(): void {

        // Set a Date/time mock.
        $fsSocialDateArch = new DateTime("2018-09-10");

        $obj = new Evenements();

        $obj->setFsSocialDateArch($fsSocialDateArch);
        $this->assertSame($fsSocialDateArch, $obj->getFsSocialDateArch());
    }

    /**
     * Tests setFsSocialYaAlerte()
     *
     * @return void
     */
    public function testSetFsSocialYaAlerte(): void {

        $obj = new Evenements();

        $obj->setFsSocialYaAlerte(true);
        $this->assertEquals(true, $obj->getFsSocialYaAlerte());
    }

    /**
     * Tests setFsgi()
     *
     * @return void
     */
    public function testSetFsgi(): void {

        $obj = new Evenements();

        $obj->setFsgi("fsgi");
        $this->assertEquals("fsgi", $obj->getFsgi());
    }

    /**
     * Tests setFsgiCollArch()
     *
     * @return void
     */
    public function testSetFsgiCollArch(): void {

        $obj = new Evenements();

        $obj->setFsgiCollArch("fsgiCollArch");
        $this->assertEquals("fsgiCollArch", $obj->getFsgiCollArch());
    }

    /**
     * Tests setFsgiDateArch()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFsgiDateArch(): void {

        // Set a Date/time mock.
        $fsgiDateArch = new DateTime("2018-09-10");

        $obj = new Evenements();

        $obj->setFsgiDateArch($fsgiDateArch);
        $this->assertSame($fsgiDateArch, $obj->getFsgiDateArch());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Evenements();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Evenements();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests setQualifiant1()
     *
     * @return void
     */
    public function testSetQualifiant1(): void {

        $obj = new Evenements();

        $obj->setQualifiant1("qualifiant1");
        $this->assertEquals("qualifiant1", $obj->getQualifiant1());
    }

    /**
     * Tests setQualifiant2()
     *
     * @return void
     */
    public function testSetQualifiant2(): void {

        $obj = new Evenements();

        $obj->setQualifiant2("qualifiant2");
        $this->assertEquals("qualifiant2", $obj->getQualifiant2());
    }

    /**
     * Tests setQualifiant3()
     *
     * @return void
     */
    public function testSetQualifiant3(): void {

        $obj = new Evenements();

        $obj->setQualifiant3("qualifiant3");
        $this->assertEquals("qualifiant3", $obj->getQualifiant3());
    }

    /**
     * Tests setRacineCpt()
     *
     * @return void
     */
    public function testSetRacineCpt(): void {

        $obj = new Evenements();

        $obj->setRacineCpt("racineCpt");
        $this->assertEquals("racineCpt", $obj->getRacineCpt());
    }

    /**
     * Tests setRegle()
     *
     * @return void
     */
    public function testSetRegle(): void {

        $obj = new Evenements();

        $obj->setRegle(true);
        $this->assertEquals(true, $obj->getRegle());
    }

    /**
     * Tests setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new Evenements();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests setTypeEvt()
     *
     * @return void
     */
    public function testSetTypeEvt(): void {

        $obj = new Evenements();

        $obj->setTypeEvt("typeEvt");
        $this->assertEquals("typeEvt", $obj->getTypeEvt());
    }

    /**
     * Tests setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new Evenements();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Evenements();

        $this->assertNull($obj->getArchive());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getContenu1());
        $this->assertNull($obj->getContenu2());
        $this->assertNull($obj->getContenu3());
        $this->assertNull($obj->getContenu4());
        $this->assertNull($obj->getDateEvt());
        $this->assertNull($obj->getEmplacementFichier());
        $this->assertNull($obj->getEtatIsActif());
        $this->assertNull($obj->getFsCompta());
        $this->assertNull($obj->getFsComptaDateAlerte());
        $this->assertNull($obj->getFsComptaYaAlerte());
        $this->assertNull($obj->getFsComptaCollArch());
        $this->assertNull($obj->getFsComptaDateArch());
        $this->assertNull($obj->getFsFiscal());
        $this->assertNull($obj->getFsFiscalCollArch());
        $this->assertNull($obj->getFsFiscalDateArch());
        $this->assertNull($obj->getFsgi());
        $this->assertNull($obj->getFsgiCollArch());
        $this->assertNull($obj->getFsgiDateArch());
        $this->assertNull($obj->getFsJuridique());
        $this->assertNull($obj->getFsJuridiqueCollArch());
        $this->assertNull($obj->getFsJuridiqueDateArch());
        $this->assertNull($obj->getFsSocial());
        $this->assertNull($obj->getFsSocialDateAlerte());
        $this->assertNull($obj->getFsSocialYaAlerte());
        $this->assertNull($obj->getFsSocialCollArch());
        $this->assertNull($obj->getFsSocialDateArch());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getQualifiant1());
        $this->assertNull($obj->getQualifiant2());
        $this->assertNull($obj->getQualifiant3());
        $this->assertNull($obj->getRacineCpt());
        $this->assertNull($obj->getRegle());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTypeEvt());
        $this->assertNull($obj->getUniqId());
    }
}
