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
 * Tp cloture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpClotureTrait {

    /**
     * Tp cloture.
     *
     * @var bool
     */
    private $tpCloture;

    /**
     * Get the tp cloture.
     *
     * @return bool Returns the tp cloture.
     */
    public function getTpCloture() {
        return $this->tpCloture;
    }

    /**
     * Set the tp cloture.
     *
     * @param bool $tpCloture The tp cloture.
     */
    public function setTpCloture($tpCloture) {
        $this->tpCloture = $tpCloture;
        return $this;
    }
}
