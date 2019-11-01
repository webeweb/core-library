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
 * Flg an n trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFlgAnNTrait {

    /**
     * Flg an n.
     *
     * @var bool
     */
    private $flgAnN;

    /**
     * Get the flg an n.
     *
     * @return bool Returns the flg an n.
     */
    public function getFlgAnN() {
        return $this->flgAnN;
    }

    /**
     * Set the flg an n.
     *
     * @param bool $flgAnN The flg an n.
     */
    public function setFlgAnN($flgAnN) {
        $this->flgAnN = $flgAnN;
        return $this;
    }
}
