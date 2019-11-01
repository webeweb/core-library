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
 * Maj dernier passage bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMajDernierPassageBtTrait {

    /**
     * Maj dernier passage bt.
     *
     * @var bool
     */
    private $majDernierPassageBt;

    /**
     * Get the maj dernier passage bt.
     *
     * @return bool Returns the maj dernier passage bt.
     */
    public function getMajDernierPassageBt() {
        return $this->majDernierPassageBt;
    }

    /**
     * Set the maj dernier passage bt.
     *
     * @param bool $majDernierPassageBt The maj dernier passage bt.
     */
    public function setMajDernierPassageBt($majDernierPassageBt) {
        $this->majDernierPassageBt = $majDernierPassageBt;
        return $this;
    }
}
