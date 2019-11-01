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
 * Tableau de bord trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTableauDeBordTrait {

    /**
     * Tableau de bord.
     *
     * @var string
     */
    private $tableauDeBord;

    /**
     * Get the tableau de bord.
     *
     * @return string Returns the tableau de bord.
     */
    public function getTableauDeBord() {
        return $this->tableauDeBord;
    }

    /**
     * Set the tableau de bord.
     *
     * @param string $tableauDeBord The tableau de bord.
     */
    public function setTableauDeBord($tableauDeBord) {
        $this->tableauDeBord = $tableauDeBord;
        return $this;
    }
}
