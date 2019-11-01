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
 * Semaine complete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSemaineCompleteTrait {

    /**
     * Semaine complete.
     *
     * @var bool
     */
    private $semaineComplete;

    /**
     * Get the semaine complete.
     *
     * @return bool Returns the semaine complete.
     */
    public function getSemaineComplete() {
        return $this->semaineComplete;
    }

    /**
     * Set the semaine complete.
     *
     * @param bool $semaineComplete The semaine complete.
     */
    public function setSemaineComplete($semaineComplete) {
        $this->semaineComplete = $semaineComplete;
        return $this;
    }
}
