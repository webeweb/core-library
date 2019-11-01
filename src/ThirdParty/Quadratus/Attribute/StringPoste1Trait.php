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
 * Poste1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPoste1Trait {

    /**
     * Poste1.
     *
     * @var string
     */
    private $poste1;

    /**
     * Get the poste1.
     *
     * @return string Returns the poste1.
     */
    public function getPoste1() {
        return $this->poste1;
    }

    /**
     * Set the poste1.
     *
     * @param string $poste1 The poste1.
     */
    public function setPoste1($poste1) {
        $this->poste1 = $poste1;
        return $this;
    }
}
