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
 * Qualite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualiteTrait {

    /**
     * Qualite.
     *
     * @var string
     */
    private $qualite;

    /**
     * Get the qualite.
     *
     * @return string Returns the qualite.
     */
    public function getQualite() {
        return $this->qualite;
    }

    /**
     * Set the qualite.
     *
     * @param string $qualite The qualite.
     */
    public function setQualite($qualite) {
        $this->qualite = $qualite;
        return $this;
    }
}
