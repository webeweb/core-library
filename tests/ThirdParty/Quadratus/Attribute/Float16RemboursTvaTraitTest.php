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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat16RemboursTvaTrait;

/**
 * 16 rembours t v a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float16RemboursTvaTraitTest extends AbstractTestCase {

    /**
     * Tests the set16RemboursTva() method.
     *
     * @return void
     */
    public function testSet16RemboursTva() {

        $obj = new TestFloat16RemboursTvaTrait();

        $obj->set16RemboursTva(10.092018);
        $this->assertEquals(10.092018, $obj->get16RemboursTva());
    }
}
