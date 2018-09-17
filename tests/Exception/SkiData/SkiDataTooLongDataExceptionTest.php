<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\SkiData;

use WBW\Library\Core\Exception\SkiData\SkiDataTooLongDataException;
use WBW\Library\Core\Tests\AbstractCoreFrameworkTestCase;

/**
 * SkiData too long data exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\SkiData
 * @final
 */
final class SkiDataTooLongDataExceptionTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new SkiDataTooLongDataException("", 0);

        $res = "The data \"\" exceeds the length \"0\" allowed";
        $this->assertEquals($res, $ex->getMessage());
    }

}
