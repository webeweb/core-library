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
 * Etiq plus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEtiqPlusTrait {

    /**
     * Etiq plus.
     *
     * @var bool
     */
    private $etiqPlus;

    /**
     * Get the etiq plus.
     *
     * @return bool Returns the etiq plus.
     */
    public function getEtiqPlus() {
        return $this->etiqPlus;
    }

    /**
     * Set the etiq plus.
     *
     * @param bool $etiqPlus The etiq plus.
     */
    public function setEtiqPlus($etiqPlus) {
        $this->etiqPlus = $etiqPlus;
        return $this;
    }
}
