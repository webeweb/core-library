<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaJoursFeries;

/**
 * Agenda jours feries test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaJoursFeriesTest extends AbstractTestCase {

    /**
     * Tests the setCalculee() method.
     *
     * @return void
     */
    public function testSetCalculee(): void {

        $obj = new AgendaJoursFeries();

        $obj->setCalculee(true);
        $this->assertEquals(true, $obj->getCalculee());
    }

    /**
     * Tests the setDateFeriee() method.
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
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new AgendaJoursFeries();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new AgendaJoursFeries();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the __construct() method.
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
