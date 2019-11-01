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
 * Com sur marge brute trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolComSurMargeBruteTrait {

    /**
     * Com sur marge brute.
     *
     * @var bool
     */
    private $comSurMargeBrute;

    /**
     * Get the com sur marge brute.
     *
     * @return bool Returns the com sur marge brute.
     */
    public function getComSurMargeBrute() {
        return $this->comSurMargeBrute;
    }

    /**
     * Set the com sur marge brute.
     *
     * @param bool $comSurMargeBrute The com sur marge brute.
     */
    public function setComSurMargeBrute($comSurMargeBrute) {
        $this->comSurMargeBrute = $comSurMargeBrute;
        return $this;
    }
}
