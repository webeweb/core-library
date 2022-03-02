<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider\Assets;

use WBW\Library\Symfony\Assets\Quote\QuoteInterface;
use WBW\Library\Symfony\Provider\ProviderInterface;

/**
 * Quote provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Assets
 */
interface QuoteProviderInterface extends ProviderInterface {

    /**
     * Tag name.
     *
     * @var string
     */
    const QUOTE_PROVIDER_TAG_NAME = "wbw.core.provider.assets.quote";

    /**
     * Get the authors.
     *
     * @return string[] Returns the authors.
     */
    public function getAuthors(): array;

    /**
     * Get the domain.
     *
     * @return string Returns the domain.
     */
    public function getDomain(): string;

    /**
     * Get the quotes.
     *
     * @return QuoteInterface[] Returns the quotes.
     */
    public function getQuotes(): array;

    /**
     * Initializes.
     *
     * @return void
     */
    public function init(): void;
}
