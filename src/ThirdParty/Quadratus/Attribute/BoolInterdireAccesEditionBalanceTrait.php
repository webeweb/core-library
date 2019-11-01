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
 * Interdire acces edition balance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdireAccesEditionBalanceTrait {

    /**
     * Interdire acces edition balance.
     *
     * @var bool
     */
    private $interdireAccesEditionBalance;

    /**
     * Get the interdire acces edition balance.
     *
     * @return bool Returns the interdire acces edition balance.
     */
    public function getInterdireAccesEditionBalance() {
        return $this->interdireAccesEditionBalance;
    }

    /**
     * Set the interdire acces edition balance.
     *
     * @param bool $interdireAccesEditionBalance The interdire acces edition balance.
     */
    public function setInterdireAccesEditionBalance($interdireAccesEditionBalance) {
        $this->interdireAccesEditionBalance = $interdireAccesEditionBalance;
        return $this;
    }
}
