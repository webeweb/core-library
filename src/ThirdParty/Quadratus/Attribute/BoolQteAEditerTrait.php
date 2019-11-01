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
 * Qte a editer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolQteAEditerTrait {

    /**
     * Qte a editer.
     *
     * @var bool
     */
    private $qteAEditer;

    /**
     * Get the qte a editer.
     *
     * @return bool Returns the qte a editer.
     */
    public function getQteAEditer() {
        return $this->qteAEditer;
    }

    /**
     * Set the qte a editer.
     *
     * @param bool $qteAEditer The qte a editer.
     */
    public function setQteAEditer($qteAEditer) {
        $this->qteAEditer = $qteAEditer;
        return $this;
    }
}
