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
trait IntMtSalaireBrutTrait {

    /**
     * Mt salaire brut.
     *
     * @var int
     */
    private $mtSalaireBrut;

    /**
     * Get the mt salaire brut.
     *
     * @return int Returns the mt salaire brut.
     */
    public function getMtSalaireBrut() {
        return $this->mtSalaireBrut;
    }

    /**
     * Set the mt salaire brut.
     *
     * @param int $mtSalaireBrut The mt salaire brut.
     */
    public function setMtSalaireBrut($mtSalaireBrut) {
        $this->mtSalaireBrut = $mtSalaireBrut;
        return $this;
    }
}
