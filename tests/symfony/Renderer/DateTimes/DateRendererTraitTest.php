<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Renderer\DateTimes;

use DateTime;
use Exception;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Renderer\DateTimes\TestDateRendererTrait;

/**
 * Date renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Renderer\DateTimes
 */
class DateRendererTraitTest extends AbstractTestCase {

    /**
     * Tests renderDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRenderDate(): void {

        $obj = new TestDateRendererTrait();

        $this->assertEquals("", $obj->renderDate(null));
        $this->assertEquals("2019-01-14", $obj->renderDate(new DateTime("2019-01-14")));
        $this->assertEquals("14/01/2019", $obj->renderDate(new DateTime("2019-01-14"), "d/m/Y"));
    }
}
