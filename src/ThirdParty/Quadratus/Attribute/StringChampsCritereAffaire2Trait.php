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
 * Champs critere affaire2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereAffaire2Trait {

    /**
     * Champs critere affaire2.
     *
     * @var string
     */
    private $champsCritereAffaire2;

    /**
     * Get the champs critere affaire2.
     *
     * @return string Returns the champs critere affaire2.
     */
    public function getChampsCritereAffaire2() {
        return $this->champsCritereAffaire2;
    }

    /**
     * Set the champs critere affaire2.
     *
     * @param string $champsCritereAffaire2 The champs critere affaire2.
     */
    public function setChampsCritereAffaire2($champsCritereAffaire2) {
        $this->champsCritereAffaire2 = $champsCritereAffaire2;
        return $this;
    }
}
