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
use WBW\Library\Quadratus\Model\QPaie\JoursFeries;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Jours feries test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class JoursFeriesTest extends AbstractTestCase {

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new JoursFeries();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setJour()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetJour(): void {

        // Set a Date/time mock.
        $jour = new DateTime("2018-09-10");

        $obj = new JoursFeries();

        $obj->setJour($jour);
        $this->assertSame($jour, $obj->getJour());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new JoursFeries();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getJour());
    }
}
