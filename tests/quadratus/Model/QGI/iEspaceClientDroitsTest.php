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

use WBW\Library\Quadratus\Model\QGI\iEspaceClientDroits;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * i espace client droits test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class iEspaceClientDroitsTest extends AbstractTestCase {

    /**
     * Tests setCodeCollabMessages()
     *
     * @return void
     */
    public function testSetCodeCollabMessages(): void {

        $obj = new iEspaceClientDroits();

        $obj->setCodeCollabMessages("codeCollabMessages");
        $this->assertEquals("codeCollabMessages", $obj->getCodeCollabMessages());
    }

    /**
     * Tests setCodeUser()
     *
     * @return void
     */
    public function testSetCodeUser(): void {

        $obj = new iEspaceClientDroits();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests setDossierClient()
     *
     * @return void
     */
    public function testSetDossierClient(): void {

        $obj = new iEspaceClientDroits();

        $obj->setDossierClient("dossierClient");
        $this->assertEquals("dossierClient", $obj->getDossierClient());
    }

    /**
     * Tests setFctDocuments()
     *
     * @return void
     */
    public function testSetFctDocuments(): void {

        $obj = new iEspaceClientDroits();

        $obj->setFctDocuments(true);
        $this->assertEquals(true, $obj->getFctDocuments());
    }

    /**
     * Tests setFctDocumentsAutre()
     *
     * @return void
     */
    public function testSetFctDocumentsAutre(): void {

        $obj = new iEspaceClientDroits();

        $obj->setFctDocumentsAutre(10);
        $this->assertEquals(10, $obj->getFctDocumentsAutre());
    }

    /**
     * Tests setFctDocumentsCompta()
     *
     * @return void
     */
    public function testSetFctDocumentsCompta(): void {

        $obj = new iEspaceClientDroits();

        $obj->setFctDocumentsCompta(10);
        $this->assertEquals(10, $obj->getFctDocumentsCompta());
    }

    /**
     * Tests setFctDocumentsJuridique()
     *
     * @return void
     */
    public function testSetFctDocumentsJuridique(): void {

        $obj = new iEspaceClientDroits();

        $obj->setFctDocumentsJuridique(10);
        $this->assertEquals(10, $obj->getFctDocumentsJuridique());
    }

    /**
     * Tests setFctDocumentsPaie()
     *
     * @return void
     */
    public function testSetFctDocumentsPaie(): void {

        $obj = new iEspaceClientDroits();

        $obj->setFctDocumentsPaie(10);
        $this->assertEquals(10, $obj->getFctDocumentsPaie());
    }

    /**
     * Tests setFctInfos()
     *
     * @return void
     */
    public function testSetFctInfos(): void {

        $obj = new iEspaceClientDroits();

        $obj->setFctInfos(true);
        $this->assertEquals(true, $obj->getFctInfos());
    }

    /**
     * Tests setFctMessagerie()
     *
     * @return void
     */
    public function testSetFctMessagerie(): void {

        $obj = new iEspaceClientDroits();

        $obj->setFctMessagerie(10);
        $this->assertEquals(10, $obj->getFctMessagerie());
    }

    /**
     * Tests setNomUser()
     *
     * @return void
     */
    public function testSetNomUser(): void {

        $obj = new iEspaceClientDroits();

        $obj->setNomUser("nomUser");
        $this->assertEquals("nomUser", $obj->getNomUser());
    }

    /**
     * Tests setPassword()
     *
     * @return void
     */
    public function testSetPassword(): void {

        $obj = new iEspaceClientDroits();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
