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

use WBW\Library\SkiData\Exception\TooLongDataException;
use WBW\Library\SkiData\Tests\AbstractTestCase;

/**
 * Too long data exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Tests\Exception
 */
class TooLongDataExceptionTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $ex = new TooLongDataException("", 0);

        $this->assertEquals('The data "" exceeds the length "0" allowed', $ex->getMessage());
    }
}
