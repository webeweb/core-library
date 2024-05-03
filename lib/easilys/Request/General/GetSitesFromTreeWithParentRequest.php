<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Request\General;

use WBW\Library\Easilys\Request\AbstractRequest;
use WBW\Library\Easilys\Response\AbstractResponse;
use WBW\Library\Easilys\Serializer\General\ResponseDeserializer;
use WBW\Library\Easilys\Traits\Integers\IntegerIdSiteTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerIdTreeTrait;
use WBW\Library\Common\Provider\SubstituableRequestInterface;

/**
 * GET sites from tree with parent request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Request\General
 */
class GetSitesFromTreeWithParentRequest extends AbstractRequest implements SubstituableRequestInterface {

    use IntegerIdSiteTrait;
    use IntegerIdTreeTrait;

    /**
     * Resource path.
     *
     * @var string
     */
    const RESOURCE_PATH = "/sites/from/:idSite/tree/:idTree/with-parent";

    /**
     * {@inheritdoc
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeGetSitesResponse($rawResponse);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }

    /**
     * {@inheritDoc}
     */
    public function getSubstituables(): array {

        return [
            ":idSite" => $this->getIdSite(),
            ":idTree" => $this->getIdTree(),
        ];
    }
}
