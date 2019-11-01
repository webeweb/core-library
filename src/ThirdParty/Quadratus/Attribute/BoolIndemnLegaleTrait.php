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
 * Indemn legale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIndemnLegaleTrait {

    /**
     * Indemn legale.
     *
     * @var bool
     */
    private $indemnLegale;

    /**
     * Get the indemn legale.
     *
     * @return bool Returns the indemn legale.
     */
    public function getIndemnLegale() {
        return $this->indemnLegale;
    }

    /**
     * Set the indemn legale.
     *
     * @param bool $indemnLegale The indemn legale.
     */
    public function setIndemnLegale($indemnLegale) {
        $this->indemnLegale = $indemnLegale;
        return $this;
    }
}
