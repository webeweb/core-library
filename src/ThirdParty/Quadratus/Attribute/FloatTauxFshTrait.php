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
 * Taux fsh trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxFshTrait {

    /**
     * Taux fsh.
     *
     * @var float
     */
    private $tauxFsh;

    /**
     * Get the taux fsh.
     *
     * @return float Returns the taux fsh.
     */
    public function getTauxFsh() {
        return $this->tauxFsh;
    }

    /**
     * Set the taux fsh.
     *
     * @param float $tauxFsh The taux fsh.
     */
    public function setTauxFsh($tauxFsh) {
        $this->tauxFsh = $tauxFsh;
        return $this;
    }
}
