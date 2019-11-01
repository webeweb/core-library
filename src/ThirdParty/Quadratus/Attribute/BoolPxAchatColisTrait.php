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
 * Px achat colis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPxAchatColisTrait {

    /**
     * Px achat colis.
     *
     * @var bool
     */
    private $pxAchatColis;

    /**
     * Get the px achat colis.
     *
     * @return bool Returns the px achat colis.
     */
    public function getPxAchatColis() {
        return $this->pxAchatColis;
    }

    /**
     * Set the px achat colis.
     *
     * @param bool $pxAchatColis The px achat colis.
     */
    public function setPxAchatColis($pxAchatColis) {
        $this->pxAchatColis = $pxAchatColis;
        return $this;
    }
}
