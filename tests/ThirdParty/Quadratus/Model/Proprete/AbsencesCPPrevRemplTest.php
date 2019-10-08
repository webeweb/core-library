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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AbsencesCPPrevRempl;

/**
 * Absences c p prev rempl model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesCPPrevRemplTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AbsencesCPPrevRempl();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeRemplacant());
        $this->assertNull($obj->getDateDebutCP());
        $this->assertNull($obj->getDateDebutRempl());
        $this->assertNull($obj->getDateFinRempl());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getTypeRempl());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new AbsencesCPPrevRempl();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeRemplacant() method.
     *
     * @return void
     */
    public function testSetCodeRemplacant() {

        $obj = new AbsencesCPPrevRempl();

        $obj->setCodeRemplacant("codeRemplacant");
        $this->assertEquals("codeRemplacant", $obj->getCodeRemplacant());
    }

    /**
     * Tests the setDateDebutCP() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutCP() {

        $obj = new AbsencesCPPrevRempl();

        $obj->setDateDebutCP(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutCP());
    }

    /**
     * Tests the setDateDebutRempl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutRempl() {

        $obj = new AbsencesCPPrevRempl();

        $obj->setDateDebutRempl(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutRempl());
    }

    /**
     * Tests the setDateFinRempl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinRempl() {

        $obj = new AbsencesCPPrevRempl();

        $obj->setDateFinRempl(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinRempl());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new AbsencesCPPrevRempl();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

    /**
     * Tests the setTypeRempl() method.
     *
     * @return void
     */
    public function testSetTypeRempl() {

        $obj = new AbsencesCPPrevRempl();

        $obj->setTypeRempl("typeRempl");
        $this->assertEquals("typeRempl", $obj->getTypeRempl());
    }
}
