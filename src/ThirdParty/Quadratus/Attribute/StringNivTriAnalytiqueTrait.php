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
 * Niv tri analytique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivTriAnalytiqueTrait {

    /**
     * Niv tri analytique.
     *
     * @var string
     */
    private $nivTriAnalytique;

    /**
     * Get the niv tri analytique.
     *
     * @return string Returns the niv tri analytique.
     */
    public function getNivTriAnalytique() {
        return $this->nivTriAnalytique;
    }

    /**
     * Set the niv tri analytique.
     *
     * @param string $nivTriAnalytique The niv tri analytique.
     */
    public function setNivTriAnalytique($nivTriAnalytique) {
        $this->nivTriAnalytique = $nivTriAnalytique;
        return $this;
    }
}
