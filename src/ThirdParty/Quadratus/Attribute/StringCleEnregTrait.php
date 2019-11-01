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
 * Cle enreg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleEnregTrait {

    /**
     * Cle enreg.
     *
     * @var string
     */
    private $cleEnreg;

    /**
     * Get the cle enreg.
     *
     * @return string Returns the cle enreg.
     */
    public function getCleEnreg() {
        return $this->cleEnreg;
    }

    /**
     * Set the cle enreg.
     *
     * @param string $cleEnreg The cle enreg.
     */
    public function setCleEnreg($cleEnreg) {
        $this->cleEnreg = $cleEnreg;
        return $this;
    }
}
