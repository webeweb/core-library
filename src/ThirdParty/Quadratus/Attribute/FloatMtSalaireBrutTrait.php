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
 * Mt salaire brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtSalaireBrutTrait {

    /**
     * Mt salaire brut.
     *
     * @var float
     */
    private $mtSalaireBrut;

    /**
     * Get the mt salaire brut.
     *
     * @return float Returns the mt salaire brut.
     */
    public function getMtSalaireBrut() {
        return $this->mtSalaireBrut;
    }

    /**
     * Set the mt salaire brut.
     *
     * @param float $mtSalaireBrut The mt salaire brut.
     */
    public function setMtSalaireBrut($mtSalaireBrut) {
        $this->mtSalaireBrut = $mtSalaireBrut;
        return $this;
    }
}
