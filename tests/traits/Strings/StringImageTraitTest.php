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

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringImageTrait;

/**
 * String image trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringImageTraitTest extends AbstractTestCase {

    /**
     * Test setImage()
     *
     * @return void
     */
    public function testSetImage(): void {

        $obj = new TestStringImageTrait();

        $obj->setImage("image");
        $this->assertEquals("image", $obj->getImage());
    }
}
