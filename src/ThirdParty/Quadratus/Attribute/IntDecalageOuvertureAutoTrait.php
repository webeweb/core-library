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
 * Decalage ouverture auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDecalageOuvertureAutoTrait {

    /**
     * Decalage ouverture auto.
     *
     * @var int
     */
    private $decalageOuvertureAuto;

    /**
     * Get the decalage ouverture auto.
     *
     * @return int Returns the decalage ouverture auto.
     */
    public function getDecalageOuvertureAuto() {
        return $this->decalageOuvertureAuto;
    }

    /**
     * Set the decalage ouverture auto.
     *
     * @param int $decalageOuvertureAuto The decalage ouverture auto.
     */
    public function setDecalageOuvertureAuto($decalageOuvertureAuto) {
        $this->decalageOuvertureAuto = $decalageOuvertureAuto;
        return $this;
    }
}
