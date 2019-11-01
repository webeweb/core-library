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
 * z4 aca12 code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz4Aca12CodeTrait {

    /**
     * z4 aca12 code.
     *
     * @var string
     */
    private $z4Aca12Code;

    /**
     * Get the z4 aca12 code.
     *
     * @return string Returns the z4 aca12 code.
     */
    public function getz4Aca12Code() {
        return $this->z4Aca12Code;
    }

    /**
     * Set the z4 aca12 code.
     *
     * @param string $z4Aca12Code The z4 aca12 code.
     */
    public function setz4Aca12Code($z4Aca12Code) {
        $this->z4Aca12Code = $z4Aca12Code;
        return $this;
    }
}
