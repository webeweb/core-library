<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringLabelTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String label trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringLabelTraitTest extends AbstractTestCase {

    /**
     * Test setLabel()
     *
     * @return void
     */
    public function testSetLabel(): void {

        $obj = new TestStringLabelTrait();

        $obj->setLabel("label");
        $this->assertEquals("label", $obj->getLabel());
    }
}
