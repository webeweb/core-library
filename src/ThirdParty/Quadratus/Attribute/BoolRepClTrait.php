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
 * Rep cl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepClTrait {

    /**
     * Rep cl.
     *
     * @var bool
     */
    private $repCl;

    /**
     * Get the rep cl.
     *
     * @return bool Returns the rep cl.
     */
    public function getRepCl() {
        return $this->repCl;
    }

    /**
     * Set the rep cl.
     *
     * @param bool $repCl The rep cl.
     */
    public function setRepCl($repCl) {
        $this->repCl = $repCl;
        return $this;
    }
}
