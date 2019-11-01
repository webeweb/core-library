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
 * Suivi analytique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAnalytiqueTrait {

    /**
     * Suivi analytique.
     *
     * @var bool
     */
    private $suiviAnalytique;

    /**
     * Get the suivi analytique.
     *
     * @return bool Returns the suivi analytique.
     */
    public function getSuiviAnalytique() {
        return $this->suiviAnalytique;
    }

    /**
     * Set the suivi analytique.
     *
     * @param bool $suiviAnalytique The suivi analytique.
     */
    public function setSuiviAnalytique($suiviAnalytique) {
        $this->suiviAnalytique = $suiviAnalytique;
        return $this;
    }
}
