<?php

declare(strict_types = 1);

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
use WBW\Library\Quadratus\Model\Proprete\ChantiersPeriodesFermeture;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chantiers periodes fermeture test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChantiersPeriodesFermetureTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersPeriodesFermeture();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersPeriodesFermeture();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersPeriodesFermeture();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setDateAu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAu(): void {

        // Set a Date/time mock.
        $dateAu = new DateTime("2018-09-10");

        $obj = new ChantiersPeriodesFermeture();

        $obj->setDateAu($dateAu);
        $this->assertSame($dateAu, $obj->getDateAu());
    }

    /**
     * Test setDateDu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDu(): void {

        // Set a Date/time mock.
        $dateDu = new DateTime("2018-09-10");

        $obj = new ChantiersPeriodesFermeture();

        $obj->setDateDu($dateDu);
        $this->assertSame($dateDu, $obj->getDateDu());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChantiersPeriodesFermeture();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDateAu());
        $this->assertNull($obj->getDateDu());
    }
}
