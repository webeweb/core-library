<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\AbsencesCpPrevRempl;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Absences cp prev rempl test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AbsencesCpPrevRemplTest extends AbstractTestCase {

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new AbsencesCpPrevRempl();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setCodeRemplacant()
     *
     * @return void
     */
    public function testSetCodeRemplacant(): void {

        $obj = new AbsencesCpPrevRempl();

        $obj->setCodeRemplacant("codeRemplacant");
        $this->assertEquals("codeRemplacant", $obj->getCodeRemplacant());
    }

    /**
     * Tests setDateDebutCp()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutCp(): void {

        // Set a Date/time mock.
        $dateDebutCp = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevRempl();

        $obj->setDateDebutCp($dateDebutCp);
        $this->assertSame($dateDebutCp, $obj->getDateDebutCp());
    }

    /**
     * Tests setDateDebutRempl()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutRempl(): void {

        // Set a Date/time mock.
        $dateDebutRempl = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevRempl();

        $obj->setDateDebutRempl($dateDebutRempl);
        $this->assertSame($dateDebutRempl, $obj->getDateDebutRempl());
    }

    /**
     * Tests setDateFinRempl()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinRempl(): void {

        // Set a Date/time mock.
        $dateFinRempl = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevRempl();

        $obj->setDateFinRempl($dateFinRempl);
        $this->assertSame($dateFinRempl, $obj->getDateFinRempl());
    }

    /**
     * Tests setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new AbsencesCpPrevRempl();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

    /**
     * Tests setTypeRempl()
     *
     * @return void
     */
    public function testSetTypeRempl(): void {

        $obj = new AbsencesCpPrevRempl();

        $obj->setTypeRempl("typeRempl");
        $this->assertEquals("typeRempl", $obj->getTypeRempl());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AbsencesCpPrevRempl();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeRemplacant());
        $this->assertNull($obj->getDateDebutCp());
        $this->assertNull($obj->getDateDebutRempl());
        $this->assertNull($obj->getDateFinRempl());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getTypeRempl());
    }
}
