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
 * Tva cpt a imputer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptAImputerTrait {

    /**
     * Tva cpt a imputer.
     *
     * @var string
     */
    private $tvaCptAImputer;

    /**
     * Get the tva cpt a imputer.
     *
     * @return string Returns the tva cpt a imputer.
     */
    public function getTvaCptAImputer() {
        return $this->tvaCptAImputer;
    }

    /**
     * Set the tva cpt a imputer.
     *
     * @param string $tvaCptAImputer The tva cpt a imputer.
     */
    public function setTvaCptAImputer($tvaCptAImputer) {
        $this->tvaCptAImputer = $tvaCptAImputer;
        return $this;
    }
}
