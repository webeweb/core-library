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
 * Code equipe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEquipeTrait {

    /**
     * Code equipe.
     *
     * @var string
     */
    private $codeEquipe;

    /**
     * Get the code equipe.
     *
     * @return string Returns the code equipe.
     */
    public function getCodeEquipe() {
        return $this->codeEquipe;
    }

    /**
     * Set the code equipe.
     *
     * @param string $codeEquipe The code equipe.
     */
    public function setCodeEquipe($codeEquipe) {
        $this->codeEquipe = $codeEquipe;
        return $this;
    }
}
