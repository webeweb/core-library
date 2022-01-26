<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Fixtures\Model;

use WBW\Library\Bill\Model\BillingAddressInterface;
use WBW\Library\Bill\Model\BillingAddressTrait;
use WBW\Library\Bill\Serializer\JsonSerializer;

/**
 * Test billing address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Fixtures\Model
 */
class TestBillingAddressTrait implements BillingAddressInterface {

    use BillingAddressTrait;

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeBillingAddress($this);
    }
}
