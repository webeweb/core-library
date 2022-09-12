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
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanOnPostShowTrait;

/**
 * Boolean on post show trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanOnPostShowTraitTest extends AbstractTestCase {

    /**
     * Tests setOnPostShow()
     *
     * @return void
     */
    public function testSetOnPostShow(): void {

        $obj = new TestBooleanOnPostShowTrait();

        $obj->setOnPostShow(true);
        $this->assertTrue($obj->getOnPostShow());
    }
}
