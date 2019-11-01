<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateReevalTrait;

/**
 * Date reeval trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateReevalTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateReeval() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReeval() {

        // Set a Date/time mock.
        $dateReeval = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateReevalTrait();

        $obj->setDateReeval($dateReeval);
        $this->assertSame($dateReeval, $obj->getDateReeval());
    }
}
