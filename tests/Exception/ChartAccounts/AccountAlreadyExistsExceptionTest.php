<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\ChartAccounts;

use WBW\Library\Core\ChartAccounts\Model\ChartAccountsAccount;
use WBW\Library\Core\Exception\ChartAccounts\AccountAlreadyExistsException;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Account already exists exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\ChartAccounts
 */
class AccountAlreadyExistsExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $arg = new ChartAccountsAccount();
        $arg->setNumber("101");
        $arg->setLabel("Bank/Cash at bank");

        $ex  = new AccountAlreadyExistsException($arg);
        $res = "This account [101:Bank/Cash at bank] already exists";
        $this->assertEquals($res, $ex->getMessage());
    }
}
