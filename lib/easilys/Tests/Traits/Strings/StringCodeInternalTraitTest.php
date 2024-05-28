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
use WBW\Library\Easilys\Tests\Fixtures\Traits\Strings\TestStringCodeInternalTrait;

/**
 * String code internal trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Strings
 */
class StringCodeInternalTraitTest extends AbstractTestCase {

    /**
     * Test setCodeInternal()
     *
     * @return void
     */
    public function testSetCodeInternal(): void {

        $obj = new TestStringCodeInternalTrait();

        $obj->setCodeInternal("codeInternal");
        $this->assertEquals("codeInternal", $obj->getCodeInternal());
    }
}
