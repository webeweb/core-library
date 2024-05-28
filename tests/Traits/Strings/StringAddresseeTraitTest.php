<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringAddresseeTrait;

/**
 * String addressee trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringAddresseeTraitTest extends AbstractTestCase {

    /**
     * Test setAddressee()
     *
     * @return void
     */
    public function testSetAddressee(): void {

        $obj = new TestStringAddresseeTrait();

        $obj->setAddressee("addressee");
        $this->assertEquals("addressee", $obj->getAddressee());
    }
}
