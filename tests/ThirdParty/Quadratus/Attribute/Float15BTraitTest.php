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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat15BTrait;

/**
 * 15 b trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float15BTraitTest extends AbstractTestCase {

    /**
     * Tests the set15B() method.
     *
     * @return void
     */
    public function testSet15B() {

        $obj = new TestFloat15BTrait();

        $obj->set15B(10.092018);
        $this->assertEquals(10.092018, $obj->get15B());
    }
}
