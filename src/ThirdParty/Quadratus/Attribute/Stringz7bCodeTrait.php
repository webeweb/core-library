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
 * z7b code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz7bCodeTrait {

    /**
     * z7b code.
     *
     * @var string
     */
    private $z7bCode;

    /**
     * Get the z7b code.
     *
     * @return string Returns the z7b code.
     */
    public function getz7bCode() {
        return $this->z7bCode;
    }

    /**
     * Set the z7b code.
     *
     * @param string $z7bCode The z7b code.
     */
    public function setz7bCode($z7bCode) {
        $this->z7bCode = $z7bCode;
        return $this;
    }
}
