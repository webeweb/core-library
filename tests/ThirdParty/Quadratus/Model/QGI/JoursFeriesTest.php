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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\JoursFeries;

/**
 * Jours feries test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class JoursFeriesTest extends AbstractTestCase {

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays() {

        $obj = new JoursFeries();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setJour() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetJour() {

        // Set a Date/time mock.
        $jour = new DateTime("2018-09-10");

        $obj = new JoursFeries();

        $obj->setJour($jour);
        $this->assertSame($jour, $obj->getJour());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new JoursFeries();

        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getJour());
    }
}
