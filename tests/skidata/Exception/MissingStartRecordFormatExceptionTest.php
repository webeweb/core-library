<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Tests\Exception;

use WBW\Library\SkiData\Exception\MissingStartRecordFormatException;
use WBW\Library\SkiData\Tests\AbstractTestCase;

/**
 * Missing start record format exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Tests\Exception
 */
class MissingStartRecordFormatExceptionTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $ex = new MissingStartRecordFormatException();

        $this->assertEquals("The start record format is missing", $ex->getMessage());
    }
}
