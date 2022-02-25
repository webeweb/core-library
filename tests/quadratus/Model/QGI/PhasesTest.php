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

use WBW\Library\Quadratus\Model\QGI\Phases;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Phases test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class PhasesTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Phases();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new Phases();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Phases();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setNumOrdre()
     *
     * @return void
     */
    public function testSetNumOrdre(): void {

        $obj = new Phases();

        $obj->setNumOrdre(10);
        $this->assertEquals(10, $obj->getNumOrdre());
    }

    /**
     * Tests setSaisieFact()
     *
     * @return void
     */
    public function testSetSaisieFact(): void {

        $obj = new Phases();

        $obj->setSaisieFact(true);
        $this->assertEquals(true, $obj->getSaisieFact());
    }

    /**
     * Tests setSaisieTemps()
     *
     * @return void
     */
    public function testSetSaisieTemps(): void {

        $obj = new Phases();

        $obj->setSaisieTemps(true);
        $this->assertEquals(true, $obj->getSaisieTemps());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Phases();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumOrdre());
        $this->assertNull($obj->getSaisieFact());
        $this->assertNull($obj->getSaisieTemps());
    }
}
