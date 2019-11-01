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
 * Collectif frn debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectifFrnDebutTrait {

    /**
     * Collectif frn debut.
     *
     * @var string
     */
    private $collectifFrnDebut;

    /**
     * Get the collectif frn debut.
     *
     * @return string Returns the collectif frn debut.
     */
    public function getCollectifFrnDebut() {
        return $this->collectifFrnDebut;
    }

    /**
     * Set the collectif frn debut.
     *
     * @param string $collectifFrnDebut The collectif frn debut.
     */
    public function setCollectifFrnDebut($collectifFrnDebut) {
        $this->collectifFrnDebut = $collectifFrnDebut;
        return $this;
    }
}
