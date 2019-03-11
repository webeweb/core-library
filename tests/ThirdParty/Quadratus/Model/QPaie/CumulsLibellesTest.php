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

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\CumulsLibelles;

/**
 * Cumuls libelles model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class CumulsLibellesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CumulsLibelles();

        $this->assertNull($obj->getMontantCumul());
        $this->assertNull($obj->getNumCumulBulletin());
        $this->assertNull($obj->getNumeroEmploye());
    }

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
}
