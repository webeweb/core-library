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
 * z9b code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz9bCodeTrait {

    /**
     * z9b code.
     *
     * @var string
     */
    private $z9bCode;

    /**
     * Get the z9b code.
     *
     * @return string Returns the z9b code.
     */
    public function getz9bCode() {
        return $this->z9bCode;
    }

    /**
     * Set the z9b code.
     *
     * @param string $z9bCode The z9b code.
     */
    public function setz9bCode($z9bCode) {
        $this->z9bCode = $z9bCode;
        return $this;
    }
}
