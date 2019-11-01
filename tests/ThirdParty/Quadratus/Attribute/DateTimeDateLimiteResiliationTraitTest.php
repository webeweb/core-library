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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateLimiteResiliationTrait;

/**
 * Date limite resiliation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateLimiteResiliationTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateLimiteResiliation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLimiteResiliation() {

        // Set a Date/time mock.
        $dateLimiteResiliation = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateLimiteResiliationTrait();

        $obj->setDateLimiteResiliation($dateLimiteResiliation);
        $this->assertSame($dateLimiteResiliation, $obj->getDateLimiteResiliation());
    }
}
