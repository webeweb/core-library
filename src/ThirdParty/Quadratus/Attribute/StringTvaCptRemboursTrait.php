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
 * Tva cpt rembours trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptRemboursTrait {

    /**
     * Tva cpt rembours.
     *
     * @var string
     */
    private $tvaCptRembours;

    /**
     * Get the tva cpt rembours.
     *
     * @return string Returns the tva cpt rembours.
     */
    public function getTvaCptRembours() {
        return $this->tvaCptRembours;
    }

    /**
     * Set the tva cpt rembours.
     *
     * @param string $tvaCptRembours The tva cpt rembours.
     */
    public function setTvaCptRembours($tvaCptRembours) {
        $this->tvaCptRembours = $tvaCptRembours;
        return $this;
    }
}
