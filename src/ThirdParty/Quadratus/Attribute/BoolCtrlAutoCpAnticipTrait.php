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
 * Ctrl auto cp anticip trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCtrlAutoCpAnticipTrait {

    /**
     * Ctrl auto cp anticip.
     *
     * @var bool
     */
    private $ctrlAutoCpAnticip;

    /**
     * Get the ctrl auto cp anticip.
     *
     * @return bool Returns the ctrl auto cp anticip.
     */
    public function getCtrlAutoCpAnticip() {
        return $this->ctrlAutoCpAnticip;
    }

    /**
     * Set the ctrl auto cp anticip.
     *
     * @param bool $ctrlAutoCpAnticip The ctrl auto cp anticip.
     */
    public function setCtrlAutoCpAnticip($ctrlAutoCpAnticip) {
        $this->ctrlAutoCpAnticip = $ctrlAutoCpAnticip;
        return $this;
    }
}
