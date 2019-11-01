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
 * Classe4 frn debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClasse4FrnDebutTrait {

    /**
     * Classe4 frn debut.
     *
     * @var string
     */
    private $classe4FrnDebut;

    /**
     * Get the classe4 frn debut.
     *
     * @return string Returns the classe4 frn debut.
     */
    public function getClasse4FrnDebut() {
        return $this->classe4FrnDebut;
    }

    /**
     * Set the classe4 frn debut.
     *
     * @param string $classe4FrnDebut The classe4 frn debut.
     */
    public function setClasse4FrnDebut($classe4FrnDebut) {
        $this->classe4FrnDebut = $classe4FrnDebut;
        return $this;
    }
}
