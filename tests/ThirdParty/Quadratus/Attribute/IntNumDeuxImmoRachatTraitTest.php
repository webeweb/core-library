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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNumDeuxImmoRachatTrait;

/**
 * Num deux immo rachat trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNumDeuxImmoRachatTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumDeuxImmoRachat() method.
     *
     * @return void
     */
    public function testSetNumDeuxImmoRachat() {

        $obj = new TestIntNumDeuxImmoRachatTrait();

        $obj->setNumDeuxImmoRachat(10);
        $this->assertEquals(10, $obj->getNumDeuxImmoRachat());
    }
}
