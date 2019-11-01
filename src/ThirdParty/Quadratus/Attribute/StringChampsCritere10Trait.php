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
 * Champs critere10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritere10Trait {

    /**
     * Champs critere10.
     *
     * @var string
     */
    private $champsCritere10;

    /**
     * Get the champs critere10.
     *
     * @return string Returns the champs critere10.
     */
    public function getChampsCritere10() {
        return $this->champsCritere10;
    }

    /**
     * Set the champs critere10.
     *
     * @param string $champsCritere10 The champs critere10.
     */
    public function setChampsCritere10($champsCritere10) {
        $this->champsCritere10 = $champsCritere10;
        return $this;
    }
}
