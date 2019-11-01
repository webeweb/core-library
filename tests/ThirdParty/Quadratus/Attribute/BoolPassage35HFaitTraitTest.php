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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPassage35HFaitTrait;

/**
 * Passage35 h fait trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPassage35HFaitTraitTest extends AbstractTestCase {

    /**
     * Tests the setPassage35HFait() method.
     *
     * @return void
     */
    public function testSetPassage35HFait() {

        $obj = new TestBoolPassage35HFaitTrait();

        $obj->setPassage35HFait(true);
        $this->assertEquals(true, $obj->getPassage35HFait());
    }
}
