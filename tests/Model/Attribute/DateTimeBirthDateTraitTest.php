<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestDateTimeBirthDateTrait;

/**
 * Date/time birth date trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class DateTimeBirthDateTraitTest extends AbstractTestCase {

    /**
     * Tests the setBirthdate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBirthdate(): void {

        // Set a date/time mock.
        $birthDate = new DateTime();

        $obj = new TestDateTimeBirthDateTrait();

        $obj->setBirthDate($birthDate);
        $this->assertSame($birthDate, $obj->getBirthDate());
    }
}
