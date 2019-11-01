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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeMercrediPMfinTrait;

/**
 * Mercredi p mfin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeMercrediPMfinTraitTest extends AbstractTestCase {

    /**
     * Tests the setMercrediPMfin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMercrediPMfin() {

        // Set a Date/time mock.
        $mercrediPMfin = new DateTime("2018-09-10");

        $obj = new TestDateTimeMercrediPMfinTrait();

        $obj->setMercrediPMfin($mercrediPMfin);
        $this->assertSame($mercrediPMfin, $obj->getMercrediPMfin());
    }
}
