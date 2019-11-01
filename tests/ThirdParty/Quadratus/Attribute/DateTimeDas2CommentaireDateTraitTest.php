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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDas2CommentaireDateTrait;

/**
 * D a s2 commentaire date trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDas2CommentaireDateTraitTest extends AbstractTestCase {

    /**
     * Tests the setDas2CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDas2CommentaireDate() {

        // Set a Date/time mock.
        $das2CommentaireDate = new DateTime("2018-09-10");

        $obj = new TestDateTimeDas2CommentaireDateTrait();

        $obj->setDas2CommentaireDate($das2CommentaireDate);
        $this->assertSame($das2CommentaireDate, $obj->getDas2CommentaireDate());
    }
}
