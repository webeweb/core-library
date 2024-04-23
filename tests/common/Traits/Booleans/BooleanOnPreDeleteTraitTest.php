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

use WBW\Library\Common\Tests\Fixtures\Traits\Booleans\TestBooleanOnPreDeleteTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Boolean on pre delete trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Booleans
 */
class BooleanOnPreDeleteTraitTest extends AbstractTestCase {

    /**
     * Test setOnPreDelete()
     *
     * @return void
     */
    public function testSetOnPreDelete(): void {

        $obj = new TestBooleanOnPreDeleteTrait();

        $obj->setOnPreDelete(true);
        $this->assertTrue($obj->getOnPreDelete());
    }
}
