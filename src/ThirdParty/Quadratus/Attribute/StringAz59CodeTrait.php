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
 * Az59 code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAz59CodeTrait {

    /**
     * Az59 code.
     *
     * @var string
     */
    private $az59Code;

    /**
     * Get the az59 code.
     *
     * @return string Returns the az59 code.
     */
    public function getAz59Code() {
        return $this->az59Code;
    }

    /**
     * Set the az59 code.
     *
     * @param string $az59Code The az59 code.
     */
    public function setAz59Code($az59Code) {
        $this->az59Code = $az59Code;
        return $this;
    }
}
