<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

use WBW\Library\System\Serializer\JsonSerializer;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Memory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
class Memory implements MemoryInterface {

    /**
     * Values.
     *
     * @var int[]
     */
    protected $values;

    /**
     * Constructor.
     *
     * @param int[] $values The values.
     */
    public function __construct(array $values) {
        $this->setValues($values);
    }

    /**
     * {@inheritdoc}
     */
    public function getKeys(): array {
        return array_keys($this->values);
    }

    /**
     * {@inheritdoc}
     */
    public function getValue(string $key): ?int {
        return ArrayHelper::get($this->values, $key);
    }

    /**
     * {@inheritdoc}
     */
    public function getValues(): array {
        return $this->values;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize() {
        return JsonSerializer::serializeMemory($this);
    }

    /**
     * Set the values.
     *
     * @param int[] $values The values.
     * @return MemoryInterface Returns this memory.
     */
    protected function setValues(array $values): MemoryInterface {
        $this->values = $values;
        return $this;
    }
}
