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
 * Jacp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntJacpTrait {

    /**
     * Jacp.
     *
     * @var int
     */
    private $jacp;

    /**
     * Get the jacp.
     *
     * @return int Returns the jacp.
     */
    public function getJacp() {
        return $this->jacp;
    }

    /**
     * Set the jacp.
     *
     * @param int $jacp The jacp.
     */
    public function setJacp($jacp) {
        $this->jacp = $jacp;
        return $this;
    }
}
