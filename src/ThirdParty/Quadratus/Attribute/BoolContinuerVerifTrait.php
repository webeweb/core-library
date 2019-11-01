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
 * Continuer verif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolContinuerVerifTrait {

    /**
     * Continuer verif.
     *
     * @var bool
     */
    private $continuerVerif;

    /**
     * Get the continuer verif.
     *
     * @return bool Returns the continuer verif.
     */
    public function getContinuerVerif() {
        return $this->continuerVerif;
    }

    /**
     * Set the continuer verif.
     *
     * @param bool $continuerVerif The continuer verif.
     */
    public function setContinuerVerif($continuerVerif) {
        $this->continuerVerif = $continuerVerif;
        return $this;
    }
}
