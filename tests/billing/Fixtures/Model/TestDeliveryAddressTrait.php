<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Tests\Fixtures\Model;

use WBW\Library\Billing\Model\DeliveryAddressInterface;
use WBW\Library\Billing\Model\DeliveryAddressTrait;
use WBW\Library\Billing\Serializer\JsonSerializer;

/**
 * Test delivery address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Fixtures\Model
 */
class TestDeliveryAddressTrait implements DeliveryAddressInterface {

    use DeliveryAddressTrait;

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeDeliveryAddress($this);
    }
}
