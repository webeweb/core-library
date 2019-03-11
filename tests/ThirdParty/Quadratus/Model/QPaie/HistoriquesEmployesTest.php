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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\HistoriquesEmployes;

/**
 * Historiques employes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HistoriquesEmployesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoriquesEmployes();

        $this->assertNull($obj->getChapitre());
        $this->assertNull($obj->getCollCreat());
        $this->assertNull($obj->getCollModif());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getGUniqID());
        $this->assertNull($obj->getIndice());
    }

    /**
     * Tests the setChapitre() method.
     *
     * @return void
     */
    public function testSetChapitre() {

        $obj = new HistoriquesEmployes();

        $obj->setChapitre("chapitre");
        $this->assertEquals("chapitre", $obj->getChapitre());
    }

    /**
     * Tests the setCollCreat() method.
     *
     * @return void
     */
    public function testSetCollCreat() {

        $obj = new HistoriquesEmployes();

        $obj->setCollCreat("collCreat");
        $this->assertEquals("collCreat", $obj->getCollCreat());
    }

    /**
     * Tests the setCollModif() method.
     *
     * @return void
     */
    public function testSetCollModif() {

        $obj = new HistoriquesEmployes();

        $obj->setCollModif("collModif");
        $this->assertEquals("collModif", $obj->getCollModif());
    }

    /**
     * Tests the setDateCreat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreat() {

        $obj = new HistoriquesEmployes();

        $obj->setDateCreat(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreat());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif() {

        $obj = new HistoriquesEmployes();

        $obj->setDateModif(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
    }

    /**
     * Tests the setDescription() method.
     *
     * @return void
     */
    public function testSetDescription() {

        $obj = new HistoriquesEmployes();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests the setGUniqID() method.
     *
     * @return void
     */
    public function testSetGUniqID() {

        $obj = new HistoriquesEmployes();

        $obj->setGUniqID("gUniqID");
        $this->assertEquals("gUniqID", $obj->getGUniqID());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new HistoriquesEmployes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }
}
