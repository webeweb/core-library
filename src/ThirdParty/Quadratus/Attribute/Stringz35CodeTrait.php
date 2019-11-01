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
 * z35 code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz35CodeTrait {

    /**
     * z35 code.
     *
     * @var string
     */
    private $z35Code;

    /**
     * Get the z35 code.
     *
     * @return string Returns the z35 code.
     */
    public function getz35Code() {
        return $this->z35Code;
    }

    /**
     * Set the z35 code.
     *
     * @param string $z35Code The z35 code.
     */
    public function setz35Code($z35Code) {
        $this->z35Code = $z35Code;
        return $this;
    }
}
