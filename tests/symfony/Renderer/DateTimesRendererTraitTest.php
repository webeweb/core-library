<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Renderer;

use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Renderer\TestDateTimesRendererTrait;

/**
 * Date/times renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Renderer
 */
class DateTimesRendererTraitTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestDateTimesRendererTrait();

        $this->assertNull($obj->renderDate(null));
        $this->assertNull($obj->renderDateTime(null));
        $this->assertNull($obj->renderTime(null));
    }
}
