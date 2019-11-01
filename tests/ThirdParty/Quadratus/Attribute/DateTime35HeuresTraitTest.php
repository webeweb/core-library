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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTime35HeuresTrait;

/**
 * 35 heures trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTime35HeuresTraitTest extends AbstractTestCase {

    /**
     * Tests the set35Heures() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSet35Heures() {

        // Set a Date/time mock.
        $_35Heures = new DateTime("2018-09-10");

        $obj = new TestDateTime35HeuresTrait();

        $obj->set35Heures($_35Heures);
        $this->assertSame($_35Heures, $obj->get35Heures());
    }
}
