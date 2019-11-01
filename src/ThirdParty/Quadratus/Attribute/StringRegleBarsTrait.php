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
 * Regle bars trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegleBarsTrait {

    /**
     * Regle bars.
     *
     * @var string
     */
    private $regleBars;

    /**
     * Get the regle bars.
     *
     * @return string Returns the regle bars.
     */
    public function getRegleBars() {
        return $this->regleBars;
    }

    /**
     * Set the regle bars.
     *
     * @param string $regleBars The regle bars.
     */
    public function setRegleBars($regleBars) {
        $this->regleBars = $regleBars;
        return $this;
    }
}
