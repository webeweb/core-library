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
 * Nb h non effectue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHNonEffectueTrait {

    /**
     * Nb h non effectue.
     *
     * @var float
     */
    private $nbHNonEffectue;

    /**
     * Get the nb h non effectue.
     *
     * @return float Returns the nb h non effectue.
     */
    public function getNbHNonEffectue() {
        return $this->nbHNonEffectue;
    }

    /**
     * Set the nb h non effectue.
     *
     * @param float $nbHNonEffectue The nb h non effectue.
     */
    public function setNbHNonEffectue($nbHNonEffectue) {
        $this->nbHNonEffectue = $nbHNonEffectue;
        return $this;
    }
}
