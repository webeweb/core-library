<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat12OmissionTrait;

/**
 * 12 omission trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float12OmissionTraitTest extends AbstractTestCase {

    /**
     * Tests the set12Omission() method.
     *
     * @return void
     */
    public function testSet12Omission() {

        $obj = new TestFloat12OmissionTrait();

        $obj->set12Omission(10.092018);
        $this->assertEquals(10.092018, $obj->get12Omission());
    }
}
