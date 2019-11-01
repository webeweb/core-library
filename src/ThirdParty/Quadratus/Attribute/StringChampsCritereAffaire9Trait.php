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
 * Champs critere affaire9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereAffaire9Trait {

    /**
     * Champs critere affaire9.
     *
     * @var string
     */
    private $champsCritereAffaire9;

    /**
     * Get the champs critere affaire9.
     *
     * @return string Returns the champs critere affaire9.
     */
    public function getChampsCritereAffaire9() {
        return $this->champsCritereAffaire9;
    }

    /**
     * Set the champs critere affaire9.
     *
     * @param string $champsCritereAffaire9 The champs critere affaire9.
     */
    public function setChampsCritereAffaire9($champsCritereAffaire9) {
        $this->champsCritereAffaire9 = $champsCritereAffaire9;
        return $this;
    }
}
