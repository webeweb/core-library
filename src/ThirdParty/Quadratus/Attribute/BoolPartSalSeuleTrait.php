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
 * Part sal seule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPartSalSeuleTrait {

    /**
     * Part sal seule.
     *
     * @var bool
     */
    private $partSalSeule;

    /**
     * Get the part sal seule.
     *
     * @return bool Returns the part sal seule.
     */
    public function getPartSalSeule() {
        return $this->partSalSeule;
    }

    /**
     * Set the part sal seule.
     *
     * @param bool $partSalSeule The part sal seule.
     */
    public function setPartSalSeule($partSalSeule) {
        $this->partSalSeule = $partSalSeule;
        return $this;
    }
}
