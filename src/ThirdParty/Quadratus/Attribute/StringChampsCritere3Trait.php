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
 * Champs critere3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritere3Trait {

    /**
     * Champs critere3.
     *
     * @var string
     */
    private $champsCritere3;

    /**
     * Get the champs critere3.
     *
     * @return string Returns the champs critere3.
     */
    public function getChampsCritere3() {
        return $this->champsCritere3;
    }

    /**
     * Set the champs critere3.
     *
     * @param string $champsCritere3 The champs critere3.
     */
    public function setChampsCritere3($champsCritere3) {
        $this->champsCritere3 = $champsCritere3;
        return $this;
    }
}
