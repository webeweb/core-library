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
 * Gen auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGenAutoTrait {

    /**
     * Gen auto.
     *
     * @var bool
     */
    private $genAuto;

    /**
     * Get the gen auto.
     *
     * @return bool Returns the gen auto.
     */
    public function getGenAuto() {
        return $this->genAuto;
    }

    /**
     * Set the gen auto.
     *
     * @param bool $genAuto The gen auto.
     */
    public function setGenAuto($genAuto) {
        $this->genAuto = $genAuto;
        return $this;
    }
}
