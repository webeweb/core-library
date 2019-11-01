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
 * Temps exposition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTempsExpositionTrait {

    /**
     * Temps exposition.
     *
     * @var float
     */
    private $tempsExposition;

    /**
     * Get the temps exposition.
     *
     * @return float Returns the temps exposition.
     */
    public function getTempsExposition() {
        return $this->tempsExposition;
    }

    /**
     * Set the temps exposition.
     *
     * @param float $tempsExposition The temps exposition.
     */
    public function setTempsExposition($tempsExposition) {
        $this->tempsExposition = $tempsExposition;
        return $this;
    }
}
