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
 * Oct trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOctTrait {

    /**
     * Oct.
     *
     * @var bool
     */
    private $oct;

    /**
     * Get the oct.
     *
     * @return bool Returns the oct.
     */
    public function getOct() {
        return $this->oct;
    }

    /**
     * Set the oct.
     *
     * @param bool $oct The oct.
     */
    public function setOct($oct) {
        $this->oct = $oct;
        return $this;
    }
}
