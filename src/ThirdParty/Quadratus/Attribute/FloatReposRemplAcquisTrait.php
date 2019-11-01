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
 * Repos rempl acquis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReposRemplAcquisTrait {

    /**
     * Repos rempl acquis.
     *
     * @var float
     */
    private $reposRemplAcquis;

    /**
     * Get the repos rempl acquis.
     *
     * @return float Returns the repos rempl acquis.
     */
    public function getReposRemplAcquis() {
        return $this->reposRemplAcquis;
    }

    /**
     * Set the repos rempl acquis.
     *
     * @param float $reposRemplAcquis The repos rempl acquis.
     */
    public function setReposRemplAcquis($reposRemplAcquis) {
        $this->reposRemplAcquis = $reposRemplAcquis;
        return $this;
    }
}
