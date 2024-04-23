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

use WBW\Library\Common\Tests\Fixtures\Traits\Booleans\TestBooleanOnPreEditTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Boolean on pre edit trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Booleans
 */
class BooleanOnPreEditTraitTest extends AbstractTestCase {

    /**
     * Test setOnPreEdit()
     *
     * @return void
     */
    public function testSetOnPreEdit(): void {

        $obj = new TestBooleanOnPreEditTrait();

        $obj->setOnPreEdit(true);
        $this->assertTrue($obj->getOnPreEdit());
    }
}
