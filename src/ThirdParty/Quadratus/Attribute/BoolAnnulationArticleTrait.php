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
 * Annulation article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationArticleTrait {

    /**
     * Annulation article.
     *
     * @var bool
     */
    private $annulationArticle;

    /**
     * Get the annulation article.
     *
     * @return bool Returns the annulation article.
     */
    public function getAnnulationArticle() {
        return $this->annulationArticle;
    }

    /**
     * Set the annulation article.
     *
     * @param bool $annulationArticle The annulation article.
     */
    public function setAnnulationArticle($annulationArticle) {
        $this->annulationArticle = $annulationArticle;
        return $this;
    }
}
