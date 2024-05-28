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
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringSourceTrait;

/**
 * String source trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringSourceTraitTest extends AbstractTestCase {

    /**
     * Test setSource()
     *
     * @return void
     */
    public function testSetSource(): void {

        $obj = new TestStringSourceTrait();

        $obj->setSource("source");
        $this->assertEquals("source", $obj->getSource());
    }
}
