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
 * Code livreur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLivreurTrait {

    /**
     * Code livreur.
     *
     * @var string
     */
    private $codeLivreur;

    /**
     * Get the code livreur.
     *
     * @return string Returns the code livreur.
     */
    public function getCodeLivreur() {
        return $this->codeLivreur;
    }

    /**
     * Set the code livreur.
     *
     * @param string $codeLivreur The code livreur.
     */
    public function setCodeLivreur($codeLivreur) {
        $this->codeLivreur = $codeLivreur;
        return $this;
    }
}
