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
 * Champs critere affaire5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritereAffaire5Trait {

    /**
     * Champs critere affaire5.
     *
     * @var string
     */
    private $champsCritereAffaire5;

    /**
     * Get the champs critere affaire5.
     *
     * @return string Returns the champs critere affaire5.
     */
    public function getChampsCritereAffaire5() {
        return $this->champsCritereAffaire5;
    }

    /**
     * Set the champs critere affaire5.
     *
     * @param string $champsCritereAffaire5 The champs critere affaire5.
     */
    public function setChampsCritereAffaire5($champsCritereAffaire5) {
        $this->champsCritereAffaire5 = $champsCritereAffaire5;
        return $this;
    }
}
