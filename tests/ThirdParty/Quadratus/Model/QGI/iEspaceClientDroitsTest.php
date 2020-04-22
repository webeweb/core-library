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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iEspaceClientDroits;

/**
 * i espace client droits test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iEspaceClientDroitsTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollabMessages() method.
     *
     * @return void
     */
    public function testSetCodeCollabMessages() {

        $obj = new iEspaceClientDroits();

        $obj->setCodeCollabMessages("codeCollabMessages");
        $this->assertEquals("codeCollabMessages", $obj->getCodeCollabMessages());
    }

    /**
     * Tests the setCodeUser() method.
     *
     * @return void
     */
    public function testSetCodeUser() {

        $obj = new iEspaceClientDroits();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests the setDossierClient() method.
     *
     * @return void
     */
    public function testSetDossierClient() {

        $obj = new iEspaceClientDroits();

        $obj->setDossierClient("dossierClient");
        $this->assertEquals("dossierClient", $obj->getDossierClient());
    }

    /**
     * Tests the setFctDocuments() method.
     *
     * @return void
     */
    public function testSetFctDocuments() {

        $obj = new iEspaceClientDroits();

        $obj->setFctDocuments(true);
        $this->assertEquals(true, $obj->getFctDocuments());
    }

    /**
     * Tests the setFctDocumentsAutre() method.
     *
     * @return void
     */
    public function testSetFctDocumentsAutre() {

        $obj = new iEspaceClientDroits();

        $obj->setFctDocumentsAutre(10);
        $this->assertEquals(10, $obj->getFctDocumentsAutre());
    }

    /**
     * Tests the setFctDocumentsCompta() method.
     *
     * @return void
     */
    public function testSetFctDocumentsCompta() {

        $obj = new iEspaceClientDroits();

        $obj->setFctDocumentsCompta(10);
        $this->assertEquals(10, $obj->getFctDocumentsCompta());
    }

    /**
     * Tests the setFctDocumentsJuridique() method.
     *
     * @return void
     */
    public function testSetFctDocumentsJuridique() {

        $obj = new iEspaceClientDroits();

        $obj->setFctDocumentsJuridique(10);
        $this->assertEquals(10, $obj->getFctDocumentsJuridique());
    }

    /**
     * Tests the setFctDocumentsPaie() method.
     *
     * @return void
     */
    public function testSetFctDocumentsPaie() {

        $obj = new iEspaceClientDroits();

        $obj->setFctDocumentsPaie(10);
        $this->assertEquals(10, $obj->getFctDocumentsPaie());
    }

    /**
     * Tests the setFctInfos() method.
     *
     * @return void
     */
    public function testSetFctInfos() {

        $obj = new iEspaceClientDroits();

        $obj->setFctInfos(true);
        $this->assertEquals(true, $obj->getFctInfos());
    }

    /**
     * Tests the setFctMessagerie() method.
     *
     * @return void
     */
    public function testSetFctMessagerie() {

        $obj = new iEspaceClientDroits();

        $obj->setFctMessagerie(10);
        $this->assertEquals(10, $obj->getFctMessagerie());
    }

    /**
     * Tests the setNomUser() method.
     *
     * @return void
     */
    public function testSetNomUser() {

        $obj = new iEspaceClientDroits();

        $obj->setNomUser("nomUser");
        $this->assertEquals("nomUser", $obj->getNomUser());
    }

    /**
     * Tests the setPassword() method.
     *
     * @return void
     */
    public function testSetPassword() {

        $obj = new iEspaceClientDroits();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new iEspaceClientDroits();

        $this->assertNull($obj->getCodeCollabMessages());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getDossierClient());
        $this->assertNull($obj->getFctDocuments());
        $this->assertNull($obj->getFctDocumentsAutre());
        $this->assertNull($obj->getFctDocumentsCompta());
        $this->assertNull($obj->getFctDocumentsJuridique());
        $this->assertNull($obj->getFctDocumentsPaie());
        $this->assertNull($obj->getFctInfos());
        $this->assertNull($obj->getFctMessagerie());
        $this->assertNull($obj->getNomUser());
        $this->assertNull($obj->getPassword());
    }
}
