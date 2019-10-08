<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Documents;

/**
 * Documents model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class DocumentsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Documents();

        $this->assertNull($obj->getChrono());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getDateHeureSys());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
    }

    /**
     * Tests the setChrono() method.
     *
     * @return void
     */
    public function testSetChrono() {

        $obj = new Documents();

        $obj->setChrono(10);
        $this->assertEquals(10, $obj->getChrono());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new Documents();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeNature() method.
     *
     * @return void
     */
    public function testSetCodeNature() {

        $obj = new Documents();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests the setDateHeureSys() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateHeureSys() {

        $obj = new Documents();

        $obj->setDateHeureSys(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateHeureSys());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Documents();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new Documents();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }
}
