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
 * Qtel code tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQtelCodeTacheTrait {

    /**
     * Qtel code tache.
     *
     * @var string
     */
    private $qtelCodeTache;

    /**
     * Get the qtel code tache.
     *
     * @return string Returns the qtel code tache.
     */
    public function getQtelCodeTache() {
        return $this->qtelCodeTache;
    }

    /**
     * Set the qtel code tache.
     *
     * @param string $qtelCodeTache The qtel code tache.
     */
    public function setQtelCodeTache($qtelCodeTache) {
        $this->qtelCodeTache = $qtelCodeTache;
        return $this;
    }
}
