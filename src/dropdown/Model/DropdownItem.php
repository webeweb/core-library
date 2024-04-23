<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Dropdown\Model;

use WBW\Library\Common\Traits\Integers\IntegerPositionTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Dropdown\Serializer\JsonSerializer;

/**
 * Dropdown item.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Dropdown\Model
 */
class DropdownItem implements DropdownItemInterface {

    use IntegerPositionTrait;
    use StringLabelTrait;

    /**
     * By default.
     *
     * @var bool|null
     */
    protected $byDefault;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getByDefault(): ?bool {
        return $this->byDefault;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeDropdownItem($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setByDefault(?bool $byDefault): DropdownItemInterface {
        $this->byDefault = $byDefault;
        return $this;
    }
}
