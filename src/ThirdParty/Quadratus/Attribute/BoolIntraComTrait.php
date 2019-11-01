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
 * Intra com trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIntraComTrait {

    /**
     * Intra com.
     *
     * @var bool
     */
    private $intraCom;

    /**
     * Get the intra com.
     *
     * @return bool Returns the intra com.
     */
    public function getIntraCom() {
        return $this->intraCom;
    }

    /**
     * Set the intra com.
     *
     * @param bool $intraCom The intra com.
     */
    public function setIntraCom($intraCom) {
        $this->intraCom = $intraCom;
        return $this;
    }
}
