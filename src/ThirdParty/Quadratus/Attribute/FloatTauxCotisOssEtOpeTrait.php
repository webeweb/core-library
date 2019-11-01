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
 * Taux cotis oss et ope trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxCotisOssEtOpeTrait {

    /**
     * Taux cotis oss et ope.
     *
     * @var float
     */
    private $tauxCotisOssEtOpe;

    /**
     * Get the taux cotis oss et ope.
     *
     * @return float Returns the taux cotis oss et ope.
     */
    public function getTauxCotisOssEtOpe() {
        return $this->tauxCotisOssEtOpe;
    }

    /**
     * Set the taux cotis oss et ope.
     *
     * @param float $tauxCotisOssEtOpe The taux cotis oss et ope.
     */
    public function setTauxCotisOssEtOpe($tauxCotisOssEtOpe) {
        $this->tauxCotisOssEtOpe = $tauxCotisOssEtOpe;
        return $this;
    }
}
