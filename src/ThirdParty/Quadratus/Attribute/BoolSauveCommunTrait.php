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
 * Sauve commun trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSauveCommunTrait {

    /**
     * Sauve commun.
     *
     * @var bool
     */
    private $sauveCommun;

    /**
     * Get the sauve commun.
     *
     * @return bool Returns the sauve commun.
     */
    public function getSauveCommun() {
        return $this->sauveCommun;
    }

    /**
     * Set the sauve commun.
     *
     * @param bool $sauveCommun The sauve commun.
     */
    public function setSauveCommun($sauveCommun) {
        $this->sauveCommun = $sauveCommun;
        return $this;
    }
}
