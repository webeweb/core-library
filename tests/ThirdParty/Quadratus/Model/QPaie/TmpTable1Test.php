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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TmpTable1;

/**
 * Tmp table1 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TmpTable1Test extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TmpTable1();

        $this->assertNull($obj->getClasse());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getEtablissement());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getInverse());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getQui());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getValeur());
        $this->assertNull($obj->getValeurTot());
    }

    /**
     * Tests the setClasse() method.
     *
     * @return void
     */
    public function testSetClasse() {

        $obj = new TmpTable1();

        $obj->setClasse("classe");
        $this->assertEquals("classe", $obj->getClasse());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new TmpTable1();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setEtablissement() method.
     *
     * @return void
     */
    public function testSetEtablissement() {

        $obj = new TmpTable1();

        $obj->setEtablissement(10);
        $this->assertEquals(10, $obj->getEtablissement());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new TmpTable1();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setInverse() method.
     *
     * @return void
     */
    public function testSetInverse() {

        $obj = new TmpTable1();

        $obj->setInverse(true);
        $this->assertEquals(true, $obj->getInverse());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new TmpTable1();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setQui() method.
     *
     * @return void
     */
    public function testSetQui() {

        $obj = new TmpTable1();

        $obj->setQui(10);
        $this->assertEquals(10, $obj->getQui());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService() {

        $obj = new TmpTable1();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new TmpTable1();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Tests the setValeur() method.
     *
     * @return void
     */
    public function testSetValeur() {

        $obj = new TmpTable1();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }

    /**
     * Tests the setValeurTot() method.
     *
     * @return void
     */
    public function testSetValeurTot() {

        $obj = new TmpTable1();

        $obj->setValeurTot(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurTot());
    }
}
