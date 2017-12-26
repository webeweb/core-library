<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility;

use WBW\Library\Core\HTTP\HTTPCodeInterface;

/**
 * HTTP utility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class HTTPUtility implements HTTPCodeInterface {

	/**
	 * Get the HTTP codes.
	 *
	 * @return array Returns the HTTP codes.
	 */
	public static function getCodes() {
		return [
			self::CODE_CONTINUE,
			self::CODE_SWITCHING_PROTOCOLS,
			self::CODE_PROCESSING,
			self::CODE_OK,
			self::CODE_CREATED,
			self::CODE_ACCEPTED,
			self::CODE_NON_AUTHORITATIVE_INFORMATION,
			self::CODE_NO_CONTENT,
			self::CODE_RESET_CONTENT,
			self::CODE_PARTIAL_CONTENT,
			self::CODE_MULTI_STATUS,
			self::CODE_ALREADY_REPORTED,
			self::CODE_IM_USED,
			self::CODE_MULTIPLE_CHOICES,
			self::CODE_MOVED_PERMANENTLY,
			self::CODE_MOVED_TEMPORARILY,
			self::CODE_SEE_OTHER,
			self::CODE_NOT_MODIFIED,
			self::CODE_USE_PROXY,
			self::CODE_TEMPORARY_REDIRECT,
			self::CODE_PERMANENT_REDIRECT,
			self::CODE_BAD_REQUEST,
			self::CODE_UNAUTHORIZED,
			self::CODE_PAYMENT_REQUIRED,
			self::CODE_FORBIDDEN,
			self::CODE_NOT_FOUND,
			self::CODE_METHOD_NOT_ALLOWED,
			self::CODE_NOT_ACCEPTABLE,
			self::CODE_PROXY_AUTHENTICATION_REQUIRED,
			self::CODE_REQUEST_TIME_OUT,
			self::CODE_CONFLICT,
			self::CODE_GONE,
			self::CODE_LENGTH_REQUIRED,
			self::CODE_PRECONDITION_FAILED,
			self::CODE_REQUEST_ENTITY_TOO_LARGE,
			self::CODE_REQUEST_URI_TOO_LONG,
			self::CODE_UNSUPPORTED_MEDIA_TYPE,
			self::CODE_REQUESTED_RANGE_UNSATISFIABLE,
			self::CODE_EXPECTATION_FAILED,
			self::CODE_UNPROCESSABLE_ENTITY,
			self::CODE_LOCKED,
			self::CODE_METHOD_FAILURE,
			self::CODE_UPGRADE_REQUIRED,
			self::CODE_PRECONDITION_REQUIRED,
			self::CODE_TOO_MANY_REQUESTS,
			self::CODE_REQUEST_HEADER_FIELDS_TOO_LARGE,
			self::CODE_INTERNAL_SERVER_ERROR,
			self::CODE_NOT_IMPLEMENTED,
			self::CODE_BAD_GATEWAY_OU_PROXY_ERROR,
			self::CODE_SERVICE_UNAVAILABLE,
			self::CODE_GATEWAY_TIME_OUT,
			self::CODE_HTTP_VERSION_NOT_SUPPORTED,
			self::CODE_VARIANT_ALSO_NEGOTIATES,
			self::CODE_INSUFFICIENT_STORAGE,
			self::CODE_LOOP_DETECTED,
			self::CODE_NOT_EXTENDED,
			self::CODE_NETWORK_AUTHENTICATION_REQUIRED,
		];
	}

}
