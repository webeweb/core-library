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
 * Lcr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLcrTrait {

    /**
     * Lcr.
     *
     * @var bool
     */
    private $lcr;

    /**
     * Get the lcr.
     *
     * @return bool Returns the lcr.
     */
    public function getLcr() {
        return $this->lcr;
    }

    /**
     * Set the lcr.
     *
     * @param bool $lcr The lcr.
     */
    public function setLcr($lcr) {
        $this->lcr = $lcr;
        return $this;
    }
}
