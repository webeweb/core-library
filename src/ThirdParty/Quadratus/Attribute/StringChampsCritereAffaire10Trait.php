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
 * Champs critere affaire10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereAffaire10Trait {

    /**
     * Champs critere affaire10.
     *
     * @var string
     */
    private $champsCritereAffaire10;

    /**
     * Get the champs critere affaire10.
     *
     * @return string Returns the champs critere affaire10.
     */
    public function getChampsCritereAffaire10() {
        return $this->champsCritereAffaire10;
    }

    /**
     * Set the champs critere affaire10.
     *
     * @param string $champsCritereAffaire10 The champs critere affaire10.
     */
    public function setChampsCritereAffaire10($champsCritereAffaire10) {
        $this->champsCritereAffaire10 = $champsCritereAffaire10;
        return $this;
    }
}
