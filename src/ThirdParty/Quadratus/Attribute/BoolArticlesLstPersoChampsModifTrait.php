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
 * Articles lst perso champs modif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArticlesLstPersoChampsModifTrait {

    /**
     * Articles lst perso champs modif.
     *
     * @var bool
     */
    private $articlesLstPersoChampsModif;

    /**
     * Get the articles lst perso champs modif.
     *
     * @return bool Returns the articles lst perso champs modif.
     */
    public function getArticlesLstPersoChampsModif() {
        return $this->articlesLstPersoChampsModif;
    }

    /**
     * Set the articles lst perso champs modif.
     *
     * @param bool $articlesLstPersoChampsModif The articles lst perso champs modif.
     */
    public function setArticlesLstPersoChampsModif($articlesLstPersoChampsModif) {
        $this->articlesLstPersoChampsModif = $articlesLstPersoChampsModif;
        return $this;
    }
}
