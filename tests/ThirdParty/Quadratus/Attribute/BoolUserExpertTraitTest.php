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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolUserExpertTrait;

/**
 * User expert trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolUserExpertTraitTest extends AbstractTestCase {

    /**
     * Tests the setUserExpert() method.
     *
     * @return void
     */
    public function testSetUserExpert() {

        $obj = new TestBoolUserExpertTrait();

        $obj->setUserExpert(true);
        $this->assertEquals(true, $obj->getUserExpert());
    }
}
