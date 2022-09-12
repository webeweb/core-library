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
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanOnPreNewTrait;

/**
 * Boolean on pre new trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanOnPreNewTraitTest extends AbstractTestCase {

    /**
     * Tests setOnPreNew()
     *
     * @return void
     */
    public function testSetOnPreNew(): void {

        $obj = new TestBooleanOnPreNewTrait();

        $obj->setOnPreNew(true);
        $this->assertTrue($obj->getOnPreNew());
    }
}
