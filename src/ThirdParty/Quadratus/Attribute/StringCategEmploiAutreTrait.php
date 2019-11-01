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
 * Categ emploi autre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCategEmploiAutreTrait {

    /**
     * Categ emploi autre.
     *
     * @var string
     */
    private $categEmploiAutre;

    /**
     * Get the categ emploi autre.
     *
     * @return string Returns the categ emploi autre.
     */
    public function getCategEmploiAutre() {
        return $this->categEmploiAutre;
    }

    /**
     * Set the categ emploi autre.
     *
     * @param string $categEmploiAutre The categ emploi autre.
     */
    public function setCategEmploiAutre($categEmploiAutre) {
        $this->categEmploiAutre = $categEmploiAutre;
        return $this;
    }
}
