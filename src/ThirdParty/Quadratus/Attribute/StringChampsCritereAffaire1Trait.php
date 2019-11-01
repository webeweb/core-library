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
 * Champs critere affaire1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereAffaire1Trait {

    /**
     * Champs critere affaire1.
     *
     * @var string
     */
    private $champsCritereAffaire1;

    /**
     * Get the champs critere affaire1.
     *
     * @return string Returns the champs critere affaire1.
     */
    public function getChampsCritereAffaire1() {
        return $this->champsCritereAffaire1;
    }

    /**
     * Set the champs critere affaire1.
     *
     * @param string $champsCritereAffaire1 The champs critere affaire1.
     */
    public function setChampsCritereAffaire1($champsCritereAffaire1) {
        $this->champsCritereAffaire1 = $champsCritereAffaire1;
        return $this;
    }
}
