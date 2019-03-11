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

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iPaieDroits;

/**
 * i paie droits model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iPaieDroitsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iPaieDroits();

        $this->assertNull($obj->getCodeCollabMessages());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getEspaceClient());
        $this->assertNull($obj->getFctAbsencesCP());
        $this->assertNull($obj->getFctAcomptes());
        $this->assertNull($obj->getFctArchives());
        $this->assertNull($obj->getFctBulletins());
        $this->assertNull($obj->getFctDocuments());
        $this->assertNull($obj->getFctDonneesV());
        $this->assertNull($obj->getFctEtatCivil());
        $this->assertNull($obj->getFctModifAbsencesCP());
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

    /**
     * Tests the setCodeCollabMessages() method.
     *
     * @return void
     */
    public function testSetCodeCollabMessages() {

        $obj = new iPaieDroits();

        $obj->setCodeCollabMessages("codeCollabMessages");
        $this->assertEquals("codeCollabMessages", $obj->getCodeCollabMessages());
    }

    /**
     * Tests the setCodeUser() method.
     *
     * @return void
     */
    public function testSetCodeUser() {

        $obj = new iPaieDroits();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests the setEspaceClient() method.
     *
     * @return void
     */
    public function testSetEspaceClient() {

        $obj = new iPaieDroits();

        $obj->setEspaceClient(true);
        $this->assertEquals(true, $obj->getEspaceClient());
    }

    /**
     * Tests the setFctAbsencesCP() method.
     *
     * @return void
     */
    public function testSetFctAbsencesCP() {

        $obj = new iPaieDroits();

        $obj->setFctAbsencesCP(true);
        $this->assertEquals(true, $obj->getFctAbsencesCP());
    }

    /**
     * Tests the setFctAcomptes() method.
     *
     * @return void
     */
    public function testSetFctAcomptes() {

        $obj = new iPaieDroits();

        $obj->setFctAcomptes(true);
        $this->assertEquals(true, $obj->getFctAcomptes());
    }

    /**
     * Tests the setFctArchives() method.
     *
     * @return void
     */
    public function testSetFctArchives() {

        $obj = new iPaieDroits();

        $obj->setFctArchives(true);
        $this->assertEquals(true, $obj->getFctArchives());
    }

    /**
     * Tests the setFctBulletins() method.
     *
     * @return void
     */
    public function testSetFctBulletins() {

        $obj = new iPaieDroits();

        $obj->setFctBulletins(true);
        $this->assertEquals(true, $obj->getFctBulletins());
    }

    /**
     * Tests the setFctDocuments() method.
     *
     * @return void
     */
    public function testSetFctDocuments() {

        $obj = new iPaieDroits();

        $obj->setFctDocuments(true);
        $this->assertEquals(true, $obj->getFctDocuments());
    }

    /**
     * Tests the setFctDonneesV() method.
     *
     * @return void
     */
    public function testSetFctDonneesV() {

        $obj = new iPaieDroits();

        $obj->setFctDonneesV(true);
        $this->assertEquals(true, $obj->getFctDonneesV());
    }

    /**
     * Tests the setFctEtatCivil() method.
     *
     * @return void
     */
    public function testSetFctEtatCivil() {

        $obj = new iPaieDroits();

        $obj->setFctEtatCivil(true);
        $this->assertEquals(true, $obj->getFctEtatCivil());
    }

    /**
     * Tests the setFctModifAbsencesCP() method.
     *
     * @return void
     */
    public function testSetFctModifAbsencesCP() {

        $obj = new iPaieDroits();

        $obj->setFctModifAbsencesCP(true);
        $this->assertEquals(true, $obj->getFctModifAbsencesCP());
    }

    /**
     * Tests the setFctModifAcomptes() method.
     *
     * @return void
     */
    public function testSetFctModifAcomptes() {

        $obj = new iPaieDroits();

        $obj->setFctModifAcomptes(true);
        $this->assertEquals(true, $obj->getFctModifAcomptes());
    }

    /**
     * Tests the setFctModifArchives() method.
     *
     * @return void
     */
    public function testSetFctModifArchives() {

        $obj = new iPaieDroits();

        $obj->setFctModifArchives(true);
        $this->assertEquals(true, $obj->getFctModifArchives());
    }

    /**
     * Tests the setFctModifBulletins() method.
     *
     * @return void
     */
    public function testSetFctModifBulletins() {

        $obj = new iPaieDroits();

        $obj->setFctModifBulletins(true);
        $this->assertEquals(true, $obj->getFctModifBulletins());
    }

    /**
     * Tests the setFctModifDocuments() method.
     *
     * @return void
     */
    public function testSetFctModifDocuments() {

        $obj = new iPaieDroits();

        $obj->setFctModifDocuments(true);
        $this->assertEquals(true, $obj->getFctModifDocuments());
    }

    /**
     * Tests the setFctModifDonneesV() method.
     *
     * @return void
     */
    public function testSetFctModifDonneesV() {

        $obj = new iPaieDroits();

        $obj->setFctModifDonneesV(true);
        $this->assertEquals(true, $obj->getFctModifDonneesV());
    }

    /**
     * Tests the setFctModifEtatCivil() method.
     *
     * @return void
     */
    public function testSetFctModifEtatCivil() {

        $obj = new iPaieDroits();

        $obj->setFctModifEtatCivil(true);
        $this->assertEquals(true, $obj->getFctModifEtatCivil());
    }

    /**
     * Tests the setFlag() method.
     *
     * @return void
     */
    public function testSetFlag() {

        $obj = new iPaieDroits();

        $obj->setFlag("flag");
        $this->assertEquals("flag", $obj->getFlag());
    }

    /**
     * Tests the setNiveauConf() method.
     *
     * @return void
     */
    public function testSetNiveauConf() {

        $obj = new iPaieDroits();

        $obj->setNiveauConf("niveauConf");
        $this->assertEquals("niveauConf", $obj->getNiveauConf());
    }

    /**
     * Tests the setNoDossPaie() method.
     *
     * @return void
     */
    public function testSetNoDossPaie() {

        $obj = new iPaieDroits();

        $obj->setNoDossPaie("noDossPaie");
        $this->assertEquals("noDossPaie", $obj->getNoDossPaie());
    }

    /**
     * Tests the setNomUser() method.
     *
     * @return void
     */
    public function testSetNomUser() {

        $obj = new iPaieDroits();

        $obj->setNomUser("nomUser");
        $this->assertEquals("nomUser", $obj->getNomUser());
    }

    /**
     * Tests the setNumiKey() method.
     *
     * @return void
     */
    public function testSetNumiKey() {

        $obj = new iPaieDroits();

        $obj->setNumiKey("numiKey");
        $this->assertEquals("numiKey", $obj->getNumiKey());
    }

    /**
     * Tests the setPassword() method.
     *
     * @return void
     */
    public function testSetPassword() {

        $obj = new iPaieDroits();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Tests the setUserExpert() method.
     *
     * @return void
     */
    public function testSetUserExpert() {

        $obj = new iPaieDroits();

        $obj->setUserExpert(true);
        $this->assertEquals(true, $obj->getUserExpert());
    }

    /**
     * Tests the setVisuSalaires() method.
     *
     * @return void
     */
    public function testSetVisuSalaires() {

        $obj = new iPaieDroits();

        $obj->setVisuSalaires(true);
        $this->assertEquals(true, $obj->getVisuSalaires());
    }
}
