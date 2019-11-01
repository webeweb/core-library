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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat06BaseHtAncTauxTrait;

/**
 * 06 base h t anc taux trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float06BaseHtAncTauxTraitTest extends AbstractTestCase {

    /**
     * Tests the set06BaseHtAncTaux() method.
     *
     * @return void
     */
    public function testSet06BaseHtAncTaux() {

        $obj = new TestFloat06BaseHtAncTauxTrait();

        $obj->set06BaseHtAncTaux(10.092018);
        $this->assertEquals(10.092018, $obj->get06BaseHtAncTaux());
    }
}
