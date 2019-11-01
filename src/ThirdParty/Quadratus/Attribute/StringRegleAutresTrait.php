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
 * Regle autres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegleAutresTrait {

    /**
     * Regle autres.
     *
     * @var string
     */
    private $regleAutres;

    /**
     * Get the regle autres.
     *
     * @return string Returns the regle autres.
     */
    public function getRegleAutres() {
        return $this->regleAutres;
    }

    /**
     * Set the regle autres.
     *
     * @param string $regleAutres The regle autres.
     */
    public function setRegleAutres($regleAutres) {
        $this->regleAutres = $regleAutres;
        return $this;
    }
}
