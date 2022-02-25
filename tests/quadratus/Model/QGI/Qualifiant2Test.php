<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\Qualifiant2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Qualifiant2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class Qualifiant2Test extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Qualifiant2();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeLiaison()
     *
     * @return void
     */
    public function testSetCodeLiaison(): void {

        $obj = new Qualifiant2();

        $obj->setCodeLiaison("codeLiaison");
        $this->assertEquals("codeLiaison", $obj->getCodeLiaison());
    }

    /**
     * Tests setCodeLibelle()
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new Qualifiant2();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests setColonne()
     *
     * @return void
     */
    public function testSetColonne(): void {

        $obj = new Qualifiant2();

        $obj->setColonne("colonne");
        $this->assertEquals("colonne", $obj->getColonne());
    }

    /**
     * Tests setNumLig()
     *
     * @return void
     */
    public function testSetNumLig(): void {

        $obj = new Qualifiant2();

        $obj->setNumLig(10);
        $this->assertEquals(10, $obj->getNumLig());
    }

    /**
     * Tests setObjetRef()
     *
     * @return void
     */
    public function testSetObjetRef(): void {

        $obj = new Qualifiant2();

        $obj->setObjetRef("objetRef");
        $this->assertEquals("objetRef", $obj->getObjetRef());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Qualifiant2();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeLiaison());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getColonne());
        $this->assertNull($obj->getNumLig());
        $this->assertNull($obj->getObjetRef());
    }
}
