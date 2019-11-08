<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\FichesControlesLignesActions;

/**
 * Fiches controles lignes actions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FichesControlesLignesActionsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FichesControlesLignesActions();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getLibelleAction());
        $this->assertNull($obj->getNumeroFiche());
    }

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction() {

        $obj = new FichesControlesLignesActions();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new FichesControlesLignesActions();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new FichesControlesLignesActions();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new FichesControlesLignesActions();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new FichesControlesLignesActions();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setLibelleAction() method.
     *
     * @return void
     */
    public function testSetLibelleAction() {

        $obj = new FichesControlesLignesActions();

        $obj->setLibelleAction("libelleAction");
        $this->assertEquals("libelleAction", $obj->getLibelleAction());
    }

    /**
     * Tests the setNumeroFiche() method.
     *
     * @return void
     */
    public function testSetNumeroFiche() {

        $obj = new FichesControlesLignesActions();

        $obj->setNumeroFiche(10);
        $this->assertEquals(10, $obj->getNumeroFiche());
    }
}
