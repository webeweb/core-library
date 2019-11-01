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
 * Champs critere1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritere1Trait {

    /**
     * Champs critere1.
     *
     * @var string
     */
    private $champsCritere1;

    /**
     * Get the champs critere1.
     *
     * @return string Returns the champs critere1.
     */
    public function getChampsCritere1() {
        return $this->champsCritere1;
    }

    /**
     * Set the champs critere1.
     *
     * @param string $champsCritere1 The champs critere1.
     */
    public function setChampsCritere1($champsCritere1) {
        $this->champsCritere1 = $champsCritere1;
        return $this;
    }
}
