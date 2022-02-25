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
use WBW\Library\Quadratus\Model\Proprete\DernPrepaPaie;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dern prepa paie test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DernPrepaPaieTest extends AbstractTestCase {

    /**
     * Tests setAlerteRouge()
     *
     * @return void
     */
    public function testSetAlerteRouge(): void {

        $obj = new DernPrepaPaie();

        $obj->setAlerteRouge(true);
        $this->assertEquals(true, $obj->getAlerteRouge());
    }

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new DernPrepaPaie();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new DernPrepaPaie();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests setDtPrepa()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtPrepa(): void {

        // Set a Date/time mock.
        $dtPrepa = new DateTime("2018-09-10");

        $obj = new DernPrepaPaie();

        $obj->setDtPrepa($dtPrepa);
        $this->assertSame($dtPrepa, $obj->getDtPrepa());
    }

    /**
     * Tests setPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new DernPrepaPaie();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DernPrepaPaie();

        $this->assertNull($obj->getAlerteRouge());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDtPrepa());
        $this->assertNull($obj->getPeriode());
    }
}
