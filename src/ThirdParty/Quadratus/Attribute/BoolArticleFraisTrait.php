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
 * Article frais trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArticleFraisTrait {

    /**
     * Article frais.
     *
     * @var bool
     */
    private $articleFrais;

    /**
     * Get the article frais.
     *
     * @return bool Returns the article frais.
     */
    public function getArticleFrais() {
        return $this->articleFrais;
    }

    /**
     * Set the article frais.
     *
     * @param bool $articleFrais The article frais.
     */
    public function setArticleFrais($articleFrais) {
        $this->articleFrais = $articleFrais;
        return $this;
    }
}
