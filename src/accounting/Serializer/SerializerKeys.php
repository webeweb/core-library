<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Serializer;

/**
 * Serializer keys.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Serializer
 */
interface SerializerKeys {

    /**
     * Serializer key "code".
     *
     * @var string
     */
    const CODE = "code";

    /**
     * Serializer key "label".
     *
     * @var string
     */
    const LABEL = "label";

    /**
     * Serializer key "number".
     *
     * @var string
     */
    const NUMBER = "number";

    /**
     * Serializer key "purchases accounting account".
     *
     * @var string
     */
    const PURCHASES_ACCOUNTING_ACCOUNT = "purchasesAccountingAccount";

    /**
     * Serializer key "rate".
     *
     * @var string
     */
    const RATE = "rate";

    /**
     * Serializer key "sales accounting account".
     *
     * @var string
     */
    const SALES_ACCOUNTING_ACCOUNT = "salesAccountingAccount";

    /**
     * Serializer key "type".
     *
     * @var string
     */
    const TYPE = "type";
}