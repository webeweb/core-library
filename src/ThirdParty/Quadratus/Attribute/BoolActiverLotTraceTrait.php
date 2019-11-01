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
 * Activer lot trace trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiverLotTraceTrait {

    /**
     * Activer lot trace.
     *
     * @var bool
     */
    private $activerLotTrace;

    /**
     * Get the activer lot trace.
     *
     * @return bool Returns the activer lot trace.
     */
    public function getActiverLotTrace() {
        return $this->activerLotTrace;
    }

    /**
     * Set the activer lot trace.
     *
     * @param bool $activerLotTrace The activer lot trace.
     */
    public function setActiverLotTrace($activerLotTrace) {
        $this->activerLotTrace = $activerLotTrace;
        return $this;
    }
}
