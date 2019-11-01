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
 * Champs critere4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritere4Trait {

    /**
     * Champs critere4.
     *
     * @var string
     */
    private $champsCritere4;

    /**
     * Get the champs critere4.
     *
     * @return string Returns the champs critere4.
     */
    public function getChampsCritere4() {
        return $this->champsCritere4;
    }

    /**
     * Set the champs critere4.
     *
     * @param string $champsCritere4 The champs critere4.
     */
    public function setChampsCritere4($champsCritere4) {
        $this->champsCritere4 = $champsCritere4;
        return $this;
    }
}
