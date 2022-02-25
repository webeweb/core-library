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

use WBW\Library\Quadratus\Model\QPaie\CumulsLibelles;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Cumuls libelles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class CumulsLibellesTest extends AbstractTestCase {

    /**
     * Tests setMontantCumul()
     *
     * @return void
     */
    public function testSetMontantCumul(): void {

        $obj = new CumulsLibelles();

        $obj->setMontantCumul(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCumul());
    }

    /**
     * Tests setNumCumulBulletin()
     *
     * @return void
     */
    public function testSetNumCumulBulletin(): void {

        $obj = new CumulsLibelles();

        $obj->setNumCumulBulletin(10);
        $this->assertEquals(10, $obj->getNumCumulBulletin());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new CumulsLibelles();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CumulsLibelles();

        $this->assertNull($obj->getMontantCumul());
        $this->assertNull($obj->getNumCumulBulletin());
        $this->assertNull($obj->getNumeroEmploye());
    }
}
