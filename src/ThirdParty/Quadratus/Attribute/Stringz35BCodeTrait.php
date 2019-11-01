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
 * z35 b code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz35BCodeTrait {

    /**
     * z35 b code.
     *
     * @var string
     */
    private $z35BCode;

    /**
     * Get the z35 b code.
     *
     * @return string Returns the z35 b code.
     */
    public function getz35BCode() {
        return $this->z35BCode;
    }

    /**
     * Set the z35 b code.
     *
     * @param string $z35BCode The z35 b code.
     */
    public function setz35BCode($z35BCode) {
        $this->z35BCode = $z35BCode;
        return $this;
    }
}
