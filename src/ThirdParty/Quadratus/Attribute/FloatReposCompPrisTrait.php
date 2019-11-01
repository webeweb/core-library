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
 * Repos comp pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReposCompPrisTrait {

    /**
     * Repos comp pris.
     *
     * @var float
     */
    private $reposCompPris;

    /**
     * Get the repos comp pris.
     *
     * @return float Returns the repos comp pris.
     */
    public function getReposCompPris() {
        return $this->reposCompPris;
    }

    /**
     * Set the repos comp pris.
     *
     * @param float $reposCompPris The repos comp pris.
     */
    public function setReposCompPris($reposCompPris) {
        $this->reposCompPris = $reposCompPris;
        return $this;
    }
}
