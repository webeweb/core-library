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
 * Tva cpt acq intra com trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptAcqIntraComTrait {

    /**
     * Tva cpt acq intra com.
     *
     * @var string
     */
    private $tvaCptAcqIntraCom;

    /**
     * Get the tva cpt acq intra com.
     *
     * @return string Returns the tva cpt acq intra com.
     */
    public function getTvaCptAcqIntraCom() {
        return $this->tvaCptAcqIntraCom;
    }

    /**
     * Set the tva cpt acq intra com.
     *
     * @param string $tvaCptAcqIntraCom The tva cpt acq intra com.
     */
    public function setTvaCptAcqIntraCom($tvaCptAcqIntraCom) {
        $this->tvaCptAcqIntraCom = $tvaCptAcqIntraCom;
        return $this;
    }
}
