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
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanVisibleTrait;

/**
 * Boolean visible trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanVisibleTraitTest extends AbstractTestCase {

    /**
     * Tests setVisible()
     *
     * @return void
     */
    public function testSetVisible(): void {

        $obj = new TestBooleanVisibleTrait();

        $obj->setVisible(true);
        $this->assertTrue($obj->getVisible());
    }
}
