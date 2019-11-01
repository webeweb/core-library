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
 * Pourcent exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentExoTrait {

    /**
     * Pourcent exo.
     *
     * @var float
     */
    private $pourcentExo;

    /**
     * Get the pourcent exo.
     *
     * @return float Returns the pourcent exo.
     */
    public function getPourcentExo() {
        return $this->pourcentExo;
    }

    /**
     * Set the pourcent exo.
     *
     * @param float $pourcentExo The pourcent exo.
     */
    public function setPourcentExo($pourcentExo) {
        $this->pourcentExo = $pourcentExo;
        return $this;
    }
}
