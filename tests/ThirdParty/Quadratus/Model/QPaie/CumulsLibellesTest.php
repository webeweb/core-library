<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\CumulsLibelles;

/**
 * Cumuls libelles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class CumulsLibellesTest extends AbstractTestCase {

    /**
     * Tests the setMontantCumul() method.
     *
     * @return void
     */
    public function testSetMontantCumul() {

        $obj = new CumulsLibelles();

        $obj->setMontantCumul(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCumul());
    }

    /**
     * Tests the setNumCumulBulletin() method.
     *
     * @return void
     */
    public function testSetNumCumulBulletin() {

        $obj = new CumulsLibelles();

        $obj->setNumCumulBulletin(10);
        $this->assertEquals(10, $obj->getNumCumulBulletin());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new CumulsLibelles();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new CumulsLibelles();

        $this->assertNull($obj->getMontantCumul());
        $this->assertNull($obj->getNumCumulBulletin());
        $this->assertNull($obj->getNumeroEmploye());
    }
}
