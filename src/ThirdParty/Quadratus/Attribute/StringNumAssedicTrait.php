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
 * Num assedic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumAssedicTrait {

    /**
     * Num assedic.
     *
     * @var string
     */
    private $numAssedic;

    /**
     * Get the num assedic.
     *
     * @return string Returns the num assedic.
     */
    public function getNumAssedic() {
        return $this->numAssedic;
    }

    /**
     * Set the num assedic.
     *
     * @param string $numAssedic The num assedic.
     */
    public function setNumAssedic($numAssedic) {
        $this->numAssedic = $numAssedic;
        return $this;
    }
}
