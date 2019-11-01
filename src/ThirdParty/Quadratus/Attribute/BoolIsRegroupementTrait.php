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
 * Is regroupement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIsRegroupementTrait {

    /**
     * Is regroupement.
     *
     * @var bool
     */
    private $isRegroupement;

    /**
     * Get the is regroupement.
     *
     * @return bool Returns the is regroupement.
     */
    public function getIsRegroupement() {
        return $this->isRegroupement;
    }

    /**
     * Set the is regroupement.
     *
     * @param bool $isRegroupement The is regroupement.
     */
    public function setIsRegroupement($isRegroupement) {
        $this->isRegroupement = $isRegroupement;
        return $this;
    }
}
