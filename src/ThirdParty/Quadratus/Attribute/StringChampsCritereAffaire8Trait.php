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
 * Champs critere affaire8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereAffaire8Trait {

    /**
     * Champs critere affaire8.
     *
     * @var string
     */
    private $champsCritereAffaire8;

    /**
     * Get the champs critere affaire8.
     *
     * @return string Returns the champs critere affaire8.
     */
    public function getChampsCritereAffaire8() {
        return $this->champsCritereAffaire8;
    }

    /**
     * Set the champs critere affaire8.
     *
     * @param string $champsCritereAffaire8 The champs critere affaire8.
     */
    public function setChampsCritereAffaire8($champsCritereAffaire8) {
        $this->champsCritereAffaire8 = $champsCritereAffaire8;
        return $this;
    }
}
