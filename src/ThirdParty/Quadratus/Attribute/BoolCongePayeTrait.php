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
 * Conge paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCongePayeTrait {

    /**
     * Conge paye.
     *
     * @var bool
     */
    private $congePaye;

    /**
     * Get the conge paye.
     *
     * @return bool Returns the conge paye.
     */
    public function getCongePaye() {
        return $this->congePaye;
    }

    /**
     * Set the conge paye.
     *
     * @param bool $congePaye The conge paye.
     */
    public function setCongePaye($congePaye) {
        $this->congePaye = $congePaye;
        return $this;
    }
}
