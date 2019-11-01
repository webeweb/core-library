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
 * Super carbu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuperCarbuTrait {

    /**
     * Super carbu.
     *
     * @var bool
     */
    private $superCarbu;

    /**
     * Get the super carbu.
     *
     * @return bool Returns the super carbu.
     */
    public function getSuperCarbu() {
        return $this->superCarbu;
    }

    /**
     * Set the super carbu.
     *
     * @param bool $superCarbu The super carbu.
     */
    public function setSuperCarbu($superCarbu) {
        $this->superCarbu = $superCarbu;
        return $this;
    }
}
