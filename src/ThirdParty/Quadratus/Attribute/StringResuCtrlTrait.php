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
 * Resu ctrl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringResuCtrlTrait {

    /**
     * Resu ctrl.
     *
     * @var string
     */
    private $resuCtrl;

    /**
     * Get the resu ctrl.
     *
     * @return string Returns the resu ctrl.
     */
    public function getResuCtrl() {
        return $this->resuCtrl;
    }

    /**
     * Set the resu ctrl.
     *
     * @param string $resuCtrl The resu ctrl.
     */
    public function setResuCtrl($resuCtrl) {
        $this->resuCtrl = $resuCtrl;
        return $this;
    }
}
