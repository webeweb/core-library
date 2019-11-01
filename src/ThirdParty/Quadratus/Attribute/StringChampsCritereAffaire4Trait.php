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
 * Champs critere affaire4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereAffaire4Trait {

    /**
     * Champs critere affaire4.
     *
     * @var string
     */
    private $champsCritereAffaire4;

    /**
     * Get the champs critere affaire4.
     *
     * @return string Returns the champs critere affaire4.
     */
    public function getChampsCritereAffaire4() {
        return $this->champsCritereAffaire4;
    }

    /**
     * Set the champs critere affaire4.
     *
     * @param string $champsCritereAffaire4 The champs critere affaire4.
     */
    public function setChampsCritereAffaire4($champsCritereAffaire4) {
        $this->champsCritereAffaire4 = $champsCritereAffaire4;
        return $this;
    }
}
