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
 * Cdi btq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdiBtqTrait {

    /**
     * Cdi btq.
     *
     * @var string
     */
    private $cdiBtq;

    /**
     * Get the cdi btq.
     *
     * @return string Returns the cdi btq.
     */
    public function getCdiBtq() {
        return $this->cdiBtq;
    }

    /**
     * Set the cdi btq.
     *
     * @param string $cdiBtq The cdi btq.
     */
    public function setCdiBtq($cdiBtq) {
        $this->cdiBtq = $cdiBtq;
        return $this;
    }
}
