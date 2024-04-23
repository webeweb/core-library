<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringVersionTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String version trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringVersionTraitTest extends AbstractTestCase {

    /**
     * Test setVersion()
     *
     * @return void
     */
    public function testSetVersion(): void {

        $obj = new TestStringVersionTrait();

        $obj->setVersion("Version");
        $this->assertEquals("Version", $obj->getVersion());
    }
}
