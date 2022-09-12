<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Booleans;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanOnPostEnableTrait;

/**
 * Boolean on post enable trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanOnPostEnableTraitTest extends AbstractTestCase {

    /**
     * Tests setOnPostEnable()
     *
     * @return void
     */
    public function testSetOnPostEnable(): void {

        $obj = new TestBooleanOnPostEnableTrait();

        $obj->setOnPostEnable(true);
        $this->assertTrue($obj->getOnPostEnable());
    }
}
