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
 * Ce initial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCeInitialTrait {

    /**
     * Ce initial.
     *
     * @var bool
     */
    private $ceInitial;

    /**
     * Get the ce initial.
     *
     * @return bool Returns the ce initial.
     */
    public function getCeInitial() {
        return $this->ceInitial;
    }

    /**
     * Set the ce initial.
     *
     * @param bool $ceInitial The ce initial.
     */
    public function setCeInitial($ceInitial) {
        $this->ceInitial = $ceInitial;
        return $this;
    }
}
