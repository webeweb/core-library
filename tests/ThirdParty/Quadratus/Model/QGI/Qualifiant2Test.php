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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Qualifiant2;

/**
 * Qualifiant2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class Qualifiant2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Qualifiant2();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeLiaison());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getColonne());
        $this->assertNull($obj->getNumLig());
        $this->assertNull($obj->getObjetRef());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Qualifiant2();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeLiaison() method.
     *
     * @return void
     */
    public function testSetCodeLiaison() {

        $obj = new Qualifiant2();

        $obj->setCodeLiaison("codeLiaison");
        $this->assertEquals("codeLiaison", $obj->getCodeLiaison());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new Qualifiant2();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setColonne() method.
     *
     * @return void
     */
    public function testSetColonne() {

        $obj = new Qualifiant2();

        $obj->setColonne("colonne");
        $this->assertEquals("colonne", $obj->getColonne());
    }

    /**
     * Tests the setNumLig() method.
     *
     * @return void
     */
    public function testSetNumLig() {

        $obj = new Qualifiant2();

        $obj->setNumLig(10);
        $this->assertEquals(10, $obj->getNumLig());
    }

    /**
     * Tests the setObjetRef() method.
     *
     * @return void
     */
    public function testSetObjetRef() {

        $obj = new Qualifiant2();

        $obj->setObjetRef("objetRef");
        $this->assertEquals("objetRef", $obj->getObjetRef());
    }
}
