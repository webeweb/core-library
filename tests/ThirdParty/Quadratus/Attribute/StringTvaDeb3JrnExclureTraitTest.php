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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaDeb3JrnExclureTrait;

/**
 * T v a deb3 jrn exclure trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaDeb3JrnExclureTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaDeb3JrnExclure() method.
     *
     * @return void
     */
    public function testSetTvaDeb3JrnExclure() {

        $obj = new TestStringTvaDeb3JrnExclureTrait();

        $obj->setTvaDeb3JrnExclure("tvaDeb3JrnExclure");
        $this->assertEquals("tvaDeb3JrnExclure", $obj->getTvaDeb3JrnExclure());
    }
}
