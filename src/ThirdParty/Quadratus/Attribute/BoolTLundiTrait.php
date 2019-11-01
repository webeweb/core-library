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
 * T lundi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTLundiTrait {

    /**
     * T lundi.
     *
     * @var bool
     */
    private $tLundi;

    /**
     * Get the t lundi.
     *
     * @return bool Returns the t lundi.
     */
    public function getTLundi() {
        return $this->tLundi;
    }

    /**
     * Set the t lundi.
     *
     * @param bool $tLundi The t lundi.
     */
    public function setTLundi($tLundi) {
        $this->tLundi = $tLundi;
        return $this;
    }
}
