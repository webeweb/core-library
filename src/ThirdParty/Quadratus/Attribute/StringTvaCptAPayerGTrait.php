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
 * Tva cpt a payer g trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptAPayerGTrait {

    /**
     * Tva cpt a payer g.
     *
     * @var string
     */
    private $tvaCptAPayerG;

    /**
     * Get the tva cpt a payer g.
     *
     * @return string Returns the tva cpt a payer g.
     */
    public function getTvaCptAPayerG() {
        return $this->tvaCptAPayerG;
    }

    /**
     * Set the tva cpt a payer g.
     *
     * @param string $tvaCptAPayerG The tva cpt a payer g.
     */
    public function setTvaCptAPayerG($tvaCptAPayerG) {
        $this->tvaCptAPayerG = $tvaCptAPayerG;
        return $this;
    }
}
