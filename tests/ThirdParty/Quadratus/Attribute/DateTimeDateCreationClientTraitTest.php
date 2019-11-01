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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateCreationClientTrait;

/**
 * Date creation client trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateCreationClientTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateCreationClient() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreationClient() {

        // Set a Date/time mock.
        $dateCreationClient = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateCreationClientTrait();

        $obj->setDateCreationClient($dateCreationClient);
        $this->assertSame($dateCreationClient, $obj->getDateCreationClient());
    }
}
