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
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanOnPreEditTrait;

/**
 * Boolean on pre edit trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanOnPreEditTraitTest extends AbstractTestCase {

    /**
     * Tests setOnPreEdit()
     *
     * @return void
     */
    public function testSetOnPreEdit(): void {

        $obj = new TestBooleanOnPreEditTrait();

        $obj->setOnPreEdit(true);
        $this->assertTrue($obj->getOnPreEdit());
    }
}
