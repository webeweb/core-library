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

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringTooltipTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String tooltip trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringTooltipTraitTest extends AbstractTestCase {

    /**
     * Test setTooltip()
     *
     * @return void
     */
    public function testSetTooltip(): void {

        $obj = new TestStringTooltipTrait();

        $obj->setTooltip("tooltip");
        $this->assertEquals("tooltip", $obj->getTooltip());
    }
}
