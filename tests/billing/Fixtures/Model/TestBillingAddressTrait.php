<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Tests\Fixtures\Model;

use WBW\Library\Billing\Model\BillingAddressTrait;
use WBW\Library\Billing\Serializer\JsonSerializer;
use WBW\Library\Common\Model\Billing\BillingAddressInterface;

/**
 * Test billing address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Fixtures\Model
 */
class TestBillingAddressTrait implements BillingAddressInterface {

    use BillingAddressTrait;

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeBillingAddress($this);
    }
}
