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
 * Pourcent repos remplace trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentReposRemplaceTrait {

    /**
     * Pourcent repos remplace.
     *
     * @var float
     */
    private $pourcentReposRemplace;

    /**
     * Get the pourcent repos remplace.
     *
     * @return float Returns the pourcent repos remplace.
     */
    public function getPourcentReposRemplace() {
        return $this->pourcentReposRemplace;
    }

    /**
     * Set the pourcent repos remplace.
     *
     * @param float $pourcentReposRemplace The pourcent repos remplace.
     */
    public function setPourcentReposRemplace($pourcentReposRemplace) {
        $this->pourcentReposRemplace = $pourcentReposRemplace;
        return $this;
    }
}
