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
 * Date limite forcee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDateLimiteForceeTrait {

    /**
     * Date limite forcee.
     *
     * @var bool
     */
    private $dateLimiteForcee;

    /**
     * Get the date limite forcee.
     *
     * @return bool Returns the date limite forcee.
     */
    public function getDateLimiteForcee() {
        return $this->dateLimiteForcee;
    }

    /**
     * Set the date limite forcee.
     *
     * @param bool $dateLimiteForcee The date limite forcee.
     */
    public function setDateLimiteForcee($dateLimiteForcee) {
        $this->dateLimiteForcee = $dateLimiteForcee;
        return $this;
    }
}
