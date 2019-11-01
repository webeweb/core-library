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
 * z4 cca12 code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz4Cca12CodeTrait {

    /**
     * z4 cca12 code.
     *
     * @var string
     */
    private $z4Cca12Code;

    /**
     * Get the z4 cca12 code.
     *
     * @return string Returns the z4 cca12 code.
     */
    public function getz4Cca12Code() {
        return $this->z4Cca12Code;
    }

    /**
     * Set the z4 cca12 code.
     *
     * @param string $z4Cca12Code The z4 cca12 code.
     */
    public function setz4Cca12Code($z4Cca12Code) {
        $this->z4Cca12Code = $z4Cca12Code;
        return $this;
    }
}
