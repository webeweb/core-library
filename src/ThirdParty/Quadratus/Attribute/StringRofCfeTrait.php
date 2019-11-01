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
 * Rof cfe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRofCfeTrait {

    /**
     * Rof cfe.
     *
     * @var string
     */
    private $rofCfe;

    /**
     * Get the rof cfe.
     *
     * @return string Returns the rof cfe.
     */
    public function getRofCfe() {
        return $this->rofCfe;
    }

    /**
     * Set the rof cfe.
     *
     * @param string $rofCfe The rof cfe.
     */
    public function setRofCfe($rofCfe) {
        $this->rofCfe = $rofCfe;
        return $this;
    }
}
