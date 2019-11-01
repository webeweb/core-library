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
 * Tableau charge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTableauChargeTrait {

    /**
     * Tableau charge.
     *
     * @var string
     */
    private $tableauCharge;

    /**
     * Get the tableau charge.
     *
     * @return string Returns the tableau charge.
     */
    public function getTableauCharge() {
        return $this->tableauCharge;
    }

    /**
     * Set the tableau charge.
     *
     * @param string $tableauCharge The tableau charge.
     */
    public function setTableauCharge($tableauCharge) {
        $this->tableauCharge = $tableauCharge;
        return $this;
    }
}
