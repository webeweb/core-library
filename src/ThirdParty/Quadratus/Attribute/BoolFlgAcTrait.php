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
 * Flg ac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFlgAcTrait {

    /**
     * Flg ac.
     *
     * @var bool
     */
    private $flgAc;

    /**
     * Get the flg ac.
     *
     * @return bool Returns the flg ac.
     */
    public function getFlgAc() {
        return $this->flgAc;
    }

    /**
     * Set the flg ac.
     *
     * @param bool $flgAc The flg ac.
     */
    public function setFlgAc($flgAc) {
        $this->flgAc = $flgAc;
        return $this;
    }
}
