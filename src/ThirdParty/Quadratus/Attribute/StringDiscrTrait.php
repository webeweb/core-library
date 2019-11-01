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
 * Discr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDiscrTrait {

    /**
     * Discr.
     *
     * @var string
     */
    private $discr;

    /**
     * Get the discr.
     *
     * @return string Returns the discr.
     */
    public function getDiscr() {
        return $this->discr;
    }

    /**
     * Set the discr.
     *
     * @param string $discr The discr.
     */
    public function setDiscr($discr) {
        $this->discr = $discr;
        return $this;
    }
}
