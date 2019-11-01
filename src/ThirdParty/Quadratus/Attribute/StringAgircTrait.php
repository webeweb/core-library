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
 * Agirc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAgircTrait {

    /**
     * Agirc.
     *
     * @var string
     */
    private $agirc;

    /**
     * Get the agirc.
     *
     * @return string Returns the agirc.
     */
    public function getAgirc() {
        return $this->agirc;
    }

    /**
     * Set the agirc.
     *
     * @param string $agirc The agirc.
     */
    public function setAgirc($agirc) {
        $this->agirc = $agirc;
        return $this;
    }
}
