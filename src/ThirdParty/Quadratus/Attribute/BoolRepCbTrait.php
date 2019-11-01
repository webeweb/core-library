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
 * Rep cb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepCbTrait {

    /**
     * Rep cb.
     *
     * @var bool
     */
    private $repCb;

    /**
     * Get the rep cb.
     *
     * @return bool Returns the rep cb.
     */
    public function getRepCb() {
        return $this->repCb;
    }

    /**
     * Set the rep cb.
     *
     * @param bool $repCb The rep cb.
     */
    public function setRepCb($repCb) {
        $this->repCb = $repCb;
        return $this;
    }
}
