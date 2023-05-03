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
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\AffectationEmployeChantier;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Affectation employe chantier test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AffectationEmployeChantierTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new AffectationEmployeChantier();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new AffectationEmployeChantier();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AffectationEmployeChantier();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new AffectationEmployeChantier();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setDateAffectation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAffectation(): void {

        // Set a Date/time mock.
        $dateAffectation = new DateTime("2018-09-10");

        $obj = new AffectationEmployeChantier();

        $obj->setDateAffectation($dateAffectation);
        $this->assertSame($dateAffectation, $obj->getDateAffectation());
    }

    /**
     * Test setDateFinAffectation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinAffectation(): void {

        // Set a Date/time mock.
        $dateFinAffectation = new DateTime("2018-09-10");

        $obj = new AffectationEmployeChantier();

        $obj->setDateFinAffectation($dateFinAffectation);
        $this->assertSame($dateFinAffectation, $obj->getDateFinAffectation());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AffectationEmployeChantier();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDateAffectation());
        $this->assertNull($obj->getDateFinAffectation());
    }
}
