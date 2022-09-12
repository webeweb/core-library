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
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanOnPreDisableTrait;

/**
 * Boolean on pre disable trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanOnPreDisableTraitTest extends AbstractTestCase {

    /**
     * Tests setOnPreDisable()
     *
     * @return void
     */
    public function testSetOnPreDisable(): void {

        $obj = new TestBooleanOnPreDisableTrait();

        $obj->setOnPreDisable(true);
        $this->assertTrue($obj->getOnPreDisable());
    }
}
