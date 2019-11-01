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
 * Champs critere affaire3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereAffaire3Trait {

    /**
     * Champs critere affaire3.
     *
     * @var string
     */
    private $champsCritereAffaire3;

    /**
     * Get the champs critere affaire3.
     *
     * @return string Returns the champs critere affaire3.
     */
    public function getChampsCritereAffaire3() {
        return $this->champsCritereAffaire3;
    }

    /**
     * Set the champs critere affaire3.
     *
     * @param string $champsCritereAffaire3 The champs critere affaire3.
     */
    public function setChampsCritereAffaire3($champsCritereAffaire3) {
        $this->champsCritereAffaire3 = $champsCritereAffaire3;
        return $this;
    }
}
