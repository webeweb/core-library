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
 * Taux hs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTauxHsTrait {

    /**
     * Taux hs.
     *
     * @var int
     */
    private $tauxHs;

    /**
     * Get the taux hs.
     *
     * @return int Returns the taux hs.
     */
    public function getTauxHs() {
        return $this->tauxHs;
    }

    /**
     * Set the taux hs.
     *
     * @param int $tauxHs The taux hs.
     */
    public function setTauxHs($tauxHs) {
        $this->tauxHs = $tauxHs;
        return $this;
    }
}
