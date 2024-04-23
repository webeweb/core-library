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

namespace WBW\Library\Common\Tests\Traits\Booleans;

use WBW\Library\Common\Tests\Fixtures\Traits\Booleans\TestBooleanEnabledTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Boolean enabled trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Booleans
 */
class BooleanEnabledTraitTest extends AbstractTestCase {

    /**
     * Test setEnabled()
     *
     * @return void
     */
    public function testSetEnabled(): void {

        $obj = new TestBooleanEnabledTrait();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }
}
