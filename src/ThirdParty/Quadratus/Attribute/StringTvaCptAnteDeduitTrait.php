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
 * Tva cpt ante deduit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptAnteDeduitTrait {

    /**
     * Tva cpt ante deduit.
     *
     * @var string
     */
    private $tvaCptAnteDeduit;

    /**
     * Get the tva cpt ante deduit.
     *
     * @return string Returns the tva cpt ante deduit.
     */
    public function getTvaCptAnteDeduit() {
        return $this->tvaCptAnteDeduit;
    }

    /**
     * Set the tva cpt ante deduit.
     *
     * @param string $tvaCptAnteDeduit The tva cpt ante deduit.
     */
    public function setTvaCptAnteDeduit($tvaCptAnteDeduit) {
        $this->tvaCptAnteDeduit = $tvaCptAnteDeduit;
        return $this;
    }
}
