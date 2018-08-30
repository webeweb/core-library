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

use WBW\Library\Core\Exception\SkiData\SkiDataMissingStartRecordFormatException;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * SkiData missing start record format exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\SkiData
 * @final
 */
final class SkiDataMissingStartRecordFormatExceptionTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new SkiDataMissingStartRecordFormatException("", 0);

        $res = "The start record format is missing";
        $this->assertEquals($res, $ex->getMessage());
    }

}
