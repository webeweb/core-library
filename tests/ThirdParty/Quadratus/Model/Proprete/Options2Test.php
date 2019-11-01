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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Options2;

/**
 * Options2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class Options2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Options2();

        $this->assertNull($obj->getBooleen());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDateHeure());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getNumerique());
        $this->assertNull($obj->getString());
        $this->assertNull($obj->getType());
    }
}
