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

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Booleans\TestBooleanDisabledTrait;

/**
 * Boolean disabled trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Booleans
 */
class BooleanDisabledTraitTest extends AbstractTestCase {

    /**
     * Test setDisabled()
     *
     * @return void
     */
    public function testSetDisabled(): void {

        $obj = new TestBooleanDisabledTrait();

        $obj->setDisabled(true);
        $this->assertTrue($obj->getDisabled());
    }
}
