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
 * Travaille dimanche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTravailleDimancheTrait {

    /**
     * Travaille dimanche.
     *
     * @var bool
     */
    private $travailleDimanche;

    /**
     * Get the travaille dimanche.
     *
     * @return bool Returns the travaille dimanche.
     */
    public function getTravailleDimanche() {
        return $this->travailleDimanche;
    }

    /**
     * Set the travaille dimanche.
     *
     * @param bool $travailleDimanche The travaille dimanche.
     */
    public function setTravailleDimanche($travailleDimanche) {
        $this->travailleDimanche = $travailleDimanche;
        return $this;
    }
}
