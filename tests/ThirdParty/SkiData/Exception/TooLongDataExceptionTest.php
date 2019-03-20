<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\SkiData\Exception;

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\SkiData\Exception\TooLongDataException;

/**
 * Too long data exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\SkiData\Exception
 */
class TooLongDataExceptionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new TooLongDataException("", 0);

        $res = "The data \"\" exceeds the length \"0\" allowed";
        $this->assertEquals($res, $ex->getMessage());
    }
}
