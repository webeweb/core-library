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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeIsfCommentaireDateTrait;

/**
 * I s f commentaire date trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeIsfCommentaireDateTraitTest extends AbstractTestCase {

    /**
     * Tests the setIsfCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetIsfCommentaireDate() {

        // Set a Date/time mock.
        $isfCommentaireDate = new DateTime("2018-09-10");

        $obj = new TestDateTimeIsfCommentaireDateTrait();

        $obj->setIsfCommentaireDate($isfCommentaireDate);
        $this->assertSame($isfCommentaireDate, $obj->getIsfCommentaireDate());
    }
}
