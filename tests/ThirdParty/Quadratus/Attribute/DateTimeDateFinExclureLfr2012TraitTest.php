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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateFinExclureLfr2012Trait;

/**
 * Date fin exclure l f r2012 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateFinExclureLfr2012TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateFinExclureLfr2012() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinExclureLfr2012() {

        // Set a Date/time mock.
        $dateFinExclureLfr2012 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateFinExclureLfr2012Trait();

        $obj->setDateFinExclureLfr2012($dateFinExclureLfr2012);
        $this->assertSame($dateFinExclureLfr2012, $obj->getDateFinExclureLfr2012());
    }
}
