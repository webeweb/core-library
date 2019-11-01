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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\ConventionsColLibelles;

/**
 * Conventions col libelles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class ConventionsColLibellesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConventionsColLibelles();

        $this->assertNull($obj->getActive());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCodeConvention());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getFraisSanteAm());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getPosition());
    }
}
