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
 * String column trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringColumnTrait {

    /**
     * Column.
     *
     * @var string
     */
    protected $column;

    /**
     * Get the column.
     *
     * @return string Returns the column.
     */
    public function getColumn() {
        return $this->column;
    }

    /**
     * Set the column.
     *
     * @param string $column The column.
     */
    public function setColumn($column) {
        $this->column = $column;
        return $this;
    }
}
