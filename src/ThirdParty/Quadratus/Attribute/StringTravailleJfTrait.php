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
 * Travaille jf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTravailleJfTrait {

    /**
     * Travaille jf.
     *
     * @var string
     */
    private $travailleJf;

    /**
     * Get the travaille jf.
     *
     * @return string Returns the travaille jf.
     */
    public function getTravailleJf() {
        return $this->travailleJf;
    }

    /**
     * Set the travaille jf.
     *
     * @param string $travailleJf The travaille jf.
     */
    public function setTravailleJf($travailleJf) {
        $this->travailleJf = $travailleJf;
        return $this;
    }
}
