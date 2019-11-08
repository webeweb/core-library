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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AbsencesCpPrevRempl;

/**
 * Absences cp prev rempl test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesCpPrevRemplTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AbsencesCpPrevRempl();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeRemplacant());
        $this->assertNull($obj->getDateDebutCp());
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

        $obj = new AbsencesCpPrevRempl();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeRemplacant() method.
     *
     * @return void
     */
    public function testSetCodeRemplacant() {

        $obj = new AbsencesCpPrevRempl();

        $obj->setCodeRemplacant("codeRemplacant");
        $this->assertEquals("codeRemplacant", $obj->getCodeRemplacant());
    }

    /**
     * Tests the setDateDebutCp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutCp() {

        // Set a Date/time mock.
        $dateDebutCp = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevRempl();

        $obj->setDateDebutCp($dateDebutCp);
        $this->assertSame($dateDebutCp, $obj->getDateDebutCp());
    }

    /**
     * Tests the setDateDebutRempl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutRempl() {

        // Set a Date/time mock.
        $dateDebutRempl = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevRempl();

        $obj->setDateDebutRempl($dateDebutRempl);
        $this->assertSame($dateDebutRempl, $obj->getDateDebutRempl());
    }

    /**
     * Tests the setDateFinRempl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinRempl() {

        // Set a Date/time mock.
        $dateFinRempl = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevRempl();

        $obj->setDateFinRempl($dateFinRempl);
        $this->assertSame($dateFinRempl, $obj->getDateFinRempl());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new AbsencesCpPrevRempl();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

    /**
     * Tests the setTypeRempl() method.
     *
     * @return void
     */
    public function testSetTypeRempl() {

        $obj = new AbsencesCpPrevRempl();

        $obj->setTypeRempl("typeRempl");
        $this->assertEquals("typeRempl", $obj->getTypeRempl());
    }
}
