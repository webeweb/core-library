<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\DadsuPrevoyanceRegroupement;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsu prevoyance regroupement test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuPrevoyanceRegroupementTest extends AbstractTestCase {

    /**
     * Tests setCodeLibelle()
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new DadsuPrevoyanceRegroupement();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests setCodeOption()
     *
     * @return void
     */
    public function testSetCodeOption(): void {

        $obj = new DadsuPrevoyanceRegroupement();

        $obj->setCodeOption("codeOption");
        $this->assertEquals("codeOption", $obj->getCodeOption());
    }

    /**
     * Tests setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new DadsuPrevoyanceRegroupement();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests setCodePopulation()
     *
     * @return void
     */
    public function testSetCodePopulation(): void {

        $obj = new DadsuPrevoyanceRegroupement();

        $obj->setCodePopulation("codePopulation");
        $this->assertEquals("codePopulation", $obj->getCodePopulation());
    }

    /**
     * Tests setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new DadsuPrevoyanceRegroupement();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests setRefContrat()
     *
     * @return void
     */
    public function testSetRefContrat(): void {

        $obj = new DadsuPrevoyanceRegroupement();

        $obj->setRefContrat("refContrat");
        $this->assertEquals("refContrat", $obj->getRefContrat());
    }

    /**
     * Tests setTypeCotis()
     *
     * @return void
     */
    public function testSetTypeCotis(): void {

        $obj = new DadsuPrevoyanceRegroupement();

        $obj->setTypeCotis("typeCotis");
        $this->assertEquals("typeCotis", $obj->getTypeCotis());
    }

    /**
     * Tests setValeurCotis()
     *
     * @return void
     */
    public function testSetValeurCotis(): void {

        $obj = new DadsuPrevoyanceRegroupement();

        $obj->setValeurCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurCotis());
    }

    /**
     * Tests setValeurCotisInitiale()
     *
     * @return void
     */
    public function testSetValeurCotisInitiale(): void {

        $obj = new DadsuPrevoyanceRegroupement();

        $obj->setValeurCotisInitiale(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurCotisInitiale());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DadsuPrevoyanceRegroupement();

        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeOption());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePopulation());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getRefContrat());
        $this->assertNull($obj->getTypeCotis());
        $this->assertNull($obj->getValeurCotis());
        $this->assertNull($obj->getValeurCotisInitiale());
    }
}
