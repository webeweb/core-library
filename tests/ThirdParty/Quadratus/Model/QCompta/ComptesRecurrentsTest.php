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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ComptesRecurrents;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Comptes recurrents model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ComptesRecurrentsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ComptesRecurrents();

        $this->assertNull($obj->getCompte());
        $this->assertNull($obj->getCompteRecurrent());
        $this->assertNull($obj->getDateDernierAcces());
        $this->assertNull($obj->getNbAcces());
    }

    /**
     * Tests the setCompte() method.
     *
     * @return void
     */
    public function testSetCompte() {

        $obj = new ComptesRecurrents();

        $obj->setCompte("compte");
        $this->assertEquals("compte", $obj->getCompte());
    }

    /**
     * Tests the setCompteRecurrent() method.
     *
     * @return void
     */
    public function testSetCompteRecurrent() {

        $obj = new ComptesRecurrents();

        $obj->setCompteRecurrent("compteRecurrent");
        $this->assertEquals("compteRecurrent", $obj->getCompteRecurrent());
    }

    /**
     * Tests the setDateDernierAcces() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDernierAcces() {

        $obj = new ComptesRecurrents();

        $obj->setDateDernierAcces(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDernierAcces());
    }

    /**
     * Tests the setNbAcces() method.
     *
     * @return void
     */
    public function testSetNbAcces() {

        $obj = new ComptesRecurrents();

        $obj->setNbAcces(10);
        $this->assertEquals(10, $obj->getNbAcces());
    }
}
