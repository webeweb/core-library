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
 * Tva type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaTypeTrait {

    /**
     * Tva type.
     *
     * @var string
     */
    private $tvaType;

    /**
     * Get the tva type.
     *
     * @return string Returns the tva type.
     */
    public function getTvaType() {
        return $this->tvaType;
    }

    /**
     * Set the tva type.
     *
     * @param string $tvaType The tva type.
     */
    public function setTvaType($tvaType) {
        $this->tvaType = $tvaType;
        return $this;
    }
}
