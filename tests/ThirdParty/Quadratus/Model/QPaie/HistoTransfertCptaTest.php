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
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\HistoTransfertCpta;

/**
 * Histo transfert cpta model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HistoTransfertCptaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoTransfertCpta();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getDateEcriture());
        $this->assertNull($obj->getNumLot());
        $this->assertNull($obj->getPeriodeTransfert());
        $this->assertNull($obj->getTypeTransfert());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new HistoTransfertCpta();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal() {

        $obj = new HistoTransfertCpta();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setDateEcriture() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcriture() {

        $obj = new HistoTransfertCpta();

        $obj->setDateEcriture(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEcriture());
    }

    /**
     * Tests the setNumLot() method.
     *
     * @return void
     */
    public function testSetNumLot() {

        $obj = new HistoTransfertCpta();

        $obj->setNumLot(10);
        $this->assertEquals(10, $obj->getNumLot());
    }

    /**
     * Tests the setPeriodeTransfert() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeTransfert() {

        $obj = new HistoTransfertCpta();

        $obj->setPeriodeTransfert(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeTransfert());
    }

    /**
     * Tests the setTypeTransfert() method.
     *
     * @return void
     */
    public function testSetTypeTransfert() {

        $obj = new HistoTransfertCpta();

        $obj->setTypeTransfert("typeTransfert");
        $this->assertEquals("typeTransfert", $obj->getTypeTransfert());
    }
}
