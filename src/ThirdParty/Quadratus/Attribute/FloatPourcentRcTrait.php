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
 * Pourcent rc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentRcTrait {

    /**
     * Pourcent rc.
     *
     * @var float
     */
    private $pourcentRc;

    /**
     * Get the pourcent rc.
     *
     * @return float Returns the pourcent rc.
     */
    public function getPourcentRc() {
        return $this->pourcentRc;
    }

    /**
     * Set the pourcent rc.
     *
     * @param float $pourcentRc The pourcent rc.
     */
    public function setPourcentRc($pourcentRc) {
        $this->pourcentRc = $pourcentRc;
        return $this;
    }
}
