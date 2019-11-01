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
 * Avantages euro ou franc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAvantagesEuroOuFrancTrait {

    /**
     * Avantages euro ou franc.
     *
     * @var string
     */
    private $avantagesEuroOuFranc;

    /**
     * Get the avantages euro ou franc.
     *
     * @return string Returns the avantages euro ou franc.
     */
    public function getAvantagesEuroOuFranc() {
        return $this->avantagesEuroOuFranc;
    }

    /**
     * Set the avantages euro ou franc.
     *
     * @param string $avantagesEuroOuFranc The avantages euro ou franc.
     */
    public function setAvantagesEuroOuFranc($avantagesEuroOuFranc) {
        $this->avantagesEuroOuFranc = $avantagesEuroOuFranc;
        return $this;
    }
}
