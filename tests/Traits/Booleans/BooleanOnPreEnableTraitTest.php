<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Booleans;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Booleans\TestBooleanOnPreEnableTrait;

/**
 * Boolean on pre enable trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Booleans
 */
class BooleanOnPreEnableTraitTest extends AbstractTestCase {

    /**
     * Test setOnPreEnable()
     *
     * @return void
     */
    public function testSetOnPreEnable(): void {

        $obj = new TestBooleanOnPreEnableTrait();

        $obj->setOnPreEnable(true);
        $this->assertTrue($obj->getOnPreEnable());
    }
}
