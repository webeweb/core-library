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
 * Cotis base penibilite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCotisBasePenibiliteTrait {

    /**
     * Cotis base penibilite.
     *
     * @var bool
     */
    private $cotisBasePenibilite;

    /**
     * Get the cotis base penibilite.
     *
     * @return bool Returns the cotis base penibilite.
     */
    public function getCotisBasePenibilite() {
        return $this->cotisBasePenibilite;
    }

    /**
     * Set the cotis base penibilite.
     *
     * @param bool $cotisBasePenibilite The cotis base penibilite.
     */
    public function setCotisBasePenibilite($cotisBasePenibilite) {
        $this->cotisBasePenibilite = $cotisBasePenibilite;
        return $this;
    }
}
