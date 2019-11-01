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
 * Acces rep commun trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAccesRepCommunTrait {

    /**
     * Acces rep commun.
     *
     * @var string
     */
    private $accesRepCommun;

    /**
     * Get the acces rep commun.
     *
     * @return string Returns the acces rep commun.
     */
    public function getAccesRepCommun() {
        return $this->accesRepCommun;
    }

    /**
     * Set the acces rep commun.
     *
     * @param string $accesRepCommun The acces rep commun.
     */
    public function setAccesRepCommun($accesRepCommun) {
        $this->accesRepCommun = $accesRepCommun;
        return $this;
    }
}
