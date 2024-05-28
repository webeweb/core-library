<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Traits\Strings;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Strings\TestStringContextTrait;

/**
 * String context trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Strings
 */
class StringContextTraitTest extends AbstractTestCase {

    /**
     * Test setContext()
     *
     * @return void
     */
    public function testSetContext(): void {

        $obj = new TestStringContextTrait();

        $obj->setContext("context");
        $this->assertEquals("context", $obj->getContext());
    }
}
