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
 * Bonus cospar trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBonusCosparTrait {

    /**
     * Bonus cospar.
     *
     * @var bool
     */
    private $bonusCospar;

    /**
     * Get the bonus cospar.
     *
     * @return bool Returns the bonus cospar.
     */
    public function getBonusCospar() {
        return $this->bonusCospar;
    }

    /**
     * Set the bonus cospar.
     *
     * @param bool $bonusCospar The bonus cospar.
     */
    public function setBonusCospar($bonusCospar) {
        $this->bonusCospar = $bonusCospar;
        return $this;
    }
}
