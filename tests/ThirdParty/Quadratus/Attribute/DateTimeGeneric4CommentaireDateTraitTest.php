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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeGeneric4CommentaireDateTrait;

/**
 * Generic4 commentaire date trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeGeneric4CommentaireDateTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric4CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric4CommentaireDate() {

        // Set a Date/time mock.
        $generic4CommentaireDate = new DateTime("2018-09-10");

        $obj = new TestDateTimeGeneric4CommentaireDateTrait();

        $obj->setGeneric4CommentaireDate($generic4CommentaireDate);
        $this->assertSame($generic4CommentaireDate, $obj->getGeneric4CommentaireDate());
    }
}
