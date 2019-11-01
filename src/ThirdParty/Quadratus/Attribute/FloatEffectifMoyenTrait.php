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
 * Effectif moyen trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatEffectifMoyenTrait {

    /**
     * Effectif moyen.
     *
     * @var float
     */
    private $effectifMoyen;

    /**
     * Get the effectif moyen.
     *
     * @return float Returns the effectif moyen.
     */
    public function getEffectifMoyen() {
        return $this->effectifMoyen;
    }

    /**
     * Set the effectif moyen.
     *
     * @param float $effectifMoyen The effectif moyen.
     */
    public function setEffectifMoyen($effectifMoyen) {
        $this->effectifMoyen = $effectifMoyen;
        return $this;
    }
}
