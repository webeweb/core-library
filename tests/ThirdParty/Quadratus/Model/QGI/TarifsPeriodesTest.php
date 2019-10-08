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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TarifsPeriodes;

/**
 * Tarifs periodes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TarifsPeriodesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TarifsPeriodes();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getRemiseBase());
        $this->assertNull($obj->getTypeCodeArticle());
        $this->assertNull($obj->getTypeCodeClient());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new TarifsPeriodes();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new TarifsPeriodes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeNature() method.
     *
     * @return void
     */
    public function testSetCodeNature() {

        $obj = new TarifsPeriodes();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut() {

        $obj = new TarifsPeriodes();

        $obj->setDateDebut(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin() {

        $obj = new TarifsPeriodes();

        $obj->setDateFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
    }

    /**
     * Tests the setRemiseBase() method.
     *
     * @return void
     */
    public function testSetRemiseBase() {

        $obj = new TarifsPeriodes();

        $obj->setRemiseBase(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseBase());
    }

    /**
     * Tests the setTypeCodeArticle() method.
     *
     * @return void
     */
    public function testSetTypeCodeArticle() {

        $obj = new TarifsPeriodes();

        $obj->setTypeCodeArticle("typeCodeArticle");
        $this->assertEquals("typeCodeArticle", $obj->getTypeCodeArticle());
    }

    /**
     * Tests the setTypeCodeClient() method.
     *
     * @return void
     */
    public function testSetTypeCodeClient() {

        $obj = new TarifsPeriodes();

        $obj->setTypeCodeClient("typeCodeClient");
        $this->assertEquals("typeCodeClient", $obj->getTypeCodeClient());
    }
}
