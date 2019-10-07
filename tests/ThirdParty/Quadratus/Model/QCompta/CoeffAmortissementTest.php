<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\CoeffAmortissement;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Coeff amortissement model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CoeffAmortissementTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CoeffAmortissement();

        $this->assertNull($obj->getCoeff());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDuree());
    }

    /**
     * Tests the setCoeff() method.
     *
     * @return void
     */
    public function testSetCoeff() {

        $obj = new CoeffAmortissement();

        $obj->setCoeff(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeff());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut() {

        $obj = new CoeffAmortissement();

        $obj->setDateDebut(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
    }

    /**
     * Tests the setDuree() method.
     *
     * @return void
     */
    public function testSetDuree() {

        $obj = new CoeffAmortissement();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }
}
