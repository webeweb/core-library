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
 * Taux cotis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxCotisTrait {

    /**
     * Taux cotis.
     *
     * @var float
     */
    private $tauxCotis;

    /**
     * Get the taux cotis.
     *
     * @return float Returns the taux cotis.
     */
    public function getTauxCotis() {
        return $this->tauxCotis;
    }

    /**
     * Set the taux cotis.
     *
     * @param float $tauxCotis The taux cotis.
     */
    public function setTauxCotis($tauxCotis) {
        $this->tauxCotis = $tauxCotis;
        return $this;
    }
}
