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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Dirigeants;

/**
 * Dirigeants model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class DirigeantsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Dirigeants();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDirigeant());
        $this->assertNull($obj->getCodeFonction());
        $this->assertNull($obj->getDateNomination());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getID());
        $this->assertNull($obj->getObservations());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new Dirigeants();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeDirigeant() method.
     *
     * @return void
     */
    public function testSetCodeDirigeant() {

        $obj = new Dirigeants();

        $obj->setCodeDirigeant("codeDirigeant");
        $this->assertEquals("codeDirigeant", $obj->getCodeDirigeant());
    }

    /**
     * Tests the setCodeFonction() method.
     *
     * @return void
     */
    public function testSetCodeFonction() {

        $obj = new Dirigeants();

        $obj->setCodeFonction("codeFonction");
        $this->assertEquals("codeFonction", $obj->getCodeFonction());
    }

    /**
     * Tests the setDateNomination() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNomination() {

        $obj = new Dirigeants();

        $obj->setDateNomination(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNomination());
    }

    /**
     * Tests the setDuree() method.
     *
     * @return void
     */
    public function testSetDuree() {

        $obj = new Dirigeants();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Tests the setID() method.
     *
     * @return void
     */
    public function testSetID() {

        $obj = new Dirigeants();

        $obj->setID(10);
        $this->assertEquals(10, $obj->getID());
    }

    /**
     * Tests the setObservations() method.
     *
     * @return void
     */
    public function testSetObservations() {

        $obj = new Dirigeants();

        $obj->setObservations("observations");
        $this->assertEquals("observations", $obj->getObservations());
    }
}
