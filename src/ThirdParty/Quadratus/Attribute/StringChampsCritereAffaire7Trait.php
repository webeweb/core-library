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
 * Champs critere affaire7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereAffaire7Trait {

    /**
     * Champs critere affaire7.
     *
     * @var string
     */
    private $champsCritereAffaire7;

    /**
     * Get the champs critere affaire7.
     *
     * @return string Returns the champs critere affaire7.
     */
    public function getChampsCritereAffaire7() {
        return $this->champsCritereAffaire7;
    }

    /**
     * Set the champs critere affaire7.
     *
     * @param string $champsCritereAffaire7 The champs critere affaire7.
     */
    public function setChampsCritereAffaire7($champsCritereAffaire7) {
        $this->champsCritereAffaire7 = $champsCritereAffaire7;
        return $this;
    }
}
