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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateValidationBudgetTrait;

/**
 * Date validation budget trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateValidationBudgetTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateValidationBudget() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationBudget() {

        // Set a Date/time mock.
        $dateValidationBudget = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateValidationBudgetTrait();

        $obj->setDateValidationBudget($dateValidationBudget);
        $this->assertSame($dateValidationBudget, $obj->getDateValidationBudget());
    }
}
