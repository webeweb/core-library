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

use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\InfoStatistiques;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Info statistiques model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class InfoStatistiquesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new InfoStatistiques();

        $this->assertNull($obj->getAFacturerHorsEx());
        $this->assertNull($obj->getAFacturerSurEx());
        $this->assertNull($obj->getCodeElement());
        $this->assertNull($obj->getCompteurHorsEx());
        $this->assertNull($obj->getCompteurSurEx());
    }

    /**
     * Tests the setAFacturerHorsEx() method.
     *
     * @return void
     */
    public function testSetAFacturerHorsEx() {

        $obj = new InfoStatistiques();

        $obj->setAFacturerHorsEx(10);
        $this->assertEquals(10, $obj->getAFacturerHorsEx());
    }

    /**
     * Tests the setAFacturerSurEx() method.
     *
     * @return void
     */
    public function testSetAFacturerSurEx() {

        $obj = new InfoStatistiques();

        $obj->setAFacturerSurEx(10);
        $this->assertEquals(10, $obj->getAFacturerSurEx());
    }

    /**
     * Tests the setCodeElement() method.
     *
     * @return void
     */
    public function testSetCodeElement() {

        $obj = new InfoStatistiques();

        $obj->setCodeElement(10);
        $this->assertEquals(10, $obj->getCodeElement());
    }

    /**
     * Tests the setCompteurHorsEx() method.
     *
     * @return void
     */
    public function testSetCompteurHorsEx() {

        $obj = new InfoStatistiques();

        $obj->setCompteurHorsEx(10);
        $this->assertEquals(10, $obj->getCompteurHorsEx());
    }

    /**
     * Tests the setCompteurSurEx() method.
     *
     * @return void
     */
    public function testSetCompteurSurEx() {

        $obj = new InfoStatistiques();

        $obj->setCompteurSurEx(10);
        $this->assertEquals(10, $obj->getCompteurSurEx());
    }
}
