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
 * Maladie pro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMaladieProTrait {

    /**
     * Maladie pro.
     *
     * @var bool
     */
    private $maladiePro;

    /**
     * Get the maladie pro.
     *
     * @return bool Returns the maladie pro.
     */
    public function getMaladiePro() {
        return $this->maladiePro;
    }

    /**
     * Set the maladie pro.
     *
     * @param bool $maladiePro The maladie pro.
     */
    public function setMaladiePro($maladiePro) {
        $this->maladiePro = $maladiePro;
        return $this;
    }
}
