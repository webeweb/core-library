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
 * Seuil majo h compl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSeuilMajoHComplTrait {

    /**
     * Seuil majo h compl.
     *
     * @var float
     */
    private $seuilMajoHCompl;

    /**
     * Get the seuil majo h compl.
     *
     * @return float Returns the seuil majo h compl.
     */
    public function getSeuilMajoHCompl() {
        return $this->seuilMajoHCompl;
    }

    /**
     * Set the seuil majo h compl.
     *
     * @param float $seuilMajoHCompl The seuil majo h compl.
     */
    public function setSeuilMajoHCompl($seuilMajoHCompl) {
        $this->seuilMajoHCompl = $seuilMajoHCompl;
        return $this;
    }
}
