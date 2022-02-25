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
use WBW\Library\Quadratus\Model\QGI\AgendaJoursFeries;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Agenda jours feries test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AgendaJoursFeriesTest extends AbstractTestCase {

    /**
     * Tests setCalculee()
     *
     * @return void
     */
    public function testSetCalculee(): void {

        $obj = new AgendaJoursFeries();

        $obj->setCalculee(true);
        $this->assertEquals(true, $obj->getCalculee());
    }

    /**
     * Tests setDateFeriee()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFeriee(): void {

        // Set a Date/time mock.
        $dateFeriee = new DateTime("2018-09-10");

        $obj = new AgendaJoursFeries();

        $obj->setDateFeriee($dateFeriee);
        $this->assertSame($dateFeriee, $obj->getDateFeriee());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new AgendaJoursFeries();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new AgendaJoursFeries();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AgendaJoursFeries();

        $this->assertNull($obj->getCalculee());
        $this->assertNull($obj->getDateFeriee());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getType());
    }
}
