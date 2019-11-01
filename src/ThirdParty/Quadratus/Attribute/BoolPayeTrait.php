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
 * Paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPayeTrait {

    /**
     * Paye.
     *
     * @var bool
     */
    private $paye;

    /**
     * Get the paye.
     *
     * @return bool Returns the paye.
     */
    public function getPaye() {
        return $this->paye;
    }

    /**
     * Set the paye.
     *
     * @param bool $paye The paye.
     */
    public function setPaye($paye) {
        $this->paye = $paye;
        return $this;
    }
}
