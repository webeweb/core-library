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
 * Px achat en devise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxAchatEnDeviseTrait {

    /**
     * Px achat en devise.
     *
     * @var float
     */
    private $pxAchatEnDevise;

    /**
     * Get the px achat en devise.
     *
     * @return float Returns the px achat en devise.
     */
    public function getPxAchatEnDevise() {
        return $this->pxAchatEnDevise;
    }

    /**
     * Set the px achat en devise.
     *
     * @param float $pxAchatEnDevise The px achat en devise.
     */
    public function setPxAchatEnDevise($pxAchatEnDevise) {
        $this->pxAchatEnDevise = $pxAchatEnDevise;
        return $this;
    }
}
