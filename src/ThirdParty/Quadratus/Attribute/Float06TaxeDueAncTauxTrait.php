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
 * 06 taxe due anc taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float06TaxeDueAncTauxTrait {

    /**
     * 06 taxe due anc taux.
     *
     * @var float
     */
    private $_06TaxeDueAncTaux;

    /**
     * Get the 06 taxe due anc taux.
     *
     * @return float Returns the 06 taxe due anc taux.
     */
    public function get06TaxeDueAncTaux() {
        return $this->_06TaxeDueAncTaux;
    }

    /**
     * Set the 06 taxe due anc taux.
     *
     * @param float $_06TaxeDueAncTaux The 06 taxe due anc taux.
     */
    public function set06TaxeDueAncTaux($_06TaxeDueAncTaux) {
        $this->_06TaxeDueAncTaux = $_06TaxeDueAncTaux;
        return $this;
    }
}
