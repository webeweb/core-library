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
 * Deduire h sup non structurelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDeduireHSupNonStructurelleTrait {

    /**
     * Deduire h sup non structurelle.
     *
     * @var bool
     */
    private $deduireHSupNonStructurelle;

    /**
     * Get the deduire h sup non structurelle.
     *
     * @return bool Returns the deduire h sup non structurelle.
     */
    public function getDeduireHSupNonStructurelle() {
        return $this->deduireHSupNonStructurelle;
    }

    /**
     * Set the deduire h sup non structurelle.
     *
     * @param bool $deduireHSupNonStructurelle The deduire h sup non structurelle.
     */
    public function setDeduireHSupNonStructurelle($deduireHSupNonStructurelle) {
        $this->deduireHSupNonStructurelle = $deduireHSupNonStructurelle;
        return $this;
    }
}
