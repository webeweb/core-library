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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeMercrediAMfinTrait;

/**
 * Mercredi a mfin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeMercrediAMfinTraitTest extends AbstractTestCase {

    /**
     * Tests the setMercrediAMfin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMercrediAMfin() {

        // Set a Date/time mock.
        $mercrediAMfin = new DateTime("2018-09-10");

        $obj = new TestDateTimeMercrediAMfinTrait();

        $obj->setMercrediAMfin($mercrediAMfin);
        $this->assertSame($mercrediAMfin, $obj->getMercrediAMfin());
    }
}
