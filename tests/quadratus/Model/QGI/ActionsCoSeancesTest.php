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
use WBW\Library\Quadratus\Model\QGI\ActionsCoSeances;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Actions co seances test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ActionsCoSeancesTest extends AbstractTestCase {

    /**
     * Tests setCodeAction()
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new ActionsCoSeances();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests setCodeManif()
     *
     * @return void
     */
    public function testSetCodeManif(): void {

        $obj = new ActionsCoSeances();

        $obj->setCodeManif("codeManif");
        $this->assertEquals("codeManif", $obj->getCodeManif());
    }

    /**
     * Tests setDateSeance()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSeance(): void {

        // Set a Date/time mock.
        $dateSeance = new DateTime("2018-09-10");

        $obj = new ActionsCoSeances();

        $obj->setDateSeance($dateSeance);
        $this->assertSame($dateSeance, $obj->getDateSeance());
    }

    /**
     * Tests setHeureDeb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDeb(): void {

        // Set a Date/time mock.
        $heureDeb = new DateTime("2018-09-10");

        $obj = new ActionsCoSeances();

        $obj->setHeureDeb($heureDeb);
        $this->assertSame($heureDeb, $obj->getHeureDeb());
    }

    /**
     * Tests setHeureFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureFin(): void {

        // Set a Date/time mock.
        $heureFin = new DateTime("2018-09-10");

        $obj = new ActionsCoSeances();

        $obj->setHeureFin($heureFin);
        $this->assertSame($heureFin, $obj->getHeureFin());
    }

    /**
     * Tests setLibelleSeance()
     *
     * @return void
     */
    public function testSetLibelleSeance(): void {

        $obj = new ActionsCoSeances();

        $obj->setLibelleSeance("libelleSeance");
        $this->assertEquals("libelleSeance", $obj->getLibelleSeance());
    }

    /**
     * Tests setNumSeance()
     *
     * @return void
     */
    public function testSetNumSeance(): void {

        $obj = new ActionsCoSeances();

        $obj->setNumSeance(10);
        $this->assertEquals(10, $obj->getNumSeance());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ActionsCoSeances();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeManif());
        $this->assertNull($obj->getDateSeance());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getLibelleSeance());
        $this->assertNull($obj->getNumSeance());
    }
}
