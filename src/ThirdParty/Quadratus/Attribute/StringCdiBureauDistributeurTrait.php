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
 * Cdi bureau distributeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdiBureauDistributeurTrait {

    /**
     * Cdi bureau distributeur.
     *
     * @var string
     */
    private $cdiBureauDistributeur;

    /**
     * Get the cdi bureau distributeur.
     *
     * @return string Returns the cdi bureau distributeur.
     */
    public function getCdiBureauDistributeur() {
        return $this->cdiBureauDistributeur;
    }

    /**
     * Set the cdi bureau distributeur.
     *
     * @param string $cdiBureauDistributeur The cdi bureau distributeur.
     */
    public function setCdiBureauDistributeur($cdiBureauDistributeur) {
        $this->cdiBureauDistributeur = $cdiBureauDistributeur;
        return $this;
    }
}
