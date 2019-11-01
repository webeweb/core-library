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
 * Id tableau trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIdTableauTrait {

    /**
     * Id tableau.
     *
     * @var int
     */
    private $idTableau;

    /**
     * Get the id tableau.
     *
     * @return int Returns the id tableau.
     */
    public function getIdTableau() {
        return $this->idTableau;
    }

    /**
     * Set the id tableau.
     *
     * @param int $idTableau The id tableau.
     */
    public function setIdTableau($idTableau) {
        $this->idTableau = $idTableau;
        return $this;
    }
}
