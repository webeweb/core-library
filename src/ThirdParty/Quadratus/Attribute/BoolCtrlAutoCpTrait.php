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
 * Ctrl auto cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCtrlAutoCpTrait {

    /**
     * Ctrl auto cp.
     *
     * @var bool
     */
    private $ctrlAutoCp;

    /**
     * Get the ctrl auto cp.
     *
     * @return bool Returns the ctrl auto cp.
     */
    public function getCtrlAutoCp() {
        return $this->ctrlAutoCp;
    }

    /**
     * Set the ctrl auto cp.
     *
     * @param bool $ctrlAutoCp The ctrl auto cp.
     */
    public function setCtrlAutoCp($ctrlAutoCp) {
        $this->ctrlAutoCp = $ctrlAutoCp;
        return $this;
    }
}
