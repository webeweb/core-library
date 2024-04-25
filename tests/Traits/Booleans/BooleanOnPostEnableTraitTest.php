<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Booleans;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Booleans\TestBooleanOnPostEnableTrait;

/**
 * Boolean on post enable trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Booleans
 */
class BooleanOnPostEnableTraitTest extends AbstractTestCase {

    /**
     * Test setOnPostEnable()
     *
     * @return void
     */
    public function testSetOnPostEnable(): void {

        $obj = new TestBooleanOnPostEnableTrait();

        $obj->setOnPostEnable(true);
        $this->assertTrue($obj->getOnPostEnable());
    }
}
