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
 * Tva cpt a imputer g trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptAImputerGTrait {

    /**
     * Tva cpt a imputer g.
     *
     * @var string
     */
    private $tvaCptAImputerG;

    /**
     * Get the tva cpt a imputer g.
     *
     * @return string Returns the tva cpt a imputer g.
     */
    public function getTvaCptAImputerG() {
        return $this->tvaCptAImputerG;
    }

    /**
     * Set the tva cpt a imputer g.
     *
     * @param string $tvaCptAImputerG The tva cpt a imputer g.
     */
    public function setTvaCptAImputerG($tvaCptAImputerG) {
        $this->tvaCptAImputerG = $tvaCptAImputerG;
        return $this;
    }
}
