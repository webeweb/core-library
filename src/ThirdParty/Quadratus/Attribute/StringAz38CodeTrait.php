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
 * Az38 code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAz38CodeTrait {

    /**
     * Az38 code.
     *
     * @var string
     */
    private $az38Code;

    /**
     * Get the az38 code.
     *
     * @return string Returns the az38 code.
     */
    public function getAz38Code() {
        return $this->az38Code;
    }

    /**
     * Set the az38 code.
     *
     * @param string $az38Code The az38 code.
     */
    public function setAz38Code($az38Code) {
        $this->az38Code = $az38Code;
        return $this;
    }
}
