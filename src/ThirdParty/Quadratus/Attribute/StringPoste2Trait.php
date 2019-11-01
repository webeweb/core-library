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
 * Poste2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPoste2Trait {

    /**
     * Poste2.
     *
     * @var string
     */
    private $poste2;

    /**
     * Get the poste2.
     *
     * @return string Returns the poste2.
     */
    public function getPoste2() {
        return $this->poste2;
    }

    /**
     * Set the poste2.
     *
     * @param string $poste2 The poste2.
     */
    public function setPoste2($poste2) {
        $this->poste2 = $poste2;
        return $this;
    }
}
