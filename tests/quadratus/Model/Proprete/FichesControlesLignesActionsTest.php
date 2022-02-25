<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\FichesControlesLignesActions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fiches controles lignes actions test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class FichesControlesLignesActionsTest extends AbstractTestCase {

    /**
     * Tests setCodeAction()
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new FichesControlesLignesActions();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new FichesControlesLignesActions();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new FichesControlesLignesActions();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new FichesControlesLignesActions();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new FichesControlesLignesActions();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests setLibelleAction()
     *
     * @return void
     */
    public function testSetLibelleAction(): void {

        $obj = new FichesControlesLignesActions();

        $obj->setLibelleAction("libelleAction");
        $this->assertEquals("libelleAction", $obj->getLibelleAction());
    }

    /**
     * Tests setNumeroFiche()
     *
     * @return void
     */
    public function testSetNumeroFiche(): void {

        $obj = new FichesControlesLignesActions();

        $obj->setNumeroFiche(10);
        $this->assertEquals(10, $obj->getNumeroFiche());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FichesControlesLignesActions();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getLibelleAction());
        $this->assertNull($obj->getNumeroFiche());
    }
}
