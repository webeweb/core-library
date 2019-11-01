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
 * Num devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumDevisTrait {

    /**
     * Num devis.
     *
     * @var string
     */
    private $numDevis;

    /**
     * Get the num devis.
     *
     * @return string Returns the num devis.
     */
    public function getNumDevis() {
        return $this->numDevis;
    }

    /**
     * Set the num devis.
     *
     * @param string $numDevis The num devis.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }
}
