<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringUriTrait;

/**
 * String URI trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringUriTraitTest extends AbstractTestCase {

    /**
     * Test setUri()
     *
     * @return void
     */
    public function testSetUri(): void {

        $obj = new TestStringUriTrait();

        $obj->setUri("Uri");
        $this->assertEquals("Uri", $obj->getUri());
    }
}
