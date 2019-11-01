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
 * Champs critere9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritere9Trait {

    /**
     * Champs critere9.
     *
     * @var string
     */
    private $champsCritere9;

    /**
     * Get the champs critere9.
     *
     * @return string Returns the champs critere9.
     */
    public function getChampsCritere9() {
        return $this->champsCritere9;
    }

    /**
     * Set the champs critere9.
     *
     * @param string $champsCritere9 The champs critere9.
     */
    public function setChampsCritere9($champsCritere9) {
        $this->champsCritere9 = $champsCritere9;
        return $this;
    }
}
