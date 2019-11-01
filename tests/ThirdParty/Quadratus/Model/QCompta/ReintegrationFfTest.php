<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ReintegrationFf;

/**
 * Reintegration ff test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ReintegrationFfTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ReintegrationFf();

        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getIdTableau());
        $this->assertNull($obj->getMttApports());
        $this->assertNull($obj->getMttEmprunts());
        $this->assertNull($obj->getMttPrelev());
        $this->assertNull($obj->getMttTreso());
    }
}
