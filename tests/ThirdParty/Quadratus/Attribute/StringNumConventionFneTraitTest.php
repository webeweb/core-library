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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumConventionFneTrait;

/**
 * Num convention f n e trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumConventionFneTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumConventionFne() method.
     *
     * @return void
     */
    public function testSetNumConventionFne() {

        $obj = new TestStringNumConventionFneTrait();

        $obj->setNumConventionFne("numConventionFne");
        $this->assertEquals("numConventionFne", $obj->getNumConventionFne());
    }
}
