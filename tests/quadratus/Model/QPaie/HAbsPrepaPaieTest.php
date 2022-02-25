<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\HAbsPrepaPaie;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * H abs prepa paie test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class HAbsPrepaPaieTest extends AbstractTestCase {

    /**
     * Tests setNbHNonEffectue()
     *
     * @return void
     */
    public function testSetNbHNonEffectue(): void {

        $obj = new HAbsPrepaPaie();

        $obj->setNbHNonEffectue(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHNonEffectue());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new HAbsPrepaPaie();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new HAbsPrepaPaie();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setSemaine()
     *
     * @return void
     */
    public function testSetSemaine(): void {

        $obj = new HAbsPrepaPaie();

        $obj->setSemaine("semaine");
        $this->assertEquals("semaine", $obj->getSemaine());
    }

    /**
     * Tests setTypeAbsence()
     *
     * @return void
     */
    public function testSetTypeAbsence(): void {

        $obj = new HAbsPrepaPaie();

        $obj->setTypeAbsence("typeAbsence");
        $this->assertEquals("typeAbsence", $obj->getTypeAbsence());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HAbsPrepaPaie();

        $this->assertNull($obj->getNbHNonEffectue());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getSemaine());
        $this->assertNull($obj->getTypeAbsence());
    }
}
