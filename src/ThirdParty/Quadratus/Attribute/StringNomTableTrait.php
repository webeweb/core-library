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
 * Nom table trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomTableTrait {

    /**
     * Nom table.
     *
     * @var string
     */
    private $nomTable;

    /**
     * Get the nom table.
     *
     * @return string Returns the nom table.
     */
    public function getNomTable() {
        return $this->nomTable;
    }

    /**
     * Set the nom table.
     *
     * @param string $nomTable The nom table.
     */
    public function setNomTable($nomTable) {
        $this->nomTable = $nomTable;
        return $this;
    }
}
