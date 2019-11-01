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
 * Code categorie client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCategorieClientTrait {

    /**
     * Code categorie client.
     *
     * @var string
     */
    private $codeCategorieClient;

    /**
     * Get the code categorie client.
     *
     * @return string Returns the code categorie client.
     */
    public function getCodeCategorieClient() {
        return $this->codeCategorieClient;
    }

    /**
     * Set the code categorie client.
     *
     * @param string $codeCategorieClient The code categorie client.
     */
    public function setCodeCategorieClient($codeCategorieClient) {
        $this->codeCategorieClient = $codeCategorieClient;
        return $this;
    }
}
