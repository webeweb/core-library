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
 * Carte appel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCarteAppelTrait {

    /**
     * Carte appel.
     *
     * @var string
     */
    private $carteAppel;

    /**
     * Get the carte appel.
     *
     * @return string Returns the carte appel.
     */
    public function getCarteAppel() {
        return $this->carteAppel;
    }

    /**
     * Set the carte appel.
     *
     * @param string $carteAppel The carte appel.
     */
    public function setCarteAppel($carteAppel) {
        $this->carteAppel = $carteAppel;
        return $this;
    }
}
