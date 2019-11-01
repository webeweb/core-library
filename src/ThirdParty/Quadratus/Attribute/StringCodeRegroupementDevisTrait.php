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
 * Code regroupement devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegroupementDevisTrait {

    /**
     * Code regroupement devis.
     *
     * @var string
     */
    private $codeRegroupementDevis;

    /**
     * Get the code regroupement devis.
     *
     * @return string Returns the code regroupement devis.
     */
    public function getCodeRegroupementDevis() {
        return $this->codeRegroupementDevis;
    }

    /**
     * Set the code regroupement devis.
     *
     * @param string $codeRegroupementDevis The code regroupement devis.
     */
    public function setCodeRegroupementDevis($codeRegroupementDevis) {
        $this->codeRegroupementDevis = $codeRegroupementDevis;
        return $this;
    }
}
