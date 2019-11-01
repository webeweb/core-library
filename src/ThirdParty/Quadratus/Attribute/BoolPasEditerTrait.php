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
 * Pas editer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasEditerTrait {

    /**
     * Pas editer.
     *
     * @var bool
     */
    private $pasEditer;

    /**
     * Get the pas editer.
     *
     * @return bool Returns the pas editer.
     */
    public function getPasEditer() {
        return $this->pasEditer;
    }

    /**
     * Set the pas editer.
     *
     * @param bool $pasEditer The pas editer.
     */
    public function setPasEditer($pasEditer) {
        $this->pasEditer = $pasEditer;
        return $this;
    }
}
