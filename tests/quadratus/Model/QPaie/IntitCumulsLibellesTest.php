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

use WBW\Library\Quadratus\Model\QPaie\IntitCumulsLibelles;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Intit cumuls libelles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class IntitCumulsLibellesTest extends AbstractTestCase {

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new IntitCumulsLibelles();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setNumCumulBulletin()
     *
     * @return void
     */
    public function testSetNumCumulBulletin(): void {

        $obj = new IntitCumulsLibelles();

        $obj->setNumCumulBulletin(10);
        $this->assertEquals(10, $obj->getNumCumulBulletin());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new IntitCumulsLibelles();

        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumCumulBulletin());
    }
}
