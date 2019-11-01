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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateAchatTrait;

/**
 * Date achat trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateAchatTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateAchat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAchat() {

        // Set a Date/time mock.
        $dateAchat = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateAchatTrait();

        $obj->setDateAchat($dateAchat);
        $this->assertSame($dateAchat, $obj->getDateAchat());
    }
}
