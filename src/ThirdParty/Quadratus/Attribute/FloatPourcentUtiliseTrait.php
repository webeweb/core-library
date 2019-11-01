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
 * Pourcent utilise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentUtiliseTrait {

    /**
     * Pourcent utilise.
     *
     * @var float
     */
    private $pourcentUtilise;

    /**
     * Get the pourcent utilise.
     *
     * @return float Returns the pourcent utilise.
     */
    public function getPourcentUtilise() {
        return $this->pourcentUtilise;
    }

    /**
     * Set the pourcent utilise.
     *
     * @param float $pourcentUtilise The pourcent utilise.
     */
    public function setPourcentUtilise($pourcentUtilise) {
        $this->pourcentUtilise = $pourcentUtilise;
        return $this;
    }
}
