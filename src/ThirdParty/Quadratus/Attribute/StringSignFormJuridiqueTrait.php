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
 * Sign form juridique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignFormJuridiqueTrait {

    /**
     * Sign form juridique.
     *
     * @var string
     */
    private $signFormJuridique;

    /**
     * Get the sign form juridique.
     *
     * @return string Returns the sign form juridique.
     */
    public function getSignFormJuridique() {
        return $this->signFormJuridique;
    }

    /**
     * Set the sign form juridique.
     *
     * @param string $signFormJuridique The sign form juridique.
     */
    public function setSignFormJuridique($signFormJuridique) {
        $this->signFormJuridique = $signFormJuridique;
        return $this;
    }
}
