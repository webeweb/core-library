<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringUrlTrait;

/**
 * String URL trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringUrlTraitTest extends AbstractTestCase {

    /**
     * Test setUrl()
     *
     * @return void
     */
    public function testSetUrl(): void {

        $obj = new TestStringUrlTrait();

        $obj->setUrl("Url");
        $this->assertEquals("Url", $obj->getUrl());
    }
}
