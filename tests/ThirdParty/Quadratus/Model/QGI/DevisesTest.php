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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Devises;

/**
 * Devises model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class DevisesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Devises();

        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getNbDec());
        $this->assertNull($obj->getTaux());
        $this->assertNull($obj->getUseNbDec());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new Devises();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        $obj = new Devises();

        $obj->setDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
    }

    /**
     * Tests the setNbDec() method.
     *
     * @return void
     */
    public function testSetNbDec() {

        $obj = new Devises();

        $obj->setNbDec("nbDec");
        $this->assertEquals("nbDec", $obj->getNbDec());
    }

    /**
     * Tests the setTaux() method.
     *
     * @return void
     */
    public function testSetTaux() {

        $obj = new Devises();

        $obj->setTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux());
    }

    /**
     * Tests the setUseNbDec() method.
     *
     * @return void
     */
    public function testSetUseNbDec() {

        $obj = new Devises();

        $obj->setUseNbDec(true);
        $this->assertEquals(true, $obj->getUseNbDec());
    }
}
