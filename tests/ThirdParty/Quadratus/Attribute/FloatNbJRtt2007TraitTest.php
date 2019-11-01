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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbJRtt2007Trait;

/**
 * Nb j rtt2007 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbJRtt2007TraitTest extends AbstractTestCase {

    /**
     * Tests the setNbJRtt2007() method.
     *
     * @return void
     */
    public function testSetNbJRtt2007() {

        $obj = new TestFloatNbJRtt2007Trait();

        $obj->setNbJRtt2007(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRtt2007());
    }
}
