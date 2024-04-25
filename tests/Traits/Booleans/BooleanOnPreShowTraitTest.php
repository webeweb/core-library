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
use WBW\Library\Common\Tests\Fixtures\Traits\Booleans\TestBooleanOnPreShowTrait;

/**
 * Boolean on pre show trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Booleans
 */
class BooleanOnPreShowTraitTest extends AbstractTestCase {

    /**
     * Test setOnPreShow()
     *
     * @return void
     */
    public function testSetOnPreShow(): void {

        $obj = new TestBooleanOnPreShowTrait();

        $obj->setOnPreShow(true);
        $this->assertTrue($obj->getOnPreShow());
    }
}
