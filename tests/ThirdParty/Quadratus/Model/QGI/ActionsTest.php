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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Actions;

/**
 * Actions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Actions();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeCalcul());
        $this->assertNull($obj->getDescriptifCourt());
        $this->assertNull($obj->getDescriptifLong());
        $this->assertNull($obj->getObligationLiee());
        $this->assertNull($obj->getQuantiteHeure());
        $this->assertNull($obj->getRelationQh());
    }
}
