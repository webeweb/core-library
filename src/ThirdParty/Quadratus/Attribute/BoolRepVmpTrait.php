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
 * Rep vmp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepVmpTrait {

    /**
     * Rep vmp.
     *
     * @var bool
     */
    private $repVmp;

    /**
     * Get the rep vmp.
     *
     * @return bool Returns the rep vmp.
     */
    public function getRepVmp() {
        return $this->repVmp;
    }

    /**
     * Set the rep vmp.
     *
     * @param bool $repVmp The rep vmp.
     */
    public function setRepVmp($repVmp) {
        $this->repVmp = $repVmp;
        return $this;
    }
}
