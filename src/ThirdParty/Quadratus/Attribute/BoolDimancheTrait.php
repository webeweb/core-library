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
 * Dimanche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDimancheTrait {

    /**
     * Dimanche.
     *
     * @var bool
     */
    private $dimanche;

    /**
     * Get the dimanche.
     *
     * @return bool Returns the dimanche.
     */
    public function getDimanche() {
        return $this->dimanche;
    }

    /**
     * Set the dimanche.
     *
     * @param bool $dimanche The dimanche.
     */
    public function setDimanche($dimanche) {
        $this->dimanche = $dimanche;
        return $this;
    }
}
