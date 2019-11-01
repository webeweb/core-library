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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat07BaseHtTauxPartTrait;

/**
 * 07 base h t taux part trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float07BaseHtTauxPartTraitTest extends AbstractTestCase {

    /**
     * Tests the set07BaseHtTauxPart() method.
     *
     * @return void
     */
    public function testSet07BaseHtTauxPart() {

        $obj = new TestFloat07BaseHtTauxPartTrait();

        $obj->set07BaseHtTauxPart(10.092018);
        $this->assertEquals(10.092018, $obj->get07BaseHtTauxPart());
    }
}
