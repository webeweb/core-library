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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeMercrediAMdebTrait;

/**
 * Mercredi a mdeb trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeMercrediAMdebTraitTest extends AbstractTestCase {

    /**
     * Tests the setMercrediAMdeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMercrediAMdeb() {

        // Set a Date/time mock.
        $mercrediAMdeb = new DateTime("2018-09-10");

        $obj = new TestDateTimeMercrediAMdebTrait();

        $obj->setMercrediAMdeb($mercrediAMdeb);
        $this->assertSame($mercrediAMdeb, $obj->getMercrediAMdeb());
    }
}
