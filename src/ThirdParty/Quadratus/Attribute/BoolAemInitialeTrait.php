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
 * Aem initiale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAemInitialeTrait {

    /**
     * Aem initiale.
     *
     * @var bool
     */
    private $aemInitiale;

    /**
     * Get the aem initiale.
     *
     * @return bool Returns the aem initiale.
     */
    public function getAemInitiale() {
        return $this->aemInitiale;
    }

    /**
     * Set the aem initiale.
     *
     * @param bool $aemInitiale The aem initiale.
     */
    public function setAemInitiale($aemInitiale) {
        $this->aemInitiale = $aemInitiale;
        return $this;
    }
}
