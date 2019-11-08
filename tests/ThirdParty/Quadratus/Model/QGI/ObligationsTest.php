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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Obligations;

/**
 * Obligations test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ObligationsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Obligations();

        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeObligation());
        $this->assertNull($obj->getFrequence());
        $this->assertNull($obj->getIntitule());
    }

    /**
     * Tests the setCodeFamille() method.
     *
     * @return void
     */
    public function testSetCodeFamille() {

        $obj = new Obligations();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Tests the setCodeObligation() method.
     *
     * @return void
     */
    public function testSetCodeObligation() {

        $obj = new Obligations();

        $obj->setCodeObligation("codeObligation");
        $this->assertEquals("codeObligation", $obj->getCodeObligation());
    }

    /**
     * Tests the setFrequence() method.
     *
     * @return void
     */
    public function testSetFrequence() {

        $obj = new Obligations();

        $obj->setFrequence("frequence");
        $this->assertEquals("frequence", $obj->getFrequence());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new Obligations();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }
}
