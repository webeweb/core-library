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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat08TaxeDueTvAaReverserTrait;

/**
 * 08 taxe due t v aa reverser trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float08TaxeDueTvAaReverserTraitTest extends AbstractTestCase {

    /**
     * Tests the set08TaxeDueTvAaReverser() method.
     *
     * @return void
     */
    public function testSet08TaxeDueTvAaReverser() {

        $obj = new TestFloat08TaxeDueTvAaReverserTrait();

        $obj->set08TaxeDueTvAaReverser(10.092018);
        $this->assertEquals(10.092018, $obj->get08TaxeDueTvAaReverser());
    }
}
