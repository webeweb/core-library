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
 * Az50 code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAz50CodeTrait {

    /**
     * Az50 code.
     *
     * @var string
     */
    private $az50Code;

    /**
     * Get the az50 code.
     *
     * @return string Returns the az50 code.
     */
    public function getAz50Code() {
        return $this->az50Code;
    }

    /**
     * Set the az50 code.
     *
     * @param string $az50Code The az50 code.
     */
    public function setAz50Code($az50Code) {
        $this->az50Code = $az50Code;
        return $this;
    }
}
