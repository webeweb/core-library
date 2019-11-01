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
 * Indemn autre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIndemnAutreTrait {

    /**
     * Indemn autre.
     *
     * @var bool
     */
    private $indemnAutre;

    /**
     * Get the indemn autre.
     *
     * @return bool Returns the indemn autre.
     */
    public function getIndemnAutre() {
        return $this->indemnAutre;
    }

    /**
     * Set the indemn autre.
     *
     * @param bool $indemnAutre The indemn autre.
     */
    public function setIndemnAutre($indemnAutre) {
        $this->indemnAutre = $indemnAutre;
        return $this;
    }
}
