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
 * Saisie regl direct trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieReglDirectTrait {

    /**
     * Saisie regl direct.
     *
     * @var bool
     */
    private $saisieReglDirect;

    /**
     * Get the saisie regl direct.
     *
     * @return bool Returns the saisie regl direct.
     */
    public function getSaisieReglDirect() {
        return $this->saisieReglDirect;
    }

    /**
     * Set the saisie regl direct.
     *
     * @param bool $saisieReglDirect The saisie regl direct.
     */
    public function setSaisieReglDirect($saisieReglDirect) {
        $this->saisieReglDirect = $saisieReglDirect;
        return $this;
    }
}
