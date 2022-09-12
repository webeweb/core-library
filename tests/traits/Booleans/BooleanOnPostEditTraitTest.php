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
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanOnPostEditTrait;

/**
 * Boolean on post edit trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanOnPostEditTraitTest extends AbstractTestCase {

    /**
     * Tests setOnPostEdit()
     *
     * @return void
     */
    public function testSetOnPostEdit(): void {

        $obj = new TestBooleanOnPostEditTrait();

        $obj->setOnPostEdit(true);
        $this->assertTrue($obj->getOnPostEdit());
    }
}
