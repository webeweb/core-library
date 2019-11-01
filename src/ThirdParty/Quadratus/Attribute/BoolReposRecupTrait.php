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
 * Repos recup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolReposRecupTrait {

    /**
     * Repos recup.
     *
     * @var bool
     */
    private $reposRecup;

    /**
     * Get the repos recup.
     *
     * @return bool Returns the repos recup.
     */
    public function getReposRecup() {
        return $this->reposRecup;
    }

    /**
     * Set the repos recup.
     *
     * @param bool $reposRecup The repos recup.
     */
    public function setReposRecup($reposRecup) {
        $this->reposRecup = $reposRecup;
        return $this;
    }
}
