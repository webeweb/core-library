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
 * 06 base ht anc taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float06BaseHtAncTauxTrait {

    /**
     * 06 base ht anc taux.
     *
     * @var float
     */
    private $_06BaseHtAncTaux;

    /**
     * Get the 06 base ht anc taux.
     *
     * @return float Returns the 06 base ht anc taux.
     */
    public function get06BaseHtAncTaux() {
        return $this->_06BaseHtAncTaux;
    }

    /**
     * Set the 06 base ht anc taux.
     *
     * @param float $_06BaseHtAncTaux The 06 base ht anc taux.
     */
    public function set06BaseHtAncTaux($_06BaseHtAncTaux) {
        $this->_06BaseHtAncTaux = $_06BaseHtAncTaux;
        return $this;
    }
}
