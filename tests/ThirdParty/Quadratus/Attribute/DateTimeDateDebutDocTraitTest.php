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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateDebutDocTrait;

/**
 * Date debut doc trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateDebutDocTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateDebutDoc() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutDoc() {

        // Set a Date/time mock.
        $dateDebutDoc = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateDebutDocTrait();

        $obj->setDateDebutDoc($dateDebutDoc);
        $this->assertSame($dateDebutDoc, $obj->getDateDebutDoc());
    }
}
