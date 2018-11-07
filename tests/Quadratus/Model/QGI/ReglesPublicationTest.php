<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\ReglesPublication;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Regles publication model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class ReglesPublicationTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ReglesPublication();

        $this->assertNull($obj->getChainePublication());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getEWSPublication());
        $this->assertNull($obj->getTypePublication());
        $this->assertNull($obj->getWEBPublication());
    }

    /**
     * Tests the setChainePublication() method.
     *
     * @return void
     */
    public function testSetChainePublication() {

        $obj = new ReglesPublication();

        $obj->setChainePublication("chainePublication");
        $this->assertEquals("chainePublication", $obj->getChainePublication());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new ReglesPublication();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setEWSPublication() method.
     *
     * @return void
     */
    public function testSetEWSPublication() {

        $obj = new ReglesPublication();

        $obj->setEWSPublication(true);
        $this->assertEquals(true, $obj->getEWSPublication());
    }

    /**
     * Tests the setTypePublication() method.
     *
     * @return void
     */
    public function testSetTypePublication() {

        $obj = new ReglesPublication();

        $obj->setTypePublication("typePublication");
        $this->assertEquals("typePublication", $obj->getTypePublication());
    }

    /**
     * Tests the setWEBPublication() method.
     *
     * @return void
     */
    public function testSetWEBPublication() {

        $obj = new ReglesPublication();

        $obj->setWEBPublication(true);
        $this->assertEquals(true, $obj->getWEBPublication());
    }

}
