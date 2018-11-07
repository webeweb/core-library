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
use WBW\Library\Core\Quadratus\Model\QPaie\HAbsPrepaPaie;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * H abs prepa paie model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class HAbsPrepaPaieTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HAbsPrepaPaie();

        $this->assertNull($obj->getNbHNonEffectue());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getSemaine());
        $this->assertNull($obj->getTypeAbsence());
    }

    /**
     * Tests the setNbHNonEffectue() method.
     *
     * @return void
     */
    public function testSetNbHNonEffectue() {

        $obj = new HAbsPrepaPaie();

        $obj->setNbHNonEffectue(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHNonEffectue());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new HAbsPrepaPaie();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new HAbsPrepaPaie();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setSemaine() method.
     *
     * @return void
     */
    public function testSetSemaine() {

        $obj = new HAbsPrepaPaie();

        $obj->setSemaine("semaine");
        $this->assertEquals("semaine", $obj->getSemaine());
    }

    /**
     * Tests the setTypeAbsence() method.
     *
     * @return void
     */
    public function testSetTypeAbsence() {

        $obj = new HAbsPrepaPaie();

        $obj->setTypeAbsence("typeAbsence");
        $this->assertEquals("typeAbsence", $obj->getTypeAbsence());
    }

}
