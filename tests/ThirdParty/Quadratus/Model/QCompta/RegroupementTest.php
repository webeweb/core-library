<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Regroupement;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Regroupement model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class RegroupementTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Regroupement();

        $this->assertNull($obj->getClasse());
        $this->assertNull($obj->getIntitule());
    }

    /**
     * Tests the setClasse() method.
     *
     * @return void
     */
    public function testSetClasse() {

        $obj = new Regroupement();

        $obj->setClasse("classe");
        $this->assertEquals("classe", $obj->getClasse());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new Regroupement();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }
}
