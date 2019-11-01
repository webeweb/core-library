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
 * Type bens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeBensTrait {

    /**
     * Type bens.
     *
     * @var string
     */
    private $typeBens;

    /**
     * Get the type bens.
     *
     * @return string Returns the type bens.
     */
    public function getTypeBens() {
        return $this->typeBens;
    }

    /**
     * Set the type bens.
     *
     * @param string $typeBens The type bens.
     */
    public function setTypeBens($typeBens) {
        $this->typeBens = $typeBens;
        return $this;
    }
}
