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
 * Champs critere8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritere8Trait {

    /**
     * Champs critere8.
     *
     * @var string
     */
    private $champsCritere8;

    /**
     * Get the champs critere8.
     *
     * @return string Returns the champs critere8.
     */
    public function getChampsCritere8() {
        return $this->champsCritere8;
    }

    /**
     * Set the champs critere8.
     *
     * @param string $champsCritere8 The champs critere8.
     */
    public function setChampsCritere8($champsCritere8) {
        $this->champsCritere8 = $champsCritere8;
        return $this;
    }
}
