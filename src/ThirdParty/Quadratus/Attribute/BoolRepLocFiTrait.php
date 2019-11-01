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
 * Rep loc fi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepLocFiTrait {

    /**
     * Rep loc fi.
     *
     * @var bool
     */
    private $repLocFi;

    /**
     * Get the rep loc fi.
     *
     * @return bool Returns the rep loc fi.
     */
    public function getRepLocFi() {
        return $this->repLocFi;
    }

    /**
     * Set the rep loc fi.
     *
     * @param bool $repLocFi The rep loc fi.
     */
    public function setRepLocFi($repLocFi) {
        $this->repLocFi = $repLocFi;
        return $this;
    }
}
