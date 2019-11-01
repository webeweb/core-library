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
 * Repos comp acquis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReposCompAcquisTrait {

    /**
     * Repos comp acquis.
     *
     * @var float
     */
    private $reposCompAcquis;

    /**
     * Get the repos comp acquis.
     *
     * @return float Returns the repos comp acquis.
     */
    public function getReposCompAcquis() {
        return $this->reposCompAcquis;
    }

    /**
     * Set the repos comp acquis.
     *
     * @param float $reposCompAcquis The repos comp acquis.
     */
    public function setReposCompAcquis($reposCompAcquis) {
        $this->reposCompAcquis = $reposCompAcquis;
        return $this;
    }
}
