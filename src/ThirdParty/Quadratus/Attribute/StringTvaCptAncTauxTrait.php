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
 * Tva cpt anc taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptAncTauxTrait {

    /**
     * Tva cpt anc taux.
     *
     * @var string
     */
    private $tvaCptAncTaux;

    /**
     * Get the tva cpt anc taux.
     *
     * @return string Returns the tva cpt anc taux.
     */
    public function getTvaCptAncTaux() {
        return $this->tvaCptAncTaux;
    }

    /**
     * Set the tva cpt anc taux.
     *
     * @param string $tvaCptAncTaux The tva cpt anc taux.
     */
    public function setTvaCptAncTaux($tvaCptAncTaux) {
        $this->tvaCptAncTaux = $tvaCptAncTaux;
        return $this;
    }
}
