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
 * Tva cpt biens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptBiensTrait {

    /**
     * Tva cpt biens.
     *
     * @var string
     */
    private $tvaCptBiens;

    /**
     * Get the tva cpt biens.
     *
     * @return string Returns the tva cpt biens.
     */
    public function getTvaCptBiens() {
        return $this->tvaCptBiens;
    }

    /**
     * Set the tva cpt biens.
     *
     * @param string $tvaCptBiens The tva cpt biens.
     */
    public function setTvaCptBiens($tvaCptBiens) {
        $this->tvaCptBiens = $tvaCptBiens;
        return $this;
    }
}
