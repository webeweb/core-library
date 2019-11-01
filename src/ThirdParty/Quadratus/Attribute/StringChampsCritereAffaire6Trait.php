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
 * Champs critere affaire6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereAffaire6Trait {

    /**
     * Champs critere affaire6.
     *
     * @var string
     */
    private $champsCritereAffaire6;

    /**
     * Get the champs critere affaire6.
     *
     * @return string Returns the champs critere affaire6.
     */
    public function getChampsCritereAffaire6() {
        return $this->champsCritereAffaire6;
    }

    /**
     * Set the champs critere affaire6.
     *
     * @param string $champsCritereAffaire6 The champs critere affaire6.
     */
    public function setChampsCritereAffaire6($champsCritereAffaire6) {
        $this->champsCritereAffaire6 = $champsCritereAffaire6;
        return $this;
    }
}
