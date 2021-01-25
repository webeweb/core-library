<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String table trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringTableTrait {

    /**
     * Table.
     *
     * @var string|null
     */
    protected $table;

    /**
     * Get the table.
     *
     * @return string|null Returns the table.
     */
    public function getTable(): ?string {
        return $this->table;
    }

    /**
     * Set the table.
     *
     * @param string|null $table The table.
     * @return self Returns this instance.
     */
    public function setTable(?string $table): self {
        $this->table = $table;
        return $this;
    }
}
