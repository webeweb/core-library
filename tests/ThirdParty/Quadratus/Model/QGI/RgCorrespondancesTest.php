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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\RgCorrespondances;

/**
 * Rg correspondances test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class RgCorrespondancesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RgCorrespondances();

        $this->assertNull($obj->getFichiersPublierWeb());
        $this->assertNull($obj->getIgnorer());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getTypeDonnees());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getValeur());
        $this->assertNull($obj->getValeurOrigine());
    }
}
