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
 * Traitement dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTraitementDadsuTrait {

    /**
     * Traitement dadsu.
     *
     * @var bool
     */
    private $traitementDadsu;

    /**
     * Get the traitement dadsu.
     *
     * @return bool Returns the traitement dadsu.
     */
    public function getTraitementDadsu() {
        return $this->traitementDadsu;
    }

    /**
     * Set the traitement dadsu.
     *
     * @param bool $traitementDadsu The traitement dadsu.
     */
    public function setTraitementDadsu($traitementDadsu) {
        $this->traitementDadsu = $traitementDadsu;
        return $this;
    }
}
