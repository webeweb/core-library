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
 * z5b code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz5bCodeTrait {

    /**
     * z5b code.
     *
     * @var string
     */
    private $z5bCode;

    /**
     * Get the z5b code.
     *
     * @return string Returns the z5b code.
     */
    public function getz5bCode() {
        return $this->z5bCode;
    }

    /**
     * Set the z5b code.
     *
     * @param string $z5bCode The z5b code.
     */
    public function setz5bCode($z5bCode) {
        $this->z5bCode = $z5bCode;
        return $this;
    }
}
