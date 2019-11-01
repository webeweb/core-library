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
 * Niv conf emp proprete restreint trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNivConfEmpPropreteRestreintTrait {

    /**
     * Niv conf emp proprete restreint.
     *
     * @var bool
     */
    private $nivConfEmpPropreteRestreint;

    /**
     * Get the niv conf emp proprete restreint.
     *
     * @return bool Returns the niv conf emp proprete restreint.
     */
    public function getNivConfEmpPropreteRestreint() {
        return $this->nivConfEmpPropreteRestreint;
    }

    /**
     * Set the niv conf emp proprete restreint.
     *
     * @param bool $nivConfEmpPropreteRestreint The niv conf emp proprete restreint.
     */
    public function setNivConfEmpPropreteRestreint($nivConfEmpPropreteRestreint) {
        $this->nivConfEmpPropreteRestreint = $nivConfEmpPropreteRestreint;
        return $this;
    }
}
