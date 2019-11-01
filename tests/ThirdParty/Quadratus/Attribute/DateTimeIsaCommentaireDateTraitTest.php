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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeIsaCommentaireDateTrait;

/**
 * I s a commentaire date trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeIsaCommentaireDateTraitTest extends AbstractTestCase {

    /**
     * Tests the setIsaCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetIsaCommentaireDate() {

        // Set a Date/time mock.
        $isaCommentaireDate = new DateTime("2018-09-10");

        $obj = new TestDateTimeIsaCommentaireDateTrait();

        $obj->setIsaCommentaireDate($isaCommentaireDate);
        $this->assertSame($isaCommentaireDate, $obj->getIsaCommentaireDate());
    }
}
