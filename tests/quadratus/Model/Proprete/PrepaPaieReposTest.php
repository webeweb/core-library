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
use WBW\Library\Quadratus\Model\Proprete\PrepaPaieRepos;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Prepa paie repos test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PrepaPaieReposTest extends AbstractTestCase {

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new PrepaPaieRepos();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCpPris() method.
     *
     * @return void
     */
    public function testSetCpPris(): void {

        $obj = new PrepaPaieRepos();

        $obj->setCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCpPris());
    }

    /**
     * Tests the setHEffectives() method.
     *
     * @return void
     */
    public function testSetHEffectives(): void {

        $obj = new PrepaPaieRepos();

        $obj->setHEffectives(10.092018);
        $this->assertEquals(10.092018, $obj->getHEffectives());
    }

    /**
     * Tests the setHPrevues() method.
     *
     * @return void
     */
    public function testSetHPrevues(): void {

        $obj = new PrepaPaieRepos();

        $obj->setHPrevues(10.092018);
        $this->assertEquals(10.092018, $obj->getHPrevues());
    }

    /**
     * Tests the setHRealisees() method.
     *
     * @return void
     */
    public function testSetHRealisees(): void {

        $obj = new PrepaPaieRepos();

        $obj->setHRealisees(10.092018);
        $this->assertEquals(10.092018, $obj->getHRealisees());
    }

    /**
     * Tests the setNumSem() method.
     *
     * @return void
     */
    public function testSetNumSem(): void {

        $obj = new PrepaPaieRepos();

        $obj->setNumSem("numSem");
        $this->assertEquals("numSem", $obj->getNumSem());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new PrepaPaieRepos();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setReposCompAcquis() method.
     *
     * @return void
     */
    public function testSetReposCompAcquis(): void {

        $obj = new PrepaPaieRepos();

        $obj->setReposCompAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getReposCompAcquis());
    }

    /**
     * Tests the setReposCompPris() method.
     *
     * @return void
     */
    public function testSetReposCompPris(): void {

        $obj = new PrepaPaieRepos();

        $obj->setReposCompPris(10.092018);
        $this->assertEquals(10.092018, $obj->getReposCompPris());
    }

    /**
     * Tests the setReposRemplAcquis() method.
     *
     * @return void
     */
    public function testSetReposRemplAcquis(): void {

        $obj = new PrepaPaieRepos();

        $obj->setReposRemplAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getReposRemplAcquis());
    }

    /**
     * Tests the setReposRemplPris() method.
     *
     * @return void
     */
    public function testSetReposRemplPris(): void {

        $obj = new PrepaPaieRepos();

        $obj->setReposRemplPris(10.092018);
        $this->assertEquals(10.092018, $obj->getReposRemplPris());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PrepaPaieRepos();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCpPris());
        $this->assertNull($obj->getHEffectives());
        $this->assertNull($obj->getHPrevues());
        $this->assertNull($obj->getHRealisees());
        $this->assertNull($obj->getNumSem());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getReposCompAcquis());
        $this->assertNull($obj->getReposCompPris());
        $this->assertNull($obj->getReposRemplAcquis());
        $this->assertNull($obj->getReposRemplPris());
    }
}
