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
 * Achat par colis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAchatParColisTrait {

    /**
     * Achat par colis.
     *
     * @var bool
     */
    private $achatParColis;

    /**
     * Get the achat par colis.
     *
     * @return bool Returns the achat par colis.
     */
    public function getAchatParColis() {
        return $this->achatParColis;
    }

    /**
     * Set the achat par colis.
     *
     * @param bool $achatParColis The achat par colis.
     */
    public function setAchatParColis($achatParColis) {
        $this->achatParColis = $achatParColis;
        return $this;
    }
}
