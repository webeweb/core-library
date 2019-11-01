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
 * Poste3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPoste3Trait {

    /**
     * Poste3.
     *
     * @var string
     */
    private $poste3;

    /**
     * Get the poste3.
     *
     * @return string Returns the poste3.
     */
    public function getPoste3() {
        return $this->poste3;
    }

    /**
     * Set the poste3.
     *
     * @param string $poste3 The poste3.
     */
    public function setPoste3($poste3) {
        $this->poste3 = $poste3;
        return $this;
    }
}
