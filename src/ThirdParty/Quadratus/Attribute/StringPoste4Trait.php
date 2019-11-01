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
 * Poste4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPoste4Trait {

    /**
     * Poste4.
     *
     * @var string
     */
    private $poste4;

    /**
     * Get the poste4.
     *
     * @return string Returns the poste4.
     */
    public function getPoste4() {
        return $this->poste4;
    }

    /**
     * Set the poste4.
     *
     * @param string $poste4 The poste4.
     */
    public function setPoste4($poste4) {
        $this->poste4 = $poste4;
        return $this;
    }
}
