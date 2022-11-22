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

use JsonSerializable;

/**
 * Processor interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
interface ProcessorInterface extends JsonSerializable {

    /**
     * Get the keys.
     *
     * @return string[] Returns the keys.
     */
    public function getKeys(): array;

    /**
     * Get the value.
     *
     * @param string $key The key.
     * @return int|null Returns the value.
     */
    public function getValue(string $key): ?int;

    /**
     * Get the values.
     *
     * @return int[] Returns the values.
     */
    public function getValues(): array;
}
