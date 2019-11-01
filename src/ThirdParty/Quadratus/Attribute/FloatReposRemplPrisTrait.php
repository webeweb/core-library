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
 * Repos rempl pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReposRemplPrisTrait {

    /**
     * Repos rempl pris.
     *
     * @var float
     */
    private $reposRemplPris;

    /**
     * Get the repos rempl pris.
     *
     * @return float Returns the repos rempl pris.
     */
    public function getReposRemplPris() {
        return $this->reposRemplPris;
    }

    /**
     * Set the repos rempl pris.
     *
     * @param float $reposRemplPris The repos rempl pris.
     */
    public function setReposRemplPris($reposRemplPris) {
        $this->reposRemplPris = $reposRemplPris;
        return $this;
    }
}
