<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Init table trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInitTableTrait {

    /**
     * Init table.
     *
     * @var string
     */
    private $initTable;

    /**
     * Get the init table.
     *
     * @return string Returns the init table.
     */
    public function getInitTable() {
        return $this->initTable;
    }

    /**
     * Set the init table.
     *
     * @param string $initTable The init table.
     */
    public function setInitTable($initTable) {
        $this->initTable = $initTable;
        return $this;
    }
}
