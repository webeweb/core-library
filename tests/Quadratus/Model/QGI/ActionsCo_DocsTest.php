<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\ActionsCo_Docs;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Actions co_ docs model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class ActionsCo_DocsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ActionsCo_Docs();

        $this->assertNull($obj->getAuteur());
        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDoc());
        $this->assertNull($obj->getCodeManif());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getEmplacementFichier());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumero());
    }

    /**
     * Tests the setAuteur() method.
     *
     * @return void
     */
    public function testSetAuteur() {

        $obj = new ActionsCo_Docs();

        $obj->setAuteur("auteur");
        $this->assertEquals("auteur", $obj->getAuteur());
    }

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction() {

        $obj = new ActionsCo_Docs();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new ActionsCo_Docs();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeDoc() method.
     *
     * @return void
     */
    public function testSetCodeDoc() {

        $obj = new ActionsCo_Docs();

        $obj->setCodeDoc("codeDoc");
        $this->assertEquals("codeDoc", $obj->getCodeDoc());
    }

    /**
     * Tests the setCodeManif() method.
     *
     * @return void
     */
    public function testSetCodeManif() {

        $obj = new ActionsCo_Docs();

        $obj->setCodeManif("codeManif");
        $this->assertEquals("codeManif", $obj->getCodeManif());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     */
    public function testSetDateCreation() {

        $obj = new ActionsCo_Docs();

        $obj->setDateCreation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     */
    public function testSetDateModification() {

        $obj = new ActionsCo_Docs();

        $obj->setDateModification(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
    }

    /**
     * Tests the setEmplacementFichier() method.
     *
     * @return void
     */
    public function testSetEmplacementFichier() {

        $obj = new ActionsCo_Docs();

        $obj->setEmplacementFichier("emplacementFichier");
        $this->assertEquals("emplacementFichier", $obj->getEmplacementFichier());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new ActionsCo_Docs();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new ActionsCo_Docs();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

}
