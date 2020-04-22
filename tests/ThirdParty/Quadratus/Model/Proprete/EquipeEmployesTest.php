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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\EquipeEmployes;

/**
 * Equipe employes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class EquipeEmployesTest extends AbstractTestCase {

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new EquipeEmployes();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeEquipe() method.
     *
     * @return void
     */
    public function testSetCodeEquipe() {

        $obj = new EquipeEmployes();

        $obj->setCodeEquipe("codeEquipe");
        $this->assertEquals("codeEquipe", $obj->getCodeEquipe());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new EquipeEmployes();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeEquipe());
    }
}
