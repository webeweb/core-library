<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\PointageReglementsTetes;

/**
 * Pointage reglements tetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class PointageReglementsTetesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PointageReglementsTetes();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollCreation());
        $this->assertNull($obj->getCodeCollGenere());
        $this->assertNull($obj->getCodeCollModif());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateGenere());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantSaisi());
        $this->assertNull($obj->getNumCptPayeur());
        $this->assertNull($obj->getNumDoss());
    }
}
