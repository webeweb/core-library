<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\SaisiePrepaEntete;

/**
 * Saisie prepa entete test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class SaisiePrepaEnteteTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setDesactive() method.
     *
     * @return void
     */
    public function testSetDesactive(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setDesactive(true);
        $this->assertEquals(true, $obj->getDesactive());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setSaisieAbsCp() method.
     *
     * @return void
     */
    public function testSetSaisieAbsCp(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setSaisieAbsCp(true);
        $this->assertEquals(true, $obj->getSaisieAbsCp());
    }

    /**
     * Tests the setSaisieAcompte() method.
     *
     * @return void
     */
    public function testSetSaisieAcompte(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setSaisieAcompte(true);
        $this->assertEquals(true, $obj->getSaisieAcompte());
    }

    /**
     * Tests the setWidthBord() method.
     *
     * @return void
     */
    public function testSetWidthBord(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setWidthBord(10);
        $this->assertEquals(10, $obj->getWidthBord());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SaisiePrepaEntete();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDesactive());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getSaisieAbsCp());
        $this->assertNull($obj->getSaisieAcompte());
        $this->assertNull($obj->getWidthBord());
    }
}
