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
 * Decalage fermeture auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDecalageFermetureAutoTrait {

    /**
     * Decalage fermeture auto.
     *
     * @var int
     */
    private $decalageFermetureAuto;

    /**
     * Get the decalage fermeture auto.
     *
     * @return int Returns the decalage fermeture auto.
     */
    public function getDecalageFermetureAuto() {
        return $this->decalageFermetureAuto;
    }

    /**
     * Set the decalage fermeture auto.
     *
     * @param int $decalageFermetureAuto The decalage fermeture auto.
     */
    public function setDecalageFermetureAuto($decalageFermetureAuto) {
        $this->decalageFermetureAuto = $decalageFermetureAuto;
        return $this;
    }
}
