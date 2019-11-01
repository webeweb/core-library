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
 * No prochain lettrage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoProchainLettrageTrait {

    /**
     * No prochain lettrage.
     *
     * @var int
     */
    private $noProchainLettrage;

    /**
     * Get the no prochain lettrage.
     *
     * @return int Returns the no prochain lettrage.
     */
    public function getNoProchainLettrage() {
        return $this->noProchainLettrage;
    }

    /**
     * Set the no prochain lettrage.
     *
     * @param int $noProchainLettrage The no prochain lettrage.
     */
    public function setNoProchainLettrage($noProchainLettrage) {
        $this->noProchainLettrage = $noProchainLettrage;
        return $this;
    }
}
