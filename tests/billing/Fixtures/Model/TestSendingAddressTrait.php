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

use WBW\Library\Billing\Model\SendingAddressInterface;
use WBW\Library\Billing\Model\SendingAddressTrait;
use WBW\Library\Billing\Serializer\JsonSerializer;

/**
 * Test sending address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Fixtures\Model
 */
class TestSendingAddressTrait implements SendingAddressInterface {

    use SendingAddressTrait;

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeSendingAddress($this);
    }
}
