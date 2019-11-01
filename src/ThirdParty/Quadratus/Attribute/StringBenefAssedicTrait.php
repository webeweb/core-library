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
 * Benef assedic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBenefAssedicTrait {

    /**
     * Benef assedic.
     *
     * @var string
     */
    private $benefAssedic;

    /**
     * Get the benef assedic.
     *
     * @return string Returns the benef assedic.
     */
    public function getBenefAssedic() {
        return $this->benefAssedic;
    }

    /**
     * Set the benef assedic.
     *
     * @param string $benefAssedic The benef assedic.
     */
    public function setBenefAssedic($benefAssedic) {
        $this->benefAssedic = $benefAssedic;
        return $this;
    }
}
