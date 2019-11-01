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
 * Rub trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRubTrait {

    /**
     * Rub.
     *
     * @var string
     */
    private $rub;

    /**
     * Get the rub.
     *
     * @return string Returns the rub.
     */
    public function getRub() {
        return $this->rub;
    }

    /**
     * Set the rub.
     *
     * @param string $rub The rub.
     */
    public function setRub($rub) {
        $this->rub = $rub;
        return $this;
    }
}
