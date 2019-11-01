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
 * Tva cpt biens intra com trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptBiensIntraComTrait {

    /**
     * Tva cpt biens intra com.
     *
     * @var string
     */
    private $tvaCptBiensIntraCom;

    /**
     * Get the tva cpt biens intra com.
     *
     * @return string Returns the tva cpt biens intra com.
     */
    public function getTvaCptBiensIntraCom() {
        return $this->tvaCptBiensIntraCom;
    }

    /**
     * Set the tva cpt biens intra com.
     *
     * @param string $tvaCptBiensIntraCom The tva cpt biens intra com.
     */
    public function setTvaCptBiensIntraCom($tvaCptBiensIntraCom) {
        $this->tvaCptBiensIntraCom = $tvaCptBiensIntraCom;
        return $this;
    }
}
