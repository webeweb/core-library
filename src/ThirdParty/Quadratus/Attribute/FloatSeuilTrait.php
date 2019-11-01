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
 * Seuil trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSeuilTrait {

    /**
     * Seuil.
     *
     * @var float
     */
    private $seuil;

    /**
     * Get the seuil.
     *
     * @return float Returns the seuil.
     */
    public function getSeuil() {
        return $this->seuil;
    }

    /**
     * Set the seuil.
     *
     * @param float $seuil The seuil.
     */
    public function setSeuil($seuil) {
        $this->seuil = $seuil;
        return $this;
    }
}
