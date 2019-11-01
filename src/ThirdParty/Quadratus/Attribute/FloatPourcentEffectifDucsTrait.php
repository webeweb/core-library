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
 * Pourcent effectif ducs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentEffectifDucsTrait {

    /**
     * Pourcent effectif ducs.
     *
     * @var float
     */
    private $pourcentEffectifDucs;

    /**
     * Get the pourcent effectif ducs.
     *
     * @return float Returns the pourcent effectif ducs.
     */
    public function getPourcentEffectifDucs() {
        return $this->pourcentEffectifDucs;
    }

    /**
     * Set the pourcent effectif ducs.
     *
     * @param float $pourcentEffectifDucs The pourcent effectif ducs.
     */
    public function setPourcentEffectifDucs($pourcentEffectifDucs) {
        $this->pourcentEffectifDucs = $pourcentEffectifDucs;
        return $this;
    }
}
