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
 * Taux tva article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxTvaArticleTrait {

    /**
     * Taux tva article.
     *
     * @var float
     */
    private $tauxTvaArticle;

    /**
     * Get the taux tva article.
     *
     * @return float Returns the taux tva article.
     */
    public function getTauxTvaArticle() {
        return $this->tauxTvaArticle;
    }

    /**
     * Set the taux tva article.
     *
     * @param float $tauxTvaArticle The taux tva article.
     */
    public function setTauxTvaArticle($tauxTvaArticle) {
        $this->tauxTvaArticle = $tauxTvaArticle;
        return $this;
    }
}
