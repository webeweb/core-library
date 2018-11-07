<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\BulletinsNavigo;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Bulletins navigo model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class BulletinsNavigoTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BulletinsNavigo();

        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNbSemaine());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getRbtNonProratise());
        $this->assertNull($obj->getTypeAbonnement());
        $this->assertNull($obj->getZone());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new BulletinsNavigo();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNbSemaine() method.
     *
     * @return void
     */
    public function testSetNbSemaine() {

        $obj = new BulletinsNavigo();

        $obj->setNbSemaine("nbSemaine");
        $this->assertEquals("nbSemaine", $obj->getNbSemaine());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new BulletinsNavigo();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new BulletinsNavigo();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setRbtNonProratise() method.
     *
     * @return void
     */
    public function testSetRbtNonProratise() {

        $obj = new BulletinsNavigo();

        $obj->setRbtNonProratise(true);
        $this->assertEquals(true, $obj->getRbtNonProratise());
    }

    /**
     * Tests the setTypeAbonnement() method.
     *
     * @return void
     */
    public function testSetTypeAbonnement() {

        $obj = new BulletinsNavigo();

        $obj->setTypeAbonnement("typeAbonnement");
        $this->assertEquals("typeAbonnement", $obj->getTypeAbonnement());
    }

    /**
     * Tests the setZone() method.
     *
     * @return void
     */
    public function testSetZone() {

        $obj = new BulletinsNavigo();

        $obj->setZone("zone");
        $this->assertEquals("zone", $obj->getZone());
    }

}
