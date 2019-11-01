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
 * 08 taxe due tv aa reverser trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float08TaxeDueTvAaReverserTrait {

    /**
     * 08 taxe due tv aa reverser.
     *
     * @var float
     */
    private $_08TaxeDueTvAaReverser;

    /**
     * Get the 08 taxe due tv aa reverser.
     *
     * @return float Returns the 08 taxe due tv aa reverser.
     */
    public function get08TaxeDueTvAaReverser() {
        return $this->_08TaxeDueTvAaReverser;
    }

    /**
     * Set the 08 taxe due tv aa reverser.
     *
     * @param float $_08TaxeDueTvAaReverser The 08 taxe due tv aa reverser.
     */
    public function set08TaxeDueTvAaReverser($_08TaxeDueTvAaReverser) {
        $this->_08TaxeDueTvAaReverser = $_08TaxeDueTvAaReverser;
        return $this;
    }
}
