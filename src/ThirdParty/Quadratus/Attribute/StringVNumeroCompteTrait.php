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
 * V numero compte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVNumeroCompteTrait {

    /**
     * V numero compte.
     *
     * @var string
     */
    private $vNumeroCompte;

    /**
     * Get the v numero compte.
     *
     * @return string Returns the v numero compte.
     */
    public function getVNumeroCompte() {
        return $this->vNumeroCompte;
    }

    /**
     * Set the v numero compte.
     *
     * @param string $vNumeroCompte The v numero compte.
     */
    public function setVNumeroCompte($vNumeroCompte) {
        $this->vNumeroCompte = $vNumeroCompte;
        return $this;
    }
}
