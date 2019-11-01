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
 * Prive trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPriveTrait {

    /**
     * Prive.
     *
     * @var bool
     */
    private $prive;

    /**
     * Get the prive.
     *
     * @return bool Returns the prive.
     */
    public function getPrive() {
        return $this->prive;
    }

    /**
     * Set the prive.
     *
     * @param bool $prive The prive.
     */
    public function setPrive($prive) {
        $this->prive = $prive;
        return $this;
    }
}
