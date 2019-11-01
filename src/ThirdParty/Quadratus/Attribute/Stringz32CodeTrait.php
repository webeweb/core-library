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
 * z32 code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz32CodeTrait {

    /**
     * z32 code.
     *
     * @var string
     */
    private $z32Code;

    /**
     * Get the z32 code.
     *
     * @return string Returns the z32 code.
     */
    public function getz32Code() {
        return $this->z32Code;
    }

    /**
     * Set the z32 code.
     *
     * @param string $z32Code The z32 code.
     */
    public function setz32Code($z32Code) {
        $this->z32Code = $z32Code;
        return $this;
    }
}
