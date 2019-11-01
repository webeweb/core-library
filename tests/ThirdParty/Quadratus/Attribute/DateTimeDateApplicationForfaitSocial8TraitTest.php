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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateApplicationForfaitSocial8Trait;

/**
 * Date application forfait social8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateApplicationForfaitSocial8TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateApplicationForfaitSocial8() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplicationForfaitSocial8() {

        // Set a Date/time mock.
        $dateApplicationForfaitSocial8 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateApplicationForfaitSocial8Trait();

        $obj->setDateApplicationForfaitSocial8($dateApplicationForfaitSocial8);
        $this->assertSame($dateApplicationForfaitSocial8, $obj->getDateApplicationForfaitSocial8());
    }
}
