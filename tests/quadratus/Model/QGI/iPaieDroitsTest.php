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

use WBW\Library\Quadratus\Model\QGI\iPaieDroits;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * i paie droits test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class iPaieDroitsTest extends AbstractTestCase {

    /**
     * Tests setCodeCollabMessages()
     *
     * @return void
     */
    public function testSetCodeCollabMessages(): void {

        $obj = new iPaieDroits();

        $obj->setCodeCollabMessages("codeCollabMessages");
        $this->assertEquals("codeCollabMessages", $obj->getCodeCollabMessages());
    }

    /**
     * Tests setCodeUser()
     *
     * @return void
     */
    public function testSetCodeUser(): void {

        $obj = new iPaieDroits();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests setEspaceClient()
     *
     * @return void
     */
    public function testSetEspaceClient(): void {

        $obj = new iPaieDroits();

        $obj->setEspaceClient(true);
        $this->assertTrue($obj->getEspaceClient());
    }

    /**
     * Tests setFctAbsencesCp()
     *
     * @return void
     */
    public function testSetFctAbsencesCp(): void {

        $obj = new iPaieDroits();

        $obj->setFctAbsencesCp(true);
        $this->assertTrue($obj->getFctAbsencesCp());
    }

    /**
     * Tests setFctAcomptes()
     *
     * @return void
     */
    public function testSetFctAcomptes(): void {

        $obj = new iPaieDroits();

        $obj->setFctAcomptes(true);
        $this->assertTrue($obj->getFctAcomptes());
    }

    /**
     * Tests setFctArchives()
     *
     * @return void
     */
    public function testSetFctArchives(): void {

        $obj = new iPaieDroits();

        $obj->setFctArchives(true);
        $this->assertTrue($obj->getFctArchives());
    }

    /**
     * Tests setFctBulletins()
     *
     * @return void
     */
    public function testSetFctBulletins(): void {

        $obj = new iPaieDroits();

        $obj->setFctBulletins(true);
        $this->assertTrue($obj->getFctBulletins());
    }

    /**
     * Tests setFctDocuments()
     *
     * @return void
     */
    public function testSetFctDocuments(): void {

        $obj = new iPaieDroits();

        $obj->setFctDocuments(true);
        $this->assertTrue($obj->getFctDocuments());
    }

    /**
     * Tests setFctDonneesV()
     *
     * @return void
     */
    public function testSetFctDonneesV(): void {

        $obj = new iPaieDroits();

        $obj->setFctDonneesV(true);
        $this->assertTrue($obj->getFctDonneesV());
    }

    /**
     * Tests setFctEtatCivil()
     *
     * @return void
     */
    public function testSetFctEtatCivil(): void {

        $obj = new iPaieDroits();

        $obj->setFctEtatCivil(true);
        $this->assertTrue($obj->getFctEtatCivil());
    }

    /**
     * Tests setFctModifAbsencesCp()
     *
     * @return void
     */
    public function testSetFctModifAbsencesCp(): void {

        $obj = new iPaieDroits();

        $obj->setFctModifAbsencesCp(true);
        $this->assertTrue($obj->getFctModifAbsencesCp());
    }

    /**
     * Tests setFctModifAcomptes()
     *
     * @return void
     */
    public function testSetFctModifAcomptes(): void {

        $obj = new iPaieDroits();

        $obj->setFctModifAcomptes(true);
        $this->assertTrue($obj->getFctModifAcomptes());
    }

    /**
     * Tests setFctModifArchives()
     *
     * @return void
     */
    public function testSetFctModifArchives(): void {

        $obj = new iPaieDroits();

        $obj->setFctModifArchives(true);
        $this->assertTrue($obj->getFctModifArchives());
    }

    /**
     * Tests setFctModifBulletins()
     *
     * @return void
     */
    public function testSetFctModifBulletins(): void {

        $obj = new iPaieDroits();

        $obj->setFctModifBulletins(true);
        $this->assertTrue($obj->getFctModifBulletins());
    }

    /**
     * Tests setFctModifDocuments()
     *
     * @return void
     */
    public function testSetFctModifDocuments(): void {

        $obj = new iPaieDroits();

        $obj->setFctModifDocuments(true);
        $this->assertTrue($obj->getFctModifDocuments());
    }

    /**
     * Tests setFctModifDonneesV()
     *
     * @return void
     */
    public function testSetFctModifDonneesV(): void {

        $obj = new iPaieDroits();

        $obj->setFctModifDonneesV(true);
        $this->assertTrue($obj->getFctModifDonneesV());
    }

    /**
     * Tests setFctModifEtatCivil()
     *
     * @return void
     */
    public function testSetFctModifEtatCivil(): void {

        $obj = new iPaieDroits();

        $obj->setFctModifEtatCivil(true);
        $this->assertTrue($obj->getFctModifEtatCivil());
    }

    /**
     * Tests setFlag()
     *
     * @return void
     */
    public function testSetFlag(): void {

        $obj = new iPaieDroits();

        $obj->setFlag("flag");
        $this->assertEquals("flag", $obj->getFlag());
    }

    /**
     * Tests setNiveauConf()
     *
     * @return void
     */
    public function testSetNiveauConf(): void {

        $obj = new iPaieDroits();

        $obj->setNiveauConf("niveauConf");
        $this->assertEquals("niveauConf", $obj->getNiveauConf());
    }

    /**
     * Tests setNoDossPaie()
     *
     * @return void
     */
    public function testSetNoDossPaie(): void {

        $obj = new iPaieDroits();

        $obj->setNoDossPaie("noDossPaie");
        $this->assertEquals("noDossPaie", $obj->getNoDossPaie());
    }

    /**
     * Tests setNomUser()
     *
     * @return void
     */
    public function testSetNomUser(): void {

        $obj = new iPaieDroits();

        $obj->setNomUser("nomUser");
        $this->assertEquals("nomUser", $obj->getNomUser());
    }

    /**
     * Tests setNumiKey()
     *
     * @return void
     */
    public function testSetNumiKey(): void {

        $obj = new iPaieDroits();

        $obj->setNumiKey("numiKey");
        $this->assertEquals("numiKey", $obj->getNumiKey());
    }

    /**
     * Tests setPassword()
     *
     * @return void
     */
    public function testSetPassword(): void {

        $obj = new iPaieDroits();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Tests setUserExpert()
     *
     * @return void
     */
    public function testSetUserExpert(): void {

        $obj = new iPaieDroits();

        $obj->setUserExpert(true);
        $this->assertTrue($obj->getUserExpert());
    }

    /**
     * Tests setVisuSalaires()
     *
     * @return void
     */
    public function testSetVisuSalaires(): void {

        $obj = new iPaieDroits();

        $obj->setVisuSalaires(true);
        $this->assertTrue($obj->getVisuSalaires());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new iPaieDroits();

        $this->assertNull($obj->getCodeCollabMessages());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getEspaceClient());
        $this->assertNull($obj->getFctAbsencesCp());
        $this->assertNull($obj->getFctAcomptes());
        $this->assertNull($obj->getFctArchives());
        $this->assertNull($obj->getFctBulletins());
        $this->assertNull($obj->getFctDocuments());
        $this->assertNull($obj->getFctDonneesV());
        $this->assertNull($obj->getFctEtatCivil());
        $this->assertNull($obj->getFctModifAbsencesCp());
        $this->assertNull($obj->getFctModifAcomptes());
        $this->assertNull($obj->getFctModifArchives());
        $this->assertNull($obj->getFctModifBulletins());
        $this->assertNull($obj->getFctModifDocuments());
        $this->assertNull($obj->getFctModifDonneesV());
        $this->assertNull($obj->getFctModifEtatCivil());
        $this->assertNull($obj->getFlag());
        $this->assertNull($obj->getNiveauConf());
        $this->assertNull($obj->getNoDossPaie());
        $this->assertNull($obj->getNomUser());
        $this->assertNull($obj->getNumiKey());
        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getUserExpert());
        $this->assertNull($obj->getVisuSalaires());
    }
}
