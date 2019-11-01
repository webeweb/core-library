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
 * z4 bca12 code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz4Bca12CodeTrait {

    /**
     * z4 bca12 code.
     *
     * @var string
     */
    private $z4Bca12Code;

    /**
     * Get the z4 bca12 code.
     *
     * @return string Returns the z4 bca12 code.
     */
    public function getz4Bca12Code() {
        return $this->z4Bca12Code;
    }

    /**
     * Set the z4 bca12 code.
     *
     * @param string $z4Bca12Code The z4 bca12 code.
     */
    public function setz4Bca12Code($z4Bca12Code) {
        $this->z4Bca12Code = $z4Bca12Code;
        return $this;
    }
}
