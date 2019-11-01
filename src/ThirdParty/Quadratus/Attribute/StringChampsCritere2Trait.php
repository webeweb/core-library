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
 * Champs critere2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritere2Trait {

    /**
     * Champs critere2.
     *
     * @var string
     */
    private $champsCritere2;

    /**
     * Get the champs critere2.
     *
     * @return string Returns the champs critere2.
     */
    public function getChampsCritere2() {
        return $this->champsCritere2;
    }

    /**
     * Set the champs critere2.
     *
     * @param string $champsCritere2 The champs critere2.
     */
    public function setChampsCritere2($champsCritere2) {
        $this->champsCritere2 = $champsCritere2;
        return $this;
    }
}
