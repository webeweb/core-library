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
 * No lot trace trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoLotTraceTrait {

    /**
     * No lot trace.
     *
     * @var string
     */
    private $noLotTrace;

    /**
     * Get the no lot trace.
     *
     * @return string Returns the no lot trace.
     */
    public function getNoLotTrace() {
        return $this->noLotTrace;
    }

    /**
     * Set the no lot trace.
     *
     * @param string $noLotTrace The no lot trace.
     */
    public function setNoLotTrace($noLotTrace) {
        $this->noLotTrace = $noLotTrace;
        return $this;
    }
}
