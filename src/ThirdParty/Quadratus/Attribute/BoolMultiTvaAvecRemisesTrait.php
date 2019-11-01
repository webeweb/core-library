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
 * Multi tva avec remises trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMultiTvaAvecRemisesTrait {

    /**
     * Multi tva avec remises.
     *
     * @var bool
     */
    private $multiTvaAvecRemises;

    /**
     * Get the multi tva avec remises.
     *
     * @return bool Returns the multi tva avec remises.
     */
    public function getMultiTvaAvecRemises() {
        return $this->multiTvaAvecRemises;
    }

    /**
     * Set the multi tva avec remises.
     *
     * @param bool $multiTvaAvecRemises The multi tva avec remises.
     */
    public function setMultiTvaAvecRemises($multiTvaAvecRemises) {
        $this->multiTvaAvecRemises = $multiTvaAvecRemises;
        return $this;
    }
}
