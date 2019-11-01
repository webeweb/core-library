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
 * Taux ancien trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxAncienTrait {

    /**
     * Taux ancien.
     *
     * @var float
     */
    private $tauxAncien;

    /**
     * Get the taux ancien.
     *
     * @return float Returns the taux ancien.
     */
    public function getTauxAncien() {
        return $this->tauxAncien;
    }

    /**
     * Set the taux ancien.
     *
     * @param float $tauxAncien The taux ancien.
     */
    public function setTauxAncien($tauxAncien) {
        $this->tauxAncien = $tauxAncien;
        return $this;
    }
}
