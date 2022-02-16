<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Tests\Serializer;

use WBW\Library\Accounting\Serializer\SerializerKeys;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @var string
     */
    public function test__construct(): void {

        $this->assertEquals("accountNumber", SerializerKeys::ACCOUNT_NUMBER);
        $this->assertEquals("bankCode", SerializerKeys::BANK_CODE);
        $this->assertEquals("bankDomiciliation", SerializerKeys::BANK_DOMICILIATION);
        $this->assertEquals("bankName", SerializerKeys::BANK_NAME);
        $this->assertEquals("bic", SerializerKeys::BIC);
        $this->assertEquals("branchCode", SerializerKeys::BRANCH_CODE);
        $this->assertEquals("iban", SerializerKeys::IBAN);
        $this->assertEquals("owner", SerializerKeys::OWNER);
        $this->assertEquals("purchasesAccountingAccount", SerializerKeys::PURCHASES_ACCOUNTING_ACCOUNT);
        $this->assertEquals("ribKey", SerializerKeys::RIB_KEY);
        $this->assertEquals("salesAccountingAccount", SerializerKeys::SALES_ACCOUNTING_ACCOUNT);
    }
}
