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
 * Etage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtageTrait {

    /**
     * Etage.
     *
     * @var string
     */
    private $etage;

    /**
     * Get the etage.
     *
     * @return string Returns the etage.
     */
    public function getEtage() {
        return $this->etage;
    }

    /**
     * Set the etage.
     *
     * @param string $etage The etage.
     */
    public function setEtage($etage) {
        $this->etage = $etage;
        return $this;
    }
}
