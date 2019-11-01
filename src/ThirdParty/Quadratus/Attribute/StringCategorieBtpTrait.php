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
 * Categorie btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCategorieBtpTrait {

    /**
     * Categorie btp.
     *
     * @var string
     */
    private $categorieBtp;

    /**
     * Get the categorie btp.
     *
     * @return string Returns the categorie btp.
     */
    public function getCategorieBtp() {
        return $this->categorieBtp;
    }

    /**
     * Set the categorie btp.
     *
     * @param string $categorieBtp The categorie btp.
     */
    public function setCategorieBtp($categorieBtp) {
        $this->categorieBtp = $categorieBtp;
        return $this;
    }
}
