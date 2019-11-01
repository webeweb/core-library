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
 * Code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCodeTrait {

    /**
     * Code.
     *
     * @var int
     */
    private $code;

    /**
     * Get the code.
     *
     * @return int Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set the code.
     *
     * @param int $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }
}
